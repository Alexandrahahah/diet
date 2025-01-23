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

/* main/rdv.html.twig */
class __TwigTemplate_6cc0cd320289bcb9f88208d360d1ff8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/rdv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/rdv.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"img/logoDiet_transparent.png\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
    <link rel=\"stylesheet\" href=\"css/tinyminireset.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap\" rel=\"stylesheet\">
<script src=\"https://kit.fontawesome.com/834d8c0b76.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>




    <title>Alexandra Jacob diététicienne</title>
</head>

  <body>

    
        <header class=\" text-white text-center\">
            
            <div class=\"banniere_header3\">
                 ";
        // line 36
        echo "                    ";
        // line 41
        echo "                ";
        echo " 
          
                <nav class=\"navbar navbar-expand-lg\">
                  <div class=\"container-fluid\">
                    
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                      <ul class=\"navbar-nav justify-content-center w-100 mx-2  mb-2 mb-lg-0 fw-bolder\">
                        <li class=\"nav-item mx-2\">
                          <a class=\"nav-link active mx-2\" aria-current=\"page\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                        </li>
                        <li class=\"nav-item mx-2\">
                          <a class=\"nav-link active mx-2\" aria-current=\"page\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultTarifs");
        echo "\">Consultations et tarifs</a>
                        </li>
                        <li class=\"nav-item mx-2\">
                          <a class=\"nav-link active mx-2\" aria-current=\"page\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv");
        echo "\">Prendre rendez-vous</a>
                        </li>
                        <li class=\"nav-item mx-2\">
                          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                        </li>
                     
                    </div>
                  </div>
                </nav>
             
           
    </header>
    <div class=\"section_mutuelle2\">
     
    
    <h2 class=\"text-center\" >Je choisis mon lieux de rendez-vous</h2>
    
    <div class=\"section_rdv p-5 text-center\">
      
     <div class=\"row mb-5 pb-2\">
       <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-6\">
        <div class=\"card text-center\">
       
        <div class=\"card-body\">
          <h5 class=\"card-title\">Maison médicale de Loudun</h5>
          
          <img src=\"img/loudun cabinet.png\" class=\"card-img-top mb-4 mt-1\" style=\"width: 20rem;\"alt=\"...\">
          <p class=\"card-text\">Consultations tous les mercredis de 10h à 19h</p>
          </div>
      </div>
      <a href=\"https://alexandra-jacob-dieteticienne-nutritionniste.reservio.com\" class=\"btn btn-warning  mt-2 mb-4 fs-5\">Je choisis ce cabinet</a>
        
    </div>

    <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-6\">
      <div class=\"card text-center\">
        

        <div class=\"card-body\">
          <h5 class=\"card-title\">Maison médicale de Mont-Sur-Guesnes</h5>
          <img src=\"img/mont cabient.png\" class=\"card-img-top mb-1 mt-1\" style=\"width: 20rem;\"alt=\"...\">
          <p class=\"card-text\">Consultations tous les mardis de 10h à 19h<br> 1 jeudi sur deux de 10h à 19h <br> 1 samedi sur deux de 9h à 13h
          </p>
           </div>
       
      </div>
      <a href=\"https://alexandra-dieteticienne.reservio.com\" class=\"btn btn-warning  mt-2 mb-4 fs-5\">Je choisis ce cabinet</a>
    
    </div>
     
    </div>

  </div>
</div>


   <script src=\"main.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script>
      AOS.init();
    </script>
   </body>
 
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/rdv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 58,  105 => 55,  99 => 52,  93 => 49,  82 => 41,  80 => 36,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"img/logoDiet_transparent.png\">
    <link href=\"{{ asset('css/base.css') }}\" rel=\"stylesheet\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
    <link rel=\"stylesheet\" href=\"css/tinyminireset.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap\" rel=\"stylesheet\">
<script src=\"https://kit.fontawesome.com/834d8c0b76.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>




    <title>Alexandra Jacob diététicienne</title>
</head>

  <body>

    
        <header class=\" text-white text-center\">
            
            <div class=\"banniere_header3\">
                 {# <nav class=\"container \">
                    <div class=\"row md-flex fw-bold justify-content-center\">
                  {# <a class=\"a_logo col-12 col-md-2   href=\"#\"><img src=\"img/logoAssietteRose.png\" style=\"width: 3rem;\"alt=\"...\"></a> #}
                    {# <a class=\"a_header col-12 col-md-2  text-black text-decoration-none\" href=\"{{ path('home') }}\">Accueil</a>
                    <a class=\"a_header col-12 col-md-2  text-black text-decoration-none\" href=\"{{ path('consultTarifs') }}\" >Consultations et tarifs</a>
                    <a class=\"a_header col-12 col-md-2  text-black text-decoration-none\" href=\"{{ path('rdv') }}\">Prendre rendez-vous</a>
                    <a class=\"a_header col-12 col-md-2  text-black text-decoration-none\" href=\"{{ path('contact') }}\">Contact</a>
                </div> <!--END class container--> #}
                {# </nav> #} 
          
                <nav class=\"navbar navbar-expand-lg\">
                  <div class=\"container-fluid\">
                    
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                      <ul class=\"navbar-nav justify-content-center w-100 mx-2  mb-2 mb-lg-0 fw-bolder\">
                        <li class=\"nav-item mx-2\">
                          <a class=\"nav-link active mx-2\" aria-current=\"page\" href=\"{{ path('home') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item mx-2\">
                          <a class=\"nav-link active mx-2\" aria-current=\"page\" href=\"{{ path('consultTarifs') }}\">Consultations et tarifs</a>
                        </li>
                        <li class=\"nav-item mx-2\">
                          <a class=\"nav-link active mx-2\" aria-current=\"page\" href=\"{{ path('rdv') }}\">Prendre rendez-vous</a>
                        </li>
                        <li class=\"nav-item mx-2\">
                          <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('contact') }}\">Contact</a>
                        </li>
                     
                    </div>
                  </div>
                </nav>
             
           
    </header>
    <div class=\"section_mutuelle2\">
     
    
    <h2 class=\"text-center\" >Je choisis mon lieux de rendez-vous</h2>
    
    <div class=\"section_rdv p-5 text-center\">
      
     <div class=\"row mb-5 pb-2\">
       <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-6\">
        <div class=\"card text-center\">
       
        <div class=\"card-body\">
          <h5 class=\"card-title\">Maison médicale de Loudun</h5>
          
          <img src=\"img/loudun cabinet.png\" class=\"card-img-top mb-4 mt-1\" style=\"width: 20rem;\"alt=\"...\">
          <p class=\"card-text\">Consultations tous les mercredis de 10h à 19h</p>
          </div>
      </div>
      <a href=\"https://alexandra-jacob-dieteticienne-nutritionniste.reservio.com\" class=\"btn btn-warning  mt-2 mb-4 fs-5\">Je choisis ce cabinet</a>
        
    </div>

    <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-6\">
      <div class=\"card text-center\">
        

        <div class=\"card-body\">
          <h5 class=\"card-title\">Maison médicale de Mont-Sur-Guesnes</h5>
          <img src=\"img/mont cabient.png\" class=\"card-img-top mb-1 mt-1\" style=\"width: 20rem;\"alt=\"...\">
          <p class=\"card-text\">Consultations tous les mardis de 10h à 19h<br> 1 jeudi sur deux de 10h à 19h <br> 1 samedi sur deux de 9h à 13h
          </p>
           </div>
       
      </div>
      <a href=\"https://alexandra-dieteticienne.reservio.com\" class=\"btn btn-warning  mt-2 mb-4 fs-5\">Je choisis ce cabinet</a>
    
    </div>
     
    </div>

  </div>
</div>


   <script src=\"main.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script>
      AOS.init();
    </script>
   </body>
 
</html>", "main/rdv.html.twig", "C:\\Users\\CASH\\Desktop\\AFPA\\Symphony\\Blog musiqueV2\\templates\\main\\rdv.html.twig");
    }
}
