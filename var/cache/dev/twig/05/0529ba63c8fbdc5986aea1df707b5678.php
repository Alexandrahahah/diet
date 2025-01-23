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

/* inc/footer.html.twig */
class __TwigTemplate_c65263f6e0b5a8a1b7be8d37202ad7fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/footer.html.twig"));

        // line 1
        echo "<div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne\">
        Accordion Item #1
      </button>
    </h2>
    <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseTwo\" aria-expanded=\"false\" aria-controls=\"flush-collapseTwo\">
        Accordion Item #2
      </button>
    </h2>
    <div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">
        Accordion Item #3
      </button>
    </h2>
    <div id=\"flush-collapseThree\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne\">
        Accordion Item #1
      </button>
    </h2>
    <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseTwo\" aria-expanded=\"false\" aria-controls=\"flush-collapseTwo\">
        Accordion Item #2
      </button>
    </h2>
    <div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">
        Accordion Item #3
      </button>
    </h2>
    <div id=\"flush-collapseThree\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>", "inc/footer.html.twig", "C:\\Users\\CASH\\Desktop\\AFPA\\Symphony\\Blog musique\\templates\\inc\\footer.html.twig");
    }
}
