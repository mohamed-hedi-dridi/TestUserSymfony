<?php

namespace App\Service ;

use Twig\Environment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class UserService
{
    public function __construct(private EntityManagerInterface $em, 
                                private Environment $environment,
                                private ParameterBagInterface $parameter)
    {
        
        
    }
    public function handleUserFormData( UserPasswordHasherInterface $userPasswordHasher, FormInterface $userForm): JsonResponse
    {
        if ($userForm->isValid()) {
            return $this->handleValidForm($userPasswordHasher,$userForm);
        } else {
            return $this->handleInvalidForm($userForm);
        }
    }

    

    public function handleValidForm(UserPasswordHasherInterface $userPasswordHasher,FormInterface $userForm){


        /** @var Video $video */
        $user = $userForm->getData();
        $user->setPassword(
            $userPasswordHasher->hashPassword(
                $user,
                $userForm->get('plainPassword')->getData()
            )
        );
    
        $this->em->persist($user);
        $this->em->flush();
        return new JsonResponse([
            'code' => 200,
            'html' => $this->environment->render('user/UserListe.html.twig', [
                'user' => $user
            ])
        ]);

    }

    public function handleInvalidForm(FormInterface $userForm)
    {
        return new JsonResponse([
            'code' => 400,
            'errors' => $this->getErrorMessages($userForm)
        ]);
    }

    private function getErrorMessages(FormInterface $form): array
    {
        $errors = [];

        foreach ($form->getErrors() as $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }
    
}