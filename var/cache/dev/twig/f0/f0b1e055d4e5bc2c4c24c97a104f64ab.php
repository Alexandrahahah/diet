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

/* base.html.twig */
class __TwigTemplate_45884083cee517989516d24197853f81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <link rel=\"stylesheet\" href=\"css/base.css\">
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap\" rel=\"stylesheet\">

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
";
        // line 22
        echo "<link href=\"https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Source+Sans+Pro&display=swap\" rel=\"stylesheet\">
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap\" rel=\"stylesheet\">

<script src=\"https://kit.fontawesome.com/834d8c0b76.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>



<link rel=\"stylesheet\" href=\"base.css\">
<title><img src=\"img/logologo.png\" class=\"card-img-top\" style=\"width: 20%;\"alt=\"...\">Alexandra Jacob diététicienne</title>
  
    
</head>
  
<body>
  

    
        <header class=\" text-white text-center\">
            
            <div class=\"banniere_header\">
                
                ";
        // line 49
        echo "                    ";
        // line 54
        echo "                ";
        // line 55
        echo "                <nav class=\"navbar navbar-expand-lg\">
                    <div class=\"container-fluid\">
                      <a class=\"navbar-brand\" href=\"#\">Alexandra <br>JACOB</a>
                     
                      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav ms-auto mx-2  mb-2 mb-lg-0 fw-bolder\">
                          <li class=\"nav-item mx-2\">
                            <a class=\"nav-link active mx-2\" aria-current=\"page\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                          </li>
                          <li class=\"nav-item mx-2\">
                            <a class=\"nav-link active mx-2\" aria-current=\"page\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultTarifs");
        echo "\">Consultations et tarifs</a>
                          </li>
                          <li class=\"nav-item mx-2\">
                            <a class=\"nav-link active mx-2\" aria-current=\"page\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv");
        echo "\">Prendre rendez-vous</a>
                          </li>
                          <li class=\"nav-item mx-2\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                          </li>
                       
                      </div>
                    </div>
                  </nav>
          
             
               <h1 class=\" pulse fw-bold  text-black\">Alexandra JACOB</h1>
                <h2 class=\"h2_head fw-bold text-black \">Diététicienne Nutritionniste</h2>
            </div> <!--END class=\"banniere_header\"-->
    </header>
   
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
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 71,  118 => 68,  112 => 65,  106 => 62,  97 => 55,  95 => 54,  93 => 49,  67 => 22,  52 => 8,  43 => 1,);
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
    <link rel=\"stylesheet\" href=\"css/base.css\">
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap\" rel=\"stylesheet\">

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
{# <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin> #}
<link href=\"https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Source+Sans+Pro&display=swap\" rel=\"stylesheet\">
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap\" rel=\"stylesheet\">

<script src=\"https://kit.fontawesome.com/834d8c0b76.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>



<link rel=\"stylesheet\" href=\"base.css\">
<title><img src=\"img/logologo.png\" class=\"card-img-top\" style=\"width: 20%;\"alt=\"...\">Alexandra Jacob diététicienne</title>
  
    
</head>
  
<body>
  

    
        <header class=\" text-white text-center\">
            
            <div class=\"banniere_header\">
                
                {# <nav class=\"container \">
                    <div class=\"row md-flex fw-bold justify-content-center\">
                  {# <a class=\"a_logo col-12 col-md-2   href=\"#\"><img src=\"img/logoAssietteRose.png\" style=\"width: 3rem;\"alt=\"...\"></a> #}
                    {# <a class=\"a_header col-12 col-md-2  text-black text-decoration-none\" href=\"{{ path('home') }}\">Accueil</a>
                    <a class=\"a_header col-12 col-md-2  text-black text-decoration-none\" href=\"{{ path('consultTarifs') }}\" >Consultations et tarifs</a>
                    <a class=\"a_header col-12 col-md-2  text-black text-decoration-none\" href=\"{{ path('rdv') }}\" >Prendre rendez-vous</a>
                    <a class=\"a_header col-12 col-md-2  text-black text-decoration-none\" href=\"{{ path('contact') }}\">Contact</a>
                </div> <!--END class container--> #}
                {# </nav>  #}
                <nav class=\"navbar navbar-expand-lg\">
                    <div class=\"container-fluid\">
                      <a class=\"navbar-brand\" href=\"#\">Alexandra <br>JACOB</a>
                     
                      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav ms-auto mx-2  mb-2 mb-lg-0 fw-bolder\">
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
          
             
               <h1 class=\" pulse fw-bold  text-black\">Alexandra JACOB</h1>
                <h2 class=\"h2_head fw-bold text-black \">Diététicienne Nutritionniste</h2>
            </div> <!--END class=\"banniere_header\"-->
    </header>
   
    <script src=\"main.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script>
      AOS.init();
    </script>
    
   </body>
</html>", "base.html.twig", "C:\\Users\\CASH\\Desktop\\AFPA\\Symphony\\Blog musiqueV2\\templates\\base.html.twig");
    }
}
