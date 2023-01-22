<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserFormType;
use App\Repository\UserRepository;
use App\Service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
{
    
    #[Route('/', name: 'app_main', methods: ['GET','POST'])]
    public function index(AuthorizationCheckerInterface $auth,UserService $userService, Request $request, UserPasswordHasherInterface $userPasswordHasher, UserRepository $userRepository, EntityManagerInterface $em): Response
    {
        if(!$auth->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirectToRoute('app_login');
        }
        $user= new User(); 
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $response =  $userService->handleUserFormData($userPasswordHasher,$form);
            if($response->getStatusCode()=='200'){
                $this->addFlash('success','User ajouté avec success');
            }
        }
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
            'form' => $form
        ]);
    }

    #[Route('user/edit/{id}', name: 'app_user_edit', methods: ['PUT'])]
    public function edit(int $id, Request $request, User $user, UserRepository $userRepository, SerializerInterface $serializer,EntityManagerInterface $em,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = $userRepository->find($id);
        $data = json_decode($request->getContent(), true);
        $finduser = $userRepository->findOneByEmail($data["email"]);
        if($finduser){
            if($finduser->getId()!= $id){
                return new JsonResponse(['message' => 'Email déja utilisé '], 400);
            }
        }
        if($user){
            $user->setFullname($data["fullname"]); 
            $user->setEmail($data["email"]); 
            $user->setPassword($userPasswordHasher->hashPassword($user,$data['password'])); 
            $em->persist($user);
            $em->flush();
            return new JsonResponse(['message' => 'User modifié avec success',
                                'user' => $data], 201);
            
        }
        return new JsonResponse(['message' => 'User modifié avec success','user' => $data], 201);
        
    }
    
    

    #[Route('/api/users', name: 'get_all_users', methods: ['GET'])]
    public function getAllUsers(UserRepository $userRepository, SerializerInterface $serializer)
    {
        $users = $userRepository->findAll();
        $json = $serializer->serialize($users, 'json');
        
        return new Response($json, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    #[Route('/api/getuser/{id}', name: 'get_user', methods: ['GET'])]
    public function getUsers(int $id, UserRepository $userRepository, SerializerInterface $serializer)
    {
        $users = $userRepository->find($id);
        $json = $serializer->serialize($users, 'json');
        return new Response($json, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    // Ajouter Utilisateur API

    #[Route('/api/adduser', name: 'add_user', methods: ['POST'])]
    public function addUser(Request $request,SerializerInterface $serializer, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher,EntityManagerInterface $em): JsonResponse
    {
        //$data = json_decode($request->getContent(), true);
        //return new JsonResponse($data, 201);
        // 1. Retrieve user data from request body
        try {
            $data = json_decode($request->getContent(), true);
            $finduser = $userRepository->findOneByEmail($data["email"]);
            if($finduser){
                return new JsonResponse(['message' => 'Email déja utilisé'], 403);
            }
            // 3. Persist user to database
            $user = new User();
            $user->setFullname($data['fullname']);
            $user->setEmail($data["email"]);
            $user->setPassword($userPasswordHasher->hashPassword($user,$data['password']));
            $user->setRoles([]);
            // ... set other properties
            //$em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            // 4. Return new user data
            return new JsonResponse(['message' => 'User Ajouté avec success',
                                        'id' => $user->getId() ], 201);
        } catch (\Exception  $e) {
            return new JsonResponse(['message' => $e], 503);
        }
        
    }

    
    #[Route('/api/user/delete/{id}', name: 'delete_user', methods: ['DELETE'])]
    public function deleteUser(int $id, UserRepository $userRepository ,EntityManagerInterface $em): JsonResponse
    {
        $user = $userRepository->find($id);

        if (!$user) {
            return new JsonResponse(['message' => 'User not found'], 404);
        }
        $em->remove($user);
        $em->flush();

        return new JsonResponse(['message' => 'User deleted'], 200);
    }
}
