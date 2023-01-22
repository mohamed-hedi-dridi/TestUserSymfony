<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/index.html.twig */
class __TwigTemplate_3ddc7420ddcafc94cb93d0d44bc7fc20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'cssbody' => [$this, 'block_cssbody'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MainController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_cssbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssbody"));

        echo " class=\"hold-transition sidebar-mini\" ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->loadTemplate("navbar.html.twig", "user/index.html.twig", 6)->display($context);
        // line 7
        $this->loadTemplate("sidebar.html.twig", "user/index.html.twig", 7)->display($context);
        // line 8
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1518.31px;\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>Users</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
              <li class=\"breadcrumb-item active\">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
        // line 31
        $this->loadTemplate("_partials/_flash.html.twig", "user/index.html.twig", 31)->display($context);
        // line 32
        echo "          </div>
          <div class=\"col-md-4\">
              <div class=\"card card-primary card-outline\">
              <div class=\"card-header\">
                  <h3 class=\"card-title\">Users</h3>
              </div> <!-- /.card-body -->
              <div class=\"card-body\">
                  <form id=\"form\"  >
                    <input type=\"hidden\" id=\"id\">
                    <label for=\"user_form_fullname\" class=\"required\">Nom Prénom :</label>
                    <input class=\"form-control\" placeholder=\"Nom Prénom\" id=\"fullname\" required=\"required\" type=\"text\" name=\"nom\">
                    <label for=\"user_form_email\" class=\"required mt-2\">Email :</label>
                    <input class=\"form-control\" id=\"email\" required=\"required\" type=\"email\" name=\"email\" placeholder=\"exemple@gmail.com\">
                    <label for=\"user_form_password\" class=\"required mt-2\">Mot de passe :</label>
                    <input class=\"form-control\" placeholder=\"********\" type=\"password\"  id=\"password\" required=\"required\" type=\"text\" name=\"password\">      
                  </form>
                    <button type=\"submit\" onclick=\"handleForm()\" class=\"btn btn-primary btn-block mt-2\"> submit</button> 
              </div><!-- /.card-body -->
              </div>
          </div>
          <div class=\"col-md-8\">
              <div class=\"card\">
                  <div class=\"card-header\">
                      <h3 class=\"card-title\">Liste Users: </h3>
                  </div>
                  <div class=\"card-body\">
                      <table id=\"example2\" class=\"table table-bordered table-hover\">
                      <thead>
                      <tr>
                          <th>id</th>
                          <th>Nom Prénom</th>
                          <th>Email</th>
                          <th>Actions</th>
                      </tr>
                      </thead>
                      <tbody id=\"users_list\">
                          ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 68, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 69
            echo "                              <tr id=\"tr";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
                                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                <td>
                                    <button class=\"btn\" onclick=\"updateFormFunction(";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo ")\"><i class=\"fas fa-edit\"></i>Edit</button>
                                    <button class=\"btn bg-danger\" onclick=\"deleteFunction(";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo ")\"><i class=\"fas fa-trash\"></i>Supprimer</button>
                                </td>
                            </tr>
                          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                              <tr>
                                  <td colspan=\"4\">no records found</td>
                              </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                      </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<div class=\"modal fade\" id=\"modal-danger\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content bg-danger\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">Supprimer Utilisateur</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>Voulez-vous vraiment supprimer cet utilisateur? </p>
            </div>
            <div class=\"modal-footer justify-content-between\">
              <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Non</button>
              <button type=\"button\" id=\"btnDelteYes\" class=\"btn btn-outline-light\">Oui</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 116
        echo "
<script>
  function handleForm(){
    id = \$(\"#id\").val();
    name = \$(\"#fullname\").val();
    email = \$(\"#email\").val();
    password = \$(\"#password\").val(); 
    var user =
        {
          fullname : name,
          password : password,
          email : email
        };
    if(!id){
      addUser(user); 
    }else{
      updateUser(user , id); 
    }
  }

  function deleteFunction(id){
    \$('#modal-danger').data('id', id).modal('show'); 

    \$(\"body\").on('click', '#btnDelteYes', function() {
    var id = \$('#modal-danger').data('id');
    \$('#modal-danger').modal('hide');
    \$.ajax({
          url:\"/api/user/delete/\"+id,
          type:\"DELETE\",
          success: function(data){
            alert(data.message); 
            \$(\"#tr\"+id).remove();
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error(\"Response json has no message\");
              }
              else{
                alert(json.message);
              }
            }
          catch(ex){
            alert(\"unexpected error (code:\" + response.status +\")\");
          }
        }

      });
   
  });
  }

  function updateFormFunction(id){
    \$.ajax({
          url:\"/api/getuser/\"+id,
          type:\"GET\",
          success: function(data){
            console.log(data); 
            \$('#id').val(data.id); 
            \$('#email').val(data.email); 
            \$('#fullname').val(data.fullname); 
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error(\"Response json has no message\");
              }
              else{
                alert(json.message);
              }
            }catch(ex){
            alert(\"unexpected error (code:\" + response.status +\")\");
            }
          }

      });

  }

  function updateUser(user , id){
    \$.ajax({
          url:\"user/edit/\"+id,
          type:\"PUT\",
          data:JSON.stringify(user),
          contentType: 'application/json',
          success: function(data){
            console.log(data); 
            \$('#tr'+id).empty(); 
            \$(\"#tr\"+id).append(\"<td>\"+id+\"</td><td>\"+data.user.fullname+\"</td><td>\"+data.user.email+\"</td><td><button class='btn' onclick='updateFormFunction(\"+id+\")'><i class='fas fa-edit'></i>Edit</button><button class='btn bg-danger' onclick='deleteFunction(\"+id+\")'><i class='fas fa-trash'></i>Supprimer</button></td></tr>\");
            alert(data.message);
            document.getElementById(\"id\").value = null;
            document.getElementById(\"email\").value = null;
            document.getElementById(\"fullname\").value = null;
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error(\"Response json has no message\");
              }
              else{
                alert(json.message);
              }
            }
          catch(ex){
            alert(\"unexpected error (code:\" + response.status +\")\");
          }
        }

      });
  }

  function addUser(user){
    \$.ajax({
          url:\"";
        // line 232
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_user");
        echo "\",
          type:\"POST\",
          data:JSON.stringify(user),
          contentType: 'application/json',
          success: function(data){
            id = data.id;
            \$(\"#users_list\").append(\"<tr id='tr\"+id+\"'><td>\"+id+\"</td><td>\"+user.fullname+\"</td><td>\"+user.email+\"</td><td><button class='btn' onclick='updateFormFunction(\"+id+\")'><i class='fas fa-edit'></i>Edit</button><button class='btn bg-danger' onclick='deleteFunction(\"+id+\")'><i class='fas fa-trash'></i>Supprimer</button></td></tr>\");
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error(\"Response json has no message\");
              }
              else{
                alert(json.message);
              }
            }
          catch(ex){
            alert(\"unexpected error (code:\" + response.status +\")\");
          }
        }
      });

  }

</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 232,  274 => 116,  264 => 115,  223 => 83,  214 => 79,  205 => 75,  201 => 74,  196 => 72,  192 => 71,  188 => 70,  183 => 69,  178 => 68,  140 => 32,  138 => 31,  113 => 8,  111 => 7,  109 => 6,  99 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}
{% block cssbody %} class=\"hold-transition sidebar-mini\" {% endblock %}
{% block body %}
{% include \"navbar.html.twig\" %}
{% include \"sidebar.html.twig\" %}

<div class=\"content-wrapper\" style=\"min-height: 1518.31px;\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>Users</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
              <li class=\"breadcrumb-item active\">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {% include '_partials/_flash.html.twig' %}
          </div>
          <div class=\"col-md-4\">
              <div class=\"card card-primary card-outline\">
              <div class=\"card-header\">
                  <h3 class=\"card-title\">Users</h3>
              </div> <!-- /.card-body -->
              <div class=\"card-body\">
                  <form id=\"form\"  >
                    <input type=\"hidden\" id=\"id\">
                    <label for=\"user_form_fullname\" class=\"required\">Nom Prénom :</label>
                    <input class=\"form-control\" placeholder=\"Nom Prénom\" id=\"fullname\" required=\"required\" type=\"text\" name=\"nom\">
                    <label for=\"user_form_email\" class=\"required mt-2\">Email :</label>
                    <input class=\"form-control\" id=\"email\" required=\"required\" type=\"email\" name=\"email\" placeholder=\"exemple@gmail.com\">
                    <label for=\"user_form_password\" class=\"required mt-2\">Mot de passe :</label>
                    <input class=\"form-control\" placeholder=\"********\" type=\"password\"  id=\"password\" required=\"required\" type=\"text\" name=\"password\">      
                  </form>
                    <button type=\"submit\" onclick=\"handleForm()\" class=\"btn btn-primary btn-block mt-2\"> submit</button> 
              </div><!-- /.card-body -->
              </div>
          </div>
          <div class=\"col-md-8\">
              <div class=\"card\">
                  <div class=\"card-header\">
                      <h3 class=\"card-title\">Liste Users: </h3>
                  </div>
                  <div class=\"card-body\">
                      <table id=\"example2\" class=\"table table-bordered table-hover\">
                      <thead>
                      <tr>
                          <th>id</th>
                          <th>Nom Prénom</th>
                          <th>Email</th>
                          <th>Actions</th>
                      </tr>
                      </thead>
                      <tbody id=\"users_list\">
                          {% for user in users %}
                              <tr id=\"tr{{ user.id }}\">
                                <td>{{ user.id }}</td>
                                <td>{{ user.fullname }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    <button class=\"btn\" onclick=\"updateFormFunction({{ user.id }})\"><i class=\"fas fa-edit\"></i>Edit</button>
                                    <button class=\"btn bg-danger\" onclick=\"deleteFunction({{ user.id }})\"><i class=\"fas fa-trash\"></i>Supprimer</button>
                                </td>
                            </tr>
                          {% else %}
                              <tr>
                                  <td colspan=\"4\">no records found</td>
                              </tr>
                          {% endfor %}
                      </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<div class=\"modal fade\" id=\"modal-danger\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content bg-danger\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">Supprimer Utilisateur</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>Voulez-vous vraiment supprimer cet utilisateur? </p>
            </div>
            <div class=\"modal-footer justify-content-between\">
              <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Non</button>
              <button type=\"button\" id=\"btnDelteYes\" class=\"btn btn-outline-light\">Oui</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
{% endblock %}
{% block script %}

<script>
  function handleForm(){
    id = \$(\"#id\").val();
    name = \$(\"#fullname\").val();
    email = \$(\"#email\").val();
    password = \$(\"#password\").val(); 
    var user =
        {
          fullname : name,
          password : password,
          email : email
        };
    if(!id){
      addUser(user); 
    }else{
      updateUser(user , id); 
    }
  }

  function deleteFunction(id){
    \$('#modal-danger').data('id', id).modal('show'); 

    \$(\"body\").on('click', '#btnDelteYes', function() {
    var id = \$('#modal-danger').data('id');
    \$('#modal-danger').modal('hide');
    \$.ajax({
          url:\"/api/user/delete/\"+id,
          type:\"DELETE\",
          success: function(data){
            alert(data.message); 
            \$(\"#tr\"+id).remove();
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error(\"Response json has no message\");
              }
              else{
                alert(json.message);
              }
            }
          catch(ex){
            alert(\"unexpected error (code:\" + response.status +\")\");
          }
        }

      });
   
  });
  }

  function updateFormFunction(id){
    \$.ajax({
          url:\"/api/getuser/\"+id,
          type:\"GET\",
          success: function(data){
            console.log(data); 
            \$('#id').val(data.id); 
            \$('#email').val(data.email); 
            \$('#fullname').val(data.fullname); 
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error(\"Response json has no message\");
              }
              else{
                alert(json.message);
              }
            }catch(ex){
            alert(\"unexpected error (code:\" + response.status +\")\");
            }
          }

      });

  }

  function updateUser(user , id){
    \$.ajax({
          url:\"user/edit/\"+id,
          type:\"PUT\",
          data:JSON.stringify(user),
          contentType: 'application/json',
          success: function(data){
            console.log(data); 
            \$('#tr'+id).empty(); 
            \$(\"#tr\"+id).append(\"<td>\"+id+\"</td><td>\"+data.user.fullname+\"</td><td>\"+data.user.email+\"</td><td><button class='btn' onclick='updateFormFunction(\"+id+\")'><i class='fas fa-edit'></i>Edit</button><button class='btn bg-danger' onclick='deleteFunction(\"+id+\")'><i class='fas fa-trash'></i>Supprimer</button></td></tr>\");
            alert(data.message);
            document.getElementById(\"id\").value = null;
            document.getElementById(\"email\").value = null;
            document.getElementById(\"fullname\").value = null;
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error(\"Response json has no message\");
              }
              else{
                alert(json.message);
              }
            }
          catch(ex){
            alert(\"unexpected error (code:\" + response.status +\")\");
          }
        }

      });
  }

  function addUser(user){
    \$.ajax({
          url:\"{{ path('add_user') }}\",
          type:\"POST\",
          data:JSON.stringify(user),
          contentType: 'application/json',
          success: function(data){
            id = data.id;
            \$(\"#users_list\").append(\"<tr id='tr\"+id+\"'><td>\"+id+\"</td><td>\"+user.fullname+\"</td><td>\"+user.email+\"</td><td><button class='btn' onclick='updateFormFunction(\"+id+\")'><i class='fas fa-edit'></i>Edit</button><button class='btn bg-danger' onclick='deleteFunction(\"+id+\")'><i class='fas fa-trash'></i>Supprimer</button></td></tr>\");
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error(\"Response json has no message\");
              }
              else{
                alert(json.message);
              }
            }
          catch(ex){
            alert(\"unexpected error (code:\" + response.status +\")\");
          }
        }
      });

  }

</script>

{% endblock %}", "user/index.html.twig", "C:\\xampp\\htdocs\\gestion-users\\templates\\user\\index.html.twig");
    }
}
