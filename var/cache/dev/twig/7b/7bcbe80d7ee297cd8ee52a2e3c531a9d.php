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

/* inc/nav.html.twig */
class __TwigTemplate_05d24c198001634a9de2aa66ab23f062 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Musique</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
        </li>
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 14
                echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 15
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_list");
                echo "\">Dashboard</a>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 18
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                echo "\">Deconnexion</a>
        </li>
        ";
            }
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
            echo "\">Inscription</a>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
        </li>
        ";
        }
        // line 30
        echo "      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  95 => 27,  89 => 24,  85 => 22,  82 => 21,  76 => 18,  70 => 15,  67 => 14,  64 => 13,  62 => 12,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{path('home')}}\">Musique</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('home')}}\">Accueil</a>
        </li>
        {% if app.user %}
        {% if is_granted(\"ROLE_ADMIN\") %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path('admin_list')}}\">Dashboard</a>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path('logout')}}\">Deconnexion</a>
        </li>
        {% endif %}
        {% else %}

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path('user_registration')}}\">Inscription</a>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path('login')}}\">Connexion</a>
        </li>
        {% endif %}
      </ul>
    </div>
  </div>
</nav>", "inc/nav.html.twig", "C:\\Users\\CASH\\Desktop\\AFPA\\Symphony\\Blog musique\\templates\\inc\\nav.html.twig");
    }
}
