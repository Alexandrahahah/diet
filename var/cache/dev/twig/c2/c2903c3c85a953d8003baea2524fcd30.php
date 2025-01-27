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

/* main/home.html.twig */
class __TwigTemplate_b38eb2039f51c25a3ba11bc1fd8d01e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
   
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap\" rel=\"stylesheet\">
<script src=\"https://kit.fontawesome.com/834d8c0b76.js\" crossorigin=\"anonymous\"></script>
 <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>

<script src=\"https://kit.fontawesome.com/834d8c0b76.js\" crossorigin=\"anonymous\"></script>

<link
rel=\"stylesheet\"
href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"
/>
    
  
    <title>Alexandra Jacob diététicienne</title>
</head>

  <body>

    ";
        // line 30
        $this->loadTemplate("base.html.twig", "main/home.html.twig", 30)->display($context);
        // line 31
        echo "   
    <main>
        <div class=\"mx-5 mt-3 animate__animated animate__pulse pulse row mb-5 pb-5\">
           <div class=\"col-6\">
            <h2 class=\"text-center\" >La diététique</h2>
            <p class=\"text-center text-black fw-semibold\">
               Prendre soin de son alimentation, c’est investir dans sa santé : mieux prévenir les maladies, améliorer son énergie au quotidien, et retrouver un rapport apaisé avec la nourriture.
                <br> <br> En tant que diététicienne, mon rôle est de vous accompagner dans votre parcours alimentaire avec une approche bienveillante et sans jugement. Je suis convaincue que l’alimentation ne doit jamais être une source de culpabilité, mais un pilier de votre bien-être et de votre épanouissement personnel.
                <br> <br>Chaque personne est unique, et chaque accompagnement l’est aussi.
                N’attendez plus pour prendre soin de vous et de votre alimentation ! Ensemble, construisons une relation positive et durable avec la nourriture.    </p>      
            </div>
        
            <div class=\"col-6 mt-4\">
              <img src=\"img/filleMange.jpg\" class=\"card-img-top\" style=\"width: 80%;\"alt=\"...\">
            </div>
          </div>  ";
        // line 47
        echo "        

          </div>  <!--END class section_5-->
        <div class=\"section_2_cabinets p-5 my-4\">
          <h2 class=\"text-center mb-4 fw-bolder\">Lieux de consultation</h2>
         <div class=\"row mb-5 pb-2\">
           <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-6\">
            <div class=\"card text-center\">
            <div class=\"card-header\">
              Loudun
            </div>
            <div class=\"card-body\">
              <h5 class=\"card-title\">Maison médicale de Loudun</h5>
              
              <img src=\"img/loudun cabinet.png\" class=\"card-img-top mb-2 mt-1\" style=\"width: 12rem;\"alt=\"...\">
              <p class=\"card-text\">Consultations tous les mercredis de 10h à 19h</p>
              <a href=\"https://alexandra-jacob-dieteticienne-nutritionniste.reservio.com\" class=\"btn btn-success mt-4 mb-2\">Réserver une consultation</a>
            </div>
          </div>
        </div>

        <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-6\">
          <div class=\"card text-center\">
            <div class=\"card-header\">
              Mont-Sur-Guesnes
            </div>

            <div class=\"card-body\">
              <h5 class=\"card-title\">Maison médicale de Mont-Sur-Guesnes</h5>
              <img src=\"img/mont cabient.png\" class=\"card-img-top mb-2 mt-1\" style=\"width: 12rem;\"alt=\"...\">
              <p class=\"card-text\">Consultations tous les mardis de 10h à 19h<br> 1 jeudi sur deux de 10h à 19h <br> 1 samedi sur deux de 10h à 13h
              </p>
              <a href=\"https://alexandra-dieteticienne.reservio.com\" class=\"btn btn-success\">Réserver une consultation</a>
            </div>
           
          </div>
        </div>
        </div>
     
      <div class=\"card text-center\">
       ";
        // line 97
        echo "      </div>
    </div>
             
            
            

            
        ";
        // line 117
        echo "          
      ";
        // line 119
        echo "

         ";
        // line 134
        echo "

   

</div> <!--END class=\"banniere_header\"-->





    
    <section class=\"section_1_discorver\">
      <div class=\"background_image_1\">
        <div class=\"background_image_2\">
          <h2 class=\"text-center mt-5 mb-1 fw-bolder\">La diététique pour...</h2>
        <div class=\"card mb-5 mx-auto border-0\" style=\"max-width: 600px;\">
            <div class=\"row g-0 d-flex justify-content-center align-items-center\">
              <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-md-5\">
                <div class=\"gold_border1\"></div>
                <img src=\"img/discover2.jpg\" class=\"img-fluid rounded-0\" alt=\"plat\">
              </div>
              

              <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-md-6 offset-1\">
                
                <div class=\"card-body\">
                  <hr>
                  <h2>Prendre soin de soin</h2>
                  <h3> --- </h3>
                  <p> - Etre serein face à son poids <br>
                     - Devenir végétarien / végétalien <br>
                     - Apprendre à cuisiner <br>
                     - Optimiser mes performances en tant que sportif <br>
                     - Equilibrer son alimentation <br>
                     - Bien manger pensant la grossesse <br>
                     - Faire un point sur l'alimentation de son enfant <br>
                  
                  </p>
                  <a href=\"#\">Voir plus</a>
                </div>
              </div>
            </div>
          </div>


          <div class=\"card mb-3 mx-auto border-0\" style=\"max-width: 600px;\">
            <div class=\"row flex-row-reverse g-0 d-flex justify-content-center align-items-center\">
              <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-md-5 offset-1\">
                <div class=\"gold_border2\"></div>
                <img src=\"img/discover3.jpg\" class=\"img-fluid rounded-0\" alt=\"plat\">
              
              </div>
              <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-md-6\">
                <div class=\"card-body\">
                  <hr>
                  <h2>Mieux vivre avec sa pathologie</h2>
                  <h3> --- </h3>
                  <p> - Diabète <br>
                    - Diabète gestationnel <br>
                    - Cholestérol <br>
                    - Allergies <br>
                    - Maladies digéstives <br>
                    - Maladie cardiaque <br>
                 </p>
                 <a href=\"#\">Voir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div> <!--END de la DIV background_image_1-->
      </div> <!--END de la DIV background_image_2-->
    </section> <!--class=\"section_1_discorver\"-->

    ";
        // line 303
        echo "
    <section class=\"section_4_chief\">
      <div class=\"card mb-2 mt-4 mx-auto border-0\" style=\"max-width: 900px;\">
        <div class=\"row flex-row-reverse g-0 d-flex justify-content-end align-items-center\">
          <div class=\"col-md-4 mt-5\">
            <img src=\"img/moi2.jpg\" class=\"img-fluid rounded-0 mt-5\" style=\"max-width: 160px;\" alt=\"chef\">
          </div>
          <div class=\"col-md-8 pt-4\">
            <div class=\"card-body\">
              <hr>
              <h2>A propos</h2>
              
              <p class=\"text-start pt-3\"> Après des études en neuropsychologie, 
                je me plonge dans la diététique car j'aime aider les autres et les accompagner dans un meilleur état de bien-être. <br> <br>J'obtiens 
                mon diplôme en 2016 et pendant 6 ans je travaille dans les hôpitaux de Tours et de Chinon. 
             <br><br> Je débute mon aventure dans le libéral en 2021 et je fais une pause dans la diététique où j'apprends le développement web de 2022 à 2024. <br> <br>
            Je reviens sur ce passionnant métier qui me manquait tant qu'est la diététique sur Loudun et Mont-Sur-Guesnes pour mon plus grand plaisir. </p>
             
            </div> <!--END class card body-->
          </div><!--End class col-md-8 pt-4-->
        </div> <!--END class row flex row reverse g-0 d-flex...-->
      </div> <!--END class card mb-3 mx-auto border-0...-->
    </section> <!--END class=\"section_4_chief\"-->

</div> <!--END de la DIV background_image_2-->

</main>
<div class=\"section_contact_home\">
  <h2 class=\"text-center\">Me contacter</h2>
    <div class=\"row\">
      <div class=\"col-6\">
        <img src=\"img/phone.jpg\" class=\"img-fluid rounded-0 mx-5\" style=\"max-width: 200px;\" alt=\"plat\">
                 
      </div>
        <div class=\"d-flex flex-column col-6\">
          <a class=\"text-center a_footer fw-bold text-black\" href=\"tel:+33602694044\"> 06 02 69 40 44</a>
       
        <a class=\"text-center a_footer fw-bold text-black mt-2\" href=\"mailto:alex.jacob@exemple.com?subject=HTMLlink\">alexandra.jacob.diet@gmail.com</a> </div>
    </div>
  </div>
</div>  <!--END class section_5-->
<a href=\"#top\" id=\"back-to-top\"><i class=\"fa-solid fa-arrow-up\"></i></a>

</div>
</div>
</main>

<footer class=\"container-fluid d-flex justify-content-center align-items-center\">
<p class=\"text-center text-black mt-2\" >Site crée par moi-même. 
  ";
        // line 353
        echo "  </p> </div> 
  
</footer>

 <script src=\"main.js\"></script>
 <script>AOS.init();</script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 353,  229 => 303,  154 => 134,  150 => 119,  147 => 117,  138 => 97,  96 => 47,  79 => 31,  77 => 30,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
   
<link href=\"{{ asset('css/base.css') }}\" rel=\"stylesheet\" />
<link href=\"https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap\" rel=\"stylesheet\">
<script src=\"https://kit.fontawesome.com/834d8c0b76.js\" crossorigin=\"anonymous\"></script>
 <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>

<script src=\"https://kit.fontawesome.com/834d8c0b76.js\" crossorigin=\"anonymous\"></script>

<link
rel=\"stylesheet\"
href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"
/>
    
  
    <title>Alexandra Jacob diététicienne</title>
</head>

  <body>

    {% include 'base.html.twig' %}
   
    <main>
        <div class=\"mx-5 mt-3 animate__animated animate__pulse pulse row mb-5 pb-5\">
           <div class=\"col-6\">
            <h2 class=\"text-center\" >La diététique</h2>
            <p class=\"text-center text-black fw-semibold\">
               Prendre soin de son alimentation, c’est investir dans sa santé : mieux prévenir les maladies, améliorer son énergie au quotidien, et retrouver un rapport apaisé avec la nourriture.
                <br> <br> En tant que diététicienne, mon rôle est de vous accompagner dans votre parcours alimentaire avec une approche bienveillante et sans jugement. Je suis convaincue que l’alimentation ne doit jamais être une source de culpabilité, mais un pilier de votre bien-être et de votre épanouissement personnel.
                <br> <br>Chaque personne est unique, et chaque accompagnement l’est aussi.
                N’attendez plus pour prendre soin de vous et de votre alimentation ! Ensemble, construisons une relation positive et durable avec la nourriture.    </p>      
            </div>
        
            <div class=\"col-6 mt-4\">
              <img src=\"img/filleMange.jpg\" class=\"card-img-top\" style=\"width: 80%;\"alt=\"...\">
            </div>
          </div>  {# fin section \"la diététique\" #}
        

          </div>  <!--END class section_5-->
        <div class=\"section_2_cabinets p-5 my-4\">
          <h2 class=\"text-center mb-4 fw-bolder\">Lieux de consultation</h2>
         <div class=\"row mb-5 pb-2\">
           <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-6\">
            <div class=\"card text-center\">
            <div class=\"card-header\">
              Loudun
            </div>
            <div class=\"card-body\">
              <h5 class=\"card-title\">Maison médicale de Loudun</h5>
              
              <img src=\"img/loudun cabinet.png\" class=\"card-img-top mb-2 mt-1\" style=\"width: 12rem;\"alt=\"...\">
              <p class=\"card-text\">Consultations tous les mercredis de 10h à 19h</p>
              <a href=\"https://alexandra-jacob-dieteticienne-nutritionniste.reservio.com\" class=\"btn btn-success mt-4 mb-2\">Réserver une consultation</a>
            </div>
          </div>
        </div>

        <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-6\">
          <div class=\"card text-center\">
            <div class=\"card-header\">
              Mont-Sur-Guesnes
            </div>

            <div class=\"card-body\">
              <h5 class=\"card-title\">Maison médicale de Mont-Sur-Guesnes</h5>
              <img src=\"img/mont cabient.png\" class=\"card-img-top mb-2 mt-1\" style=\"width: 12rem;\"alt=\"...\">
              <p class=\"card-text\">Consultations tous les mardis de 10h à 19h<br> 1 jeudi sur deux de 10h à 19h <br> 1 samedi sur deux de 10h à 13h
              </p>
              <a href=\"https://alexandra-dieteticienne.reservio.com\" class=\"btn btn-success\">Réserver une consultation</a>
            </div>
           
          </div>
        </div>
        </div>
     
      <div class=\"card text-center\">
       {# <div class=\"card-header\">
          Consultation à distance
        </div>
         <div class=\"card-body\">
          <h5 class=\"card-title\">Visio consultation</h5>
            
              <img src=\"img/visio.jpg\" class=\"card-img-top\" style=\"width: 12rem;\"alt=\"...\">
              <p class=\"card-text\">Selon disponibilités</p>
              <a href=\"#\" class=\"btn btn-success\">Réserver une consultation</a>
        </div> #}
      </div>
    </div>
             
            
            

            
        {# </div>
          <div class=\"banniere d-flex\" id=\"appear\">
            <div class=\"container d-flex text-center align-items-center justify-content-center\"> 
              <div class=\"row border-start border-bottom border-primary border-1\">
                <h5 class=\"h5_section_2 col-12\">GIT</h5>
                <h5 class=\"h5_section_2 col-12\">SASS</h5>
                <h5 class=\"h5_section_2 col-12\">Symphony</h5>
                <h5 class=\"h5_section_2 col-12\">Bootstrap</h5>
                <h5 class=\"h5_section_2 col-12\">Wordpress</h5>
                <h5 class=\"h5_section_2 col-12\">SQL</h5>
              </div>
            </div>
          </div> #}
          
      {# </div> <!--END class section_2 Compétences--> #}


         {# <div class=\"section_3_Formations animate__animated animate__pulse pulse\">
                <h2 class=\"text-center\" >Formations</h2>
                <p class=\"text-center text-black fw-semibold\">- 2023 -<br>Formation AFPA développeur Web et Web mobile <br>Distanciel</p>
                <div class=\"container d-flex\">
                   <span class=\"vertical-line \"></span> 
               </div>
                <p class=\"text-center text-dark-emphasis\">- 2016 -<br>DUT Génie Biologique option Diététique<br>Tours</p>
                <div class=\"container d-flex\">
                  <span class=\"vertical-line \"></span> 
               </div>
               <p class=\"text-center text-body-tertiary\">- 2011 -<br>Master 1 neuropsychologie <br>Grenoble</p>

          </div> <!--END class section 3 Formations--> #}


   

</div> <!--END class=\"banniere_header\"-->





    
    <section class=\"section_1_discorver\">
      <div class=\"background_image_1\">
        <div class=\"background_image_2\">
          <h2 class=\"text-center mt-5 mb-1 fw-bolder\">La diététique pour...</h2>
        <div class=\"card mb-5 mx-auto border-0\" style=\"max-width: 600px;\">
            <div class=\"row g-0 d-flex justify-content-center align-items-center\">
              <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-md-5\">
                <div class=\"gold_border1\"></div>
                <img src=\"img/discover2.jpg\" class=\"img-fluid rounded-0\" alt=\"plat\">
              </div>
              

              <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-md-6 offset-1\">
                
                <div class=\"card-body\">
                  <hr>
                  <h2>Prendre soin de soin</h2>
                  <h3> --- </h3>
                  <p> - Etre serein face à son poids <br>
                     - Devenir végétarien / végétalien <br>
                     - Apprendre à cuisiner <br>
                     - Optimiser mes performances en tant que sportif <br>
                     - Equilibrer son alimentation <br>
                     - Bien manger pensant la grossesse <br>
                     - Faire un point sur l'alimentation de son enfant <br>
                  
                  </p>
                  <a href=\"#\">Voir plus</a>
                </div>
              </div>
            </div>
          </div>


          <div class=\"card mb-3 mx-auto border-0\" style=\"max-width: 600px;\">
            <div class=\"row flex-row-reverse g-0 d-flex justify-content-center align-items-center\">
              <div data-aos=\"fade-up-left\" data-aos-duration=\"1000\" class=\"col-md-5 offset-1\">
                <div class=\"gold_border2\"></div>
                <img src=\"img/discover3.jpg\" class=\"img-fluid rounded-0\" alt=\"plat\">
              
              </div>
              <div data-aos=\"fade-up-right\" data-aos-duration=\"1000\" class=\"col-md-6\">
                <div class=\"card-body\">
                  <hr>
                  <h2>Mieux vivre avec sa pathologie</h2>
                  <h3> --- </h3>
                  <p> - Diabète <br>
                    - Diabète gestationnel <br>
                    - Cholestérol <br>
                    - Allergies <br>
                    - Maladies digéstives <br>
                    - Maladie cardiaque <br>
                 </p>
                 <a href=\"#\">Voir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div> <!--END de la DIV background_image_1-->
      </div> <!--END de la DIV background_image_2-->
    </section> <!--class=\"section_1_discorver\"-->

    {# <section class=\"section_2_menu d-flex flex-column justify-content-center align-items-center mt-5\">
        <hr>
        <h2>Menu</h2>
        <h3>certified bio</h3>
        <div class=\"container menu\">
        <p class=\"text-center\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, soluta iste accusamus excepturi fugiat delectus aspernatur vero alias dolore possimus debitis quisquam? Odio adipisci libero numquam eligendi illum voluptatem perferendis?</p>
      </div>
        <nav class=\"container\">
          <div class=\"row d-flex justify-content-center mt-4\">
            <a class=\"col-md-1 text-black \" href=\"#\">EGGS</a>
            <a class=\"col-md-1 text-black \" href=\"#\">PORC</a>
            <a class=\"col-md-1 text-black \" href=\"#\">CHICKEN</a>
            <a class=\"col-md-1 text-black \" href=\"#\">FISH</a>
            <a class=\"col-md-1 text-black \" href=\"#\">VEGAN</a>
          </div>
        </nav>
    </section> <!--class=\"section_2_menu\"-->

    <section class=\"section_3_carre\">
        
      <div class=\"container d-flex flex-row\">
        <div class=\"card mb-5 mx-auto border-0\" style=\"max-width: 500px;\">
          <div class=\"row g-0 d-flex justify-content-start align-items-center\">
            <div class=\"col-md-3\">
            
              <img src=\"img/crusted-chicken-square.jpg\" class=\"img-fluid rounded-0\" alt=\"plat\">
            </div>
            
            <div class=\"col-md-9 pt-4\">
              <div class=\"card-body\">
                <h4>Amazing Crusted Chicken</h4>
            
                <p>Beryl Cook is one of Britain's most talented and amusing artists. Beryl's pictures feature women of all shapes and sizes enjoyinf themselves.</p>
                <h5>£20</h5>
              </div>
            </div>
          </div>
        </div>


        <div class=\"card mb-3 mx-auto border-0\" style=\"max-width: 500px;\">
          <div class=\"row flex-row-reverse g-0 d-flex justify-content-end align-items-center\">
            <div class=\"col-md-3\">
            
              <img src=\"img/bobun-light-square.jpg\" class=\"img-fluid rounded-0\" alt=\"plat\">
            
            </div>
            <div class=\"col-md-9 pt-4\">
              <div class=\"card-body\">
                <h4 class=\"text-end\">Discover</h4>
                <p class=\"text-end\">Beryl Cook is one of Britain's most talented and amusing artists. Beryl's pictures feature women of all shapes and sizes enjoyinf themselves.</p>
                <h5 class=\"text-end\">£20</h5>
              </div>
            </div>
          </div>
        </div>
      </div>  

         
         <div class=\"container container_2 d-flex flex-row\">
          <div class=\"card mb-5 mx-auto border-0\" style=\"max-width: 500px;\">
            <div class=\"row g-0 d-flex justify-content-start align-items-center\">
              <div class=\"col-md-3\">
              
                <img src=\"img/poisson-square.jpg\" class=\"img-fluid rounded-0\" alt=\"plat\">
              </div>
              
              <div class=\"col-md-9 pt-4\">
                <div class=\"card-body\">
                  <h4>Amazing Crusted Chicken</h4>
              
                  <p>Beryl Cook is one of Britain's most talented and amusing artists. Beryl's pictures feature women of all shapes and sizes enjoyinf themselves.</p>
                  <h5>£20</h5>
                </div>
              </div>
            </div>
          </div>

          <div class=\"card mb-3 mx-auto border-0\" style=\"max-width: 500px;\">
            <div class=\"row flex-row-reverse g-0 d-flex justify-content-end align-items-center\">
              <div class=\"col-md-3\">
              
                <img src=\"img/paella-square.jpg\" class=\"img-fluid rounded-0\" alt=\"plat\">
              
              </div>
              <div class=\"col-md-9 pt-4\">
                <div class=\"card-body\">
                  <h4 class=\"text-end\">Discover</h4>
                  <p class=\"text-end\">Beryl Cook is one of Britain's most talented and amusing artists. Beryl's pictures feature women of all shapes and sizes enjoyinf themselves.</p>
                  <h5 class=\"text-end\">£20</h5>
                </div>
              </div>
            </div>
          </div>
        </div>  
    </section> #}

    <section class=\"section_4_chief\">
      <div class=\"card mb-2 mt-4 mx-auto border-0\" style=\"max-width: 900px;\">
        <div class=\"row flex-row-reverse g-0 d-flex justify-content-end align-items-center\">
          <div class=\"col-md-4 mt-5\">
            <img src=\"img/moi2.jpg\" class=\"img-fluid rounded-0 mt-5\" style=\"max-width: 160px;\" alt=\"chef\">
          </div>
          <div class=\"col-md-8 pt-4\">
            <div class=\"card-body\">
              <hr>
              <h2>A propos</h2>
              
              <p class=\"text-start pt-3\"> Après des études en neuropsychologie, 
                je me plonge dans la diététique car j'aime aider les autres et les accompagner dans un meilleur état de bien-être. <br> <br>J'obtiens 
                mon diplôme en 2016 et pendant 6 ans je travaille dans les hôpitaux de Tours et de Chinon. 
             <br><br> Je débute mon aventure dans le libéral en 2021 et je fais une pause dans la diététique où j'apprends le développement web de 2022 à 2024. <br> <br>
            Je reviens sur ce passionnant métier qui me manquait tant qu'est la diététique sur Loudun et Mont-Sur-Guesnes pour mon plus grand plaisir. </p>
             
            </div> <!--END class card body-->
          </div><!--End class col-md-8 pt-4-->
        </div> <!--END class row flex row reverse g-0 d-flex...-->
      </div> <!--END class card mb-3 mx-auto border-0...-->
    </section> <!--END class=\"section_4_chief\"-->

</div> <!--END de la DIV background_image_2-->

</main>
<div class=\"section_contact_home\">
  <h2 class=\"text-center\">Me contacter</h2>
    <div class=\"row\">
      <div class=\"col-6\">
        <img src=\"img/phone.jpg\" class=\"img-fluid rounded-0 mx-5\" style=\"max-width: 200px;\" alt=\"plat\">
                 
      </div>
        <div class=\"d-flex flex-column col-6\">
          <a class=\"text-center a_footer fw-bold text-black\" href=\"tel:+33602694044\"> 06 02 69 40 44</a>
       
        <a class=\"text-center a_footer fw-bold text-black mt-2\" href=\"mailto:alex.jacob@exemple.com?subject=HTMLlink\">alexandra.jacob.diet@gmail.com</a> </div>
    </div>
  </div>
</div>  <!--END class section_5-->
<a href=\"#top\" id=\"back-to-top\"><i class=\"fa-solid fa-arrow-up\"></i></a>

</div>
</div>
</main>

<footer class=\"container-fluid d-flex justify-content-center align-items-center\">
<p class=\"text-center text-black mt-2\" >Site crée par moi-même. 
  {# Vous êtes diet et vous souhaitez un site de ce type? En savoir plus... #}
  </p> </div> 
  
</footer>

 <script src=\"main.js\"></script>
 <script>AOS.init();</script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    </body>
</html>", "main/home.html.twig", "C:\\Users\\CASH\\Desktop\\AFPA\\Symphony\\Blog musiqueV2\\templates\\main\\home.html.twig");
    }
}
