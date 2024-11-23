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
class __TwigTemplate_01eb40a8dcb49e3e040fea28489d1c02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
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
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link
      rel=\"icon\"
      href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>E</text></svg>\"
    />
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "  </head>
  <body>
    <nav
      class=\"navbar navbar-expand-lg navbar-dark bg-dark\"
    >
      <a class=\"navbar-brand accueil\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
      <button
        class=\"navbar-toggler\"
        type=\"button\"
        data-bs-toggle=\"collapse\"
        data-bs-target=\"#navbarSupportedContent\"
        aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\"
        aria-label=\"Toggle navigation\"
      >
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ms-auto\">
          <!-- Utilisation de ms-auto pour aligner à droite -->
          <li class=\"nav-item\">
            <a class=\"nav-link accueil1\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portfolio");
        echo "\">Portfolio</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link accueil1\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CV");
        echo "\">CV</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link accueil1\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\">Formulaire</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class=\"p-4 p-md-5 mb-4 rounded text-body-emphasis\" id=\"titre\">
      <div class=\"col-lg-6 px-0\">
        <h1 class=\"display-4 fst-italic text-center\">Maxence André</h1>
        <p class=\"lead my-3\">Bonjour et bienvenue sur mon e-portfolio</p>
      </div>
    </div>

    <div class=\"container\">";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    <container class=\"more\">
      <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("more");
        echo "\"
        ><button class=\"btn btn-primary\">Qui suis-je ?</button></a
      >
      <!-- Utilisation de la classe btn btn-primary pour un style de bouton Bootstrap -->
    </container>
    <footer>
      <p xmlns:cc=\"http://creativecommons.org/ns#\" >Licence : <a href=\"http://creativecommons.org/licenses/by-nc/4.0/?ref=chooser-v1\" target=\"_blank\" rel=\"license noopener noreferrer\" style=\"display:inline-block;\">CC BY-NC 4.0<img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1\"></a></p>
    </footer>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"../public/style/style.css\" />
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\"
    />

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    <script src=\"../assets/app.js\"></script>
    <script src=\"\"></script>
    ";
        // line 21
        $this->displayBlock('importmap', $context, $blocks);
        // line 23
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  238 => 64,  219 => 21,  209 => 23,  207 => 21,  203 => 19,  193 => 18,  177 => 12,  167 => 11,  148 => 5,  127 => 66,  122 => 64,  107 => 52,  101 => 49,  95 => 46,  75 => 29,  68 => 24,  65 => 18,  63 => 11,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>

    <link
      rel=\"icon\"
      href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>E</text></svg>\"
    />
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"../public/style/style.css\" />
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\"
    />

    {% endblock %} {% block javascripts %}
    <script src=\"../assets/app.js\"></script>
    <script src=\"\"></script>
    {% block importmap %}{{
      importmap(\"app\")
    }}{% endblock %} {% endblock %}
  </head>
  <body>
    <nav
      class=\"navbar navbar-expand-lg navbar-dark bg-dark\"
    >
      <a class=\"navbar-brand accueil\" href=\"{{ path('accueil') }}\">Accueil</a>
      <button
        class=\"navbar-toggler\"
        type=\"button\"
        data-bs-toggle=\"collapse\"
        data-bs-target=\"#navbarSupportedContent\"
        aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\"
        aria-label=\"Toggle navigation\"
      >
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ms-auto\">
          <!-- Utilisation de ms-auto pour aligner à droite -->
          <li class=\"nav-item\">
            <a class=\"nav-link accueil1\" href=\"{{ path('portfolio') }}\">Portfolio</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link accueil1\" href=\"{{ path('CV') }}\">CV</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link accueil1\" href=\"{{ path('formulaire') }}\">Formulaire</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class=\"p-4 p-md-5 mb-4 rounded text-body-emphasis\" id=\"titre\">
      <div class=\"col-lg-6 px-0\">
        <h1 class=\"display-4 fst-italic text-center\">Maxence André</h1>
        <p class=\"lead my-3\">Bonjour et bienvenue sur mon e-portfolio</p>
      </div>
    </div>

    <div class=\"container\">{% block body %}{% endblock %}</div>
    <container class=\"more\">
      <a href=\"{{ path('more') }}\"
        ><button class=\"btn btn-primary\">Qui suis-je ?</button></a
      >
      <!-- Utilisation de la classe btn btn-primary pour un style de bouton Bootstrap -->
    </container>
    <footer>
      <p xmlns:cc=\"http://creativecommons.org/ns#\" >Licence : <a href=\"http://creativecommons.org/licenses/by-nc/4.0/?ref=chooser-v1\" target=\"_blank\" rel=\"license noopener noreferrer\" style=\"display:inline-block;\">CC BY-NC 4.0<img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1\"><img style=\"height:22px!important;margin-left:3px;vertical-align:text-bottom;\" src=\"https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1\"></a></p>
    </footer>
  </body>
</html>
", "base.html.twig", "C:\\Users\\amaxe\\Desktop\\github\\symfony\\templates\\base.html.twig");
    }
}
