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

/* sae14/more.html.twig */
class __TwigTemplate_28f999453d2ed85e2bf0929b960f02ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sae14/more.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sae14/more.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sae14/more.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Plus";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Plus sur moi</h1>
<strong><u><h2>Mes passions :</h2></u></strong>
<div class=\"row\">
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"basketball.jpg\" alt=\"Basketball\">
        <p>
            Basketball
        </p>
    </div>
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"volley.jpg\" alt=\"Volleyball\">
        <p>
            Volleyball
        </p>
    </div>
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"musique.jpg\" alt=\"musique\">
        <p>
            Musique
        </p>
    </div>
</div>

<strong><u><h2>Mes intérêts :</h2></u></strong>
<div class=\"row\">
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"programmation.jpg\" alt=\"programmation\">
        <p>
            Programmation
        </p>
    </div>
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"dev_web.jpg\" alt=\"developpement web\">
        <p>
            Développement web
        </p>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sae14/more.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  87 => 3,  77 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Plus{%
endblock %} {% block body %}
<h1>Plus sur moi</h1>
<strong><u><h2>Mes passions :</h2></u></strong>
<div class=\"row\">
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"basketball.jpg\" alt=\"Basketball\">
        <p>
            Basketball
        </p>
    </div>
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"volley.jpg\" alt=\"Volleyball\">
        <p>
            Volleyball
        </p>
    </div>
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"musique.jpg\" alt=\"musique\">
        <p>
            Musique
        </p>
    </div>
</div>

<strong><u><h2>Mes intérêts :</h2></u></strong>
<div class=\"row\">
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"programmation.jpg\" alt=\"programmation\">
        <p>
            Programmation
        </p>
    </div>
    <div class=\"card more-card col-4\">
        <img class=\"card-img\" src=\"dev_web.jpg\" alt=\"developpement web\">
        <p>
            Développement web
        </p>
    </div>
</div>
{% endblock %}
", "sae14/more.html.twig", "C:\\Users\\amaxe\\Desktop\\github\\symfony\\templates\\sae14\\more.html.twig");
    }
}
