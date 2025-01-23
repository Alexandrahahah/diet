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

/* admin/dashboard.html.twig */
class __TwigTemplate_45adda2037f8928be510ba5b117105b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
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

        echo "Hello AdminController!";
        
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
        echo "
 <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new");
        echo "\" class=\"btn btn-primary\">Ajouter une musique</a>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Style</th>
            <th scope=\"col\">Poster</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Action</th>
        </tr>
        </thead>
        <tbody>

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["musiques"]) || array_key_exists("musiques", $context) ? $context["musiques"] : (function () { throw new RuntimeError('Variable "musiques" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["musique"]) {
            // line 23
            echo "
    <tr>
        <th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musique"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musique"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["musique"], "style", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
        <td><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["musique"], "poster", [], "any", false, false, false, 28))), "html", null, true);
            echo "\" class=\"w-25\" alt=\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musique"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo " \"></td>

         <td><audio controls src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["musique"], "Titre", [], "any", false, false, false, 30))), "html", null, true);
            echo "\"  style=\"figure\";figure=mt-3 alt=\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musique"], "Titre", [], "any", false, false, false, 30), "html", null, true);
            echo " \"></audio></td>

         <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_update", ["id" => twig_get_attribute($this->env, $this->source, $context["musique"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Modifier</a>  | <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["musique"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Supprimer</a></td>
       
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 32,  136 => 30,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  113 => 23,  109 => 22,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}

 <a href=\"{{ path('admin_new') }}\" class=\"btn btn-primary\">Ajouter une musique</a>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Style</th>
            <th scope=\"col\">Poster</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Action</th>
        </tr>
        </thead>
        <tbody>

{%for musique in musiques %}

    <tr>
        <th scope=\"row\">{{ musique.id }}</th>
        <td>{{ musique.name }}</td>
        <td>{{ musique.style.name }}</td>
        <td><img src=\"{{ asset('img/' ~musique.poster) }}\" class=\"w-25\" alt=\" {{ musique.name }} \"></td>

         <td><audio controls src=\"{{ asset('img/' ~musique.Titre) }}\"  style=\"figure\";figure=mt-3 alt=\" {{ musique.Titre }} \"></audio></td>

         <td><a href=\"{{ path(\"admin_update\", {\"id\" : musique.id}) }}\">Modifier</a>  | <a href=\"{{ path(\"admin_delete\", {\"id\" : musique.id}) }}\">Supprimer</a></td>
       
    </tr>
{%endfor%}
{% endblock %}", "admin/dashboard.html.twig", "C:\\Users\\CASH\\Desktop\\AFPA\\Symphony\\Blog musiqueV2\\templates\\admin\\dashboard.html.twig");
    }
}
