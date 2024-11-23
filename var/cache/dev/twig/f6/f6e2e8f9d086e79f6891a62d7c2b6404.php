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

/* sae14/CV.html.twig */
class __TwigTemplate_3f81c89acc46368b526da1650c2f4bc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sae14/CV.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sae14/CV.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sae14/CV.html.twig", 1);
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

        echo "CV";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Administrateur réseaux</h1>
<pre style=\"text-align: center\">Pour télécharger le PDF du CV, il faut remplir les informations dans le <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\">formulaire</a></pre>
<div class=\"row\">
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"competences.jpg\" alt=\"Compétences\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Compétences</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
          Maitrîse de moi-même
        </li>
        <li>
          Création de site web
        </li>
        <li>
          Apprentissage rapide
        </li>
        <li>
          Communication
        </li>
        <li>
          Programmation (C, python, html, css)
        </li>
      </p>
    </div>
  </div>
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"formation.jpg\" alt=\"Formations\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Formation</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
          B.U.T Réseaux et Télécommunications (2023-aujourd'hui)
        </li>
        <li>
          BAC général (2023)
        </li>
        <li>
          Formation première secours (2018)
        </li>
      </p>
    </div>
  </div>
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"exp_pro.jpg\" alt=\"Expériences professionelles\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Expériences professionelles</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
            Arbitre de basketball (2017-aujourd'hui)
        </li>
        <li>
          Caviste (été 2023)
        </li>
      </p>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"savoir_etre.jpg\" alt=\"Savoir être\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Savoir êtres</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
          Sérieux
        </li>
        <li>
          Adaptabilité
        </li>
        <li>
          Gestion du stress
        </li>
        <li>
          Autonomie
        </li>
      </p>
    </div>
  </div>
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"loisirs.jpg\" alt=\"Intérêts et loisirs\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Intérêts et loisirs</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
          Basket-ball
        </li>
        <li>
          Jeux vidéos
        </li>
        <li>
          Programmation
        </li>
        <li>
          Musique
        </li>
      </p>
    </div>
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
        return "sae14/CV.html.twig";
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
        return array (  89 => 4,  86 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}CV{% endblock %} {% block body
%}
<h1>Administrateur réseaux</h1>
<pre style=\"text-align: center\">Pour télécharger le PDF du CV, il faut remplir les informations dans le <a href=\"{{ path('formulaire') }}\">formulaire</a></pre>
<div class=\"row\">
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"competences.jpg\" alt=\"Compétences\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Compétences</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
          Maitrîse de moi-même
        </li>
        <li>
          Création de site web
        </li>
        <li>
          Apprentissage rapide
        </li>
        <li>
          Communication
        </li>
        <li>
          Programmation (C, python, html, css)
        </li>
      </p>
    </div>
  </div>
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"formation.jpg\" alt=\"Formations\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Formation</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
          B.U.T Réseaux et Télécommunications (2023-aujourd'hui)
        </li>
        <li>
          BAC général (2023)
        </li>
        <li>
          Formation première secours (2018)
        </li>
      </p>
    </div>
  </div>
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"exp_pro.jpg\" alt=\"Expériences professionelles\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Expériences professionelles</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
            Arbitre de basketball (2017-aujourd'hui)
        </li>
        <li>
          Caviste (été 2023)
        </li>
      </p>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"savoir_etre.jpg\" alt=\"Savoir être\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Savoir êtres</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
          Sérieux
        </li>
        <li>
          Adaptabilité
        </li>
        <li>
          Gestion du stress
        </li>
        <li>
          Autonomie
        </li>
      </p>
    </div>
  </div>
  <div class=\"card\" style=\"width: 18rem\">
    <img class=\"card-img-top\" src=\"loisirs.jpg\" alt=\"Intérêts et loisirs\" />
    <div class=\"card-body\">
      <p class=\"card-title\">
        <strong><u>Intérêts et loisirs</u></strong>
      </p>
      <p class=\"card-text\">
        <li>
          Basket-ball
        </li>
        <li>
          Jeux vidéos
        </li>
        <li>
          Programmation
        </li>
        <li>
          Musique
        </li>
      </p>
    </div>
  </div>
</div>
{% endblock %}
", "sae14/CV.html.twig", "/Users/maxenceandre/Desktop/maxence_andre/templates/sae14/CV.html.twig");
    }
}
