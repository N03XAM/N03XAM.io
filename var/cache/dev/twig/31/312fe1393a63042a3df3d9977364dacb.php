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

/* sae14/formulaire.html.twig */
class __TwigTemplate_4f5b7b8e0763611ef77d8b363de19994 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sae14/formulaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sae14/formulaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sae14/formulaire.html.twig", 1);
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

        echo "Formulaire";
        
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
        echo "<h1>Formulaire</h1>
<pre>Pour rester au courant, remplissez ce formulaire</pre>
<form id=\"monFormulaire\">
  <section class=\"form\">
    <div class=\"input-group\">
      <input class=\"input\" required type=\"text\" id=\"NOM\" />
      <label class=\"label\" for=\"NOM\">NOM</label>
    </div>
    <div class=\"input-group\">
      <input class=\"input\" required type=\"text\" id=\"Prénom\" />
      <label class=\"label\" for=\"Prénom\">PRENOM</label>
    </div>
    <div class=\"input-group\">
      <input class=\"input\" required type=\"email\" id=\"Adresse_mail\" />
      <label class=\"label\" for=\"Adresse_mail\">Adresse mail</label>
    </div>
    <div class=\"envoyer\">
      <button class=\"btn btn-primary\" type=\"submit\" id=\"monBouton\">Envoyer et Télécharger</button>
    </div>
  </section>
</form>

<script>
  document.querySelectorAll(\".input\").forEach((input) => {
    input.addEventListener(\"blur\", function () {
      if (this.value) {
        this.classList.add(\"has-content\");
      } else {
        this.classList.remove(\"has-content\");
      }
    });
  });
  document
    .getElementById(\"monFormulaire\")
    .addEventListener(\"submit\", function (e) {
      e.preventDefault(); // Empêche l'envoi normal du formulaire

      // Votre code pour traiter les données du formulaire ici

      var lien = document.createElement(\"a\");
      lien.href = \"/CV.pdf\";
      lien.download = \"CV.pdf\";
      lien.style.display = \"none\";
      document.body.appendChild(lien);
      lien.click();
      document.body.removeChild(lien);
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sae14/formulaire.html.twig";
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
        return new Source("{% extends 'base.html.twig' %} {% block title %}Formulaire{%
endblock %} {% block body %}
<h1>Formulaire</h1>
<pre>Pour rester au courant, remplissez ce formulaire</pre>
<form id=\"monFormulaire\">
  <section class=\"form\">
    <div class=\"input-group\">
      <input class=\"input\" required type=\"text\" id=\"NOM\" />
      <label class=\"label\" for=\"NOM\">NOM</label>
    </div>
    <div class=\"input-group\">
      <input class=\"input\" required type=\"text\" id=\"Prénom\" />
      <label class=\"label\" for=\"Prénom\">PRENOM</label>
    </div>
    <div class=\"input-group\">
      <input class=\"input\" required type=\"email\" id=\"Adresse_mail\" />
      <label class=\"label\" for=\"Adresse_mail\">Adresse mail</label>
    </div>
    <div class=\"envoyer\">
      <button class=\"btn btn-primary\" type=\"submit\" id=\"monBouton\">Envoyer et Télécharger</button>
    </div>
  </section>
</form>

<script>
  document.querySelectorAll(\".input\").forEach((input) => {
    input.addEventListener(\"blur\", function () {
      if (this.value) {
        this.classList.add(\"has-content\");
      } else {
        this.classList.remove(\"has-content\");
      }
    });
  });
  document
    .getElementById(\"monFormulaire\")
    .addEventListener(\"submit\", function (e) {
      e.preventDefault(); // Empêche l'envoi normal du formulaire

      // Votre code pour traiter les données du formulaire ici

      var lien = document.createElement(\"a\");
      lien.href = \"/CV.pdf\";
      lien.download = \"CV.pdf\";
      lien.style.display = \"none\";
      document.body.appendChild(lien);
      lien.click();
      document.body.removeChild(lien);
    });
</script>
{% endblock %}
", "sae14/formulaire.html.twig", "C:\\Users\\amaxe\\Desktop\\github\\symfony\\templates\\sae14\\formulaire.html.twig");
    }
}
