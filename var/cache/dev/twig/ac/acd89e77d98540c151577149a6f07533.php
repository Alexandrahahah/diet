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

/* main/consultTarifs.html.twig */
class __TwigTemplate_7fd09b2bc76eb0db75a91fbc12f96db4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/consultTarifs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/consultTarifs.html.twig"));

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
            
            <div class=\"banniere_header2\">
                
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
    <div class=\"section_mutuelle\">
      <h2 class=\"text-center fw-bold\">Les consultations diététiques sont-elles remboursées ?</h2>
      <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"d-flex flex-column col\">
             <p class=\"fw-bolder\">Toutes les consultations diététiques ne sont pas prises en charge par la sécurité sociale. <br> Mon rôle est de vous guider, pas à pas, vers une alimentation qui vous ressemble, et qui vous permet de vivre en harmonie avec vos besoins et vos envies.

              Toutefois, elles peuvent être remboursées par certaines mutuelles selon votre contrat, cela concerne les consultations en cabinet ainsi que les téléconsultations.</p> </div>
            <a href=\"#\"  class=\"btn btn-light col border border-1 m-1\" tabindex=\"-1\" role=\"button\" >rechercher votre mutuelle</a>
          </div>
        </div>

        <div class=\"section_2_consultations p-5\">
          <h2 class=\"text-center mb-4 fw-bolder\">Les consultations</h2>
    <div class=\"row mb-5 pb-2\">
      <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-6\">
          <div class=\"card text-center\">
            <div class=\"card-header fs-4 fw-bolder\">
              Première consultation
            </div>
            <div class=\"card-body\">
              <h5 class=\"card-title fw-bolder my-1\">Tarif : 45 €</h5>
              
              <img src=\"img/consult1.jpg\" class=\"card-img-top mb-2 mt-1\" style=\"width: 12rem;\"alt=\"...\">
              <p class=\"card-text fw-bold fs-5 my-3\">Durée de la consultation : 1 heure</p>
              <p class=\"card-text textplus lh-lg text-start fw-bolder\">Lors d'une première consultation, 
                je propose : <br> - Un bilan complet pour comprendre votre situation, vos habitudes et vos besoins avec une écoute bienveillante et sans jugement, dans le respect du secret professionnel. 
                <br> - L’identification des problématiques spécifiques qui influencent votre bien-être physique et mental. 
               <br> - L’établissement d’objectifs personnalisés et adaptés pour améliorer durablement votre santé et votre
                 qualité de vie. Mon approche vise à vous accompagner de manière humaine et professionnelle vers un 
                 équilibre global, alliant santé et sérénité.</p>
                 
              <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv");
        echo "\" class=\"  btn btn-primary mt-5 mb-3\">Réserver ma première consultation</a>
            </div>
          </div>
        </div>

        <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-6\">
          <div class=\"card text-center\">
            <div class=\"card-header fs-4 fw-bolder\">
              Consultations de suivi
            </div>

            <div class=\"card-body\">
              <h5 class=\"card-title fw-bolder my-1\">Tarif : 33 €</h5>
              <img src=\"img/consult2.jpg\" class=\"card-img-top mb-2 mt-1\" style=\"width: 12rem;\"alt=\"...\">
              <p class=\"card-text fw-bolder fw-bold fs-5 my-3\">Durée de la consultation : 40 minutes</p>
              <p class=\"card-text text lh-lg text-start fw-bolder\">Lors des consultations de suivi, j’accompagne mes patients dans la continuité et l’ajustement de leur démarche :
                <br> - Faire le point sur les avancées : évaluer l’atteinte des objectifs fixés et les résultats obtenus.
                <br> - Identifier les éventuelles difficultés rencontrées et proposer des solutions adaptées.
               <br> - Définir de nouveaux objectifs, si nécessaire, en fonction de l’évolution des besoins et des priorités.
                <br> - Fournir des outils pratiques (recettes, astuces, conseils) pour intégrer les changements dans le quotidien avec sérénité.
                Ces consultations permettent un accompagnement personnalisé et flexible, en tenant compte des besoins évolutifs de chacun, pour avancer pas à pas vers un bien-être optimal.</p>
            
              <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv");
        echo "\" class=\"btn btn-success mb-3\">Réserver une consultation de suivi</a>
            </div>
           
          </div>
        </div>
        </div>
     
    </div>
    <footer class=\"container-fluid d-flex justify-content-center mt-5 align-items-center\">
      <a class=\"a_footer\" href=\"https://www.facebook.com/\"><i class=\" mx-2 fa-2x fa-brands fa-facebook\"></i></a>
      <a class=\"a_footer\" href=\"https://www.linkedin.com/\"><i class=\"mx-2 fa-2x fa-brands fa-linkedin\"></i></a>
      <a class=\"a_footer\" href=\"https://www.instagram.com/\"><i class=\"mx-2 fa-2x fa-brands fa-instagram\"></i></a>
      </footer>
   
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
        return "main/consultTarifs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 121,  155 => 99,  111 => 58,  105 => 55,  99 => 52,  93 => 49,  82 => 41,  80 => 36,  52 => 8,  43 => 1,);
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
            
            <div class=\"banniere_header2\">
                
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
    <div class=\"section_mutuelle\">
      <h2 class=\"text-center fw-bold\">Les consultations diététiques sont-elles remboursées ?</h2>
      <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"d-flex flex-column col\">
             <p class=\"fw-bolder\">Toutes les consultations diététiques ne sont pas prises en charge par la sécurité sociale. <br> Mon rôle est de vous guider, pas à pas, vers une alimentation qui vous ressemble, et qui vous permet de vivre en harmonie avec vos besoins et vos envies.

              Toutefois, elles peuvent être remboursées par certaines mutuelles selon votre contrat, cela concerne les consultations en cabinet ainsi que les téléconsultations.</p> </div>
            <a href=\"#\"  class=\"btn btn-light col border border-1 m-1\" tabindex=\"-1\" role=\"button\" >rechercher votre mutuelle</a>
          </div>
        </div>

        <div class=\"section_2_consultations p-5\">
          <h2 class=\"text-center mb-4 fw-bolder\">Les consultations</h2>
    <div class=\"row mb-5 pb-2\">
      <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-6\">
          <div class=\"card text-center\">
            <div class=\"card-header fs-4 fw-bolder\">
              Première consultation
            </div>
            <div class=\"card-body\">
              <h5 class=\"card-title fw-bolder my-1\">Tarif : 45 €</h5>
              
              <img src=\"img/consult1.jpg\" class=\"card-img-top mb-2 mt-1\" style=\"width: 12rem;\"alt=\"...\">
              <p class=\"card-text fw-bold fs-5 my-3\">Durée de la consultation : 1 heure</p>
              <p class=\"card-text textplus lh-lg text-start fw-bolder\">Lors d'une première consultation, 
                je propose : <br> - Un bilan complet pour comprendre votre situation, vos habitudes et vos besoins avec une écoute bienveillante et sans jugement, dans le respect du secret professionnel. 
                <br> - L’identification des problématiques spécifiques qui influencent votre bien-être physique et mental. 
               <br> - L’établissement d’objectifs personnalisés et adaptés pour améliorer durablement votre santé et votre
                 qualité de vie. Mon approche vise à vous accompagner de manière humaine et professionnelle vers un 
                 équilibre global, alliant santé et sérénité.</p>
                 
              <a href=\"{{ path('rdv') }}\" class=\"  btn btn-primary mt-5 mb-3\">Réserver ma première consultation</a>
            </div>
          </div>
        </div>

        <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-6\">
          <div class=\"card text-center\">
            <div class=\"card-header fs-4 fw-bolder\">
              Consultations de suivi
            </div>

            <div class=\"card-body\">
              <h5 class=\"card-title fw-bolder my-1\">Tarif : 33 €</h5>
              <img src=\"img/consult2.jpg\" class=\"card-img-top mb-2 mt-1\" style=\"width: 12rem;\"alt=\"...\">
              <p class=\"card-text fw-bolder fw-bold fs-5 my-3\">Durée de la consultation : 40 minutes</p>
              <p class=\"card-text text lh-lg text-start fw-bolder\">Lors des consultations de suivi, j’accompagne mes patients dans la continuité et l’ajustement de leur démarche :
                <br> - Faire le point sur les avancées : évaluer l’atteinte des objectifs fixés et les résultats obtenus.
                <br> - Identifier les éventuelles difficultés rencontrées et proposer des solutions adaptées.
               <br> - Définir de nouveaux objectifs, si nécessaire, en fonction de l’évolution des besoins et des priorités.
                <br> - Fournir des outils pratiques (recettes, astuces, conseils) pour intégrer les changements dans le quotidien avec sérénité.
                Ces consultations permettent un accompagnement personnalisé et flexible, en tenant compte des besoins évolutifs de chacun, pour avancer pas à pas vers un bien-être optimal.</p>
            
              <a href=\"{{ path('rdv') }}\" class=\"btn btn-success mb-3\">Réserver une consultation de suivi</a>
            </div>
           
          </div>
        </div>
        </div>
     
    </div>
    <footer class=\"container-fluid d-flex justify-content-center mt-5 align-items-center\">
      <a class=\"a_footer\" href=\"https://www.facebook.com/\"><i class=\" mx-2 fa-2x fa-brands fa-facebook\"></i></a>
      <a class=\"a_footer\" href=\"https://www.linkedin.com/\"><i class=\"mx-2 fa-2x fa-brands fa-linkedin\"></i></a>
      <a class=\"a_footer\" href=\"https://www.instagram.com/\"><i class=\"mx-2 fa-2x fa-brands fa-instagram\"></i></a>
      </footer>
   
   <script src=\"main.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script>
      AOS.init();
    </script>
   </body>
</html>", "main/consultTarifs.html.twig", "C:\\Users\\CASH\\Desktop\\AFPA\\Symphony\\Blog musiqueV2\\templates\\main\\consultTarifs.html.twig");
    }
}
