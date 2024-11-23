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

/* sae14/portfolio.html.twig */
class __TwigTemplate_ecc993f837b57256e48082e9e0a4100b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sae14/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sae14/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sae14/portfolio.html.twig", 1);
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

        echo "Portfolio";
        
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
        echo "<h1>Portfolio</h1>
";
        // line 5
        echo "<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R101.jpg\" alt=\"R101\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R101</h5>
        <p class=\"card-text\">Initialisation aux réseaux informatiques</p>
        <a href=\"#module1\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R102.jpg\" alt=\"R102\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R102</h5>
        <p class=\"card-text\">Principes et architecture des réseaux</p>
        <a href=\"#module2\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R103.jpg\" alt=\"R103\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R103</h5>
        <p class=\"card-text\">Réseaux locaux et équipements actifs</p>
        <a href=\"#module3\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R104.jpg\" alt=\"R104\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R104</h5>
        <p class=\"card-text\">fondamentaux des systèmes électroniques</p>
        <a href=\"#module4\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R105.jpg\" alt=\"R105\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R105</h5>
        <p class=\"card-text\">Supports de transmission pour les réseaux locaux</p>
        <a href=\"#module5\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R106.jpg\" alt=\"R106\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R106</h5>
        <p class=\"card-text\">Architecture des systèmes numériques et informatiques</p>
        <a href=\"#module6\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R107.jpg\" alt=\"R107\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R107</h5>
        <p class=\"card-text\">Fondamentaux de la programmation</p>
        <a href=\"#module7\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R108.jpg\" alt=\"R108\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R108</h5>
        <p class=\"card-text\">Bases des systèmes d'exploitation</p>
        <a href=\"#module8\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R109.jpg\" alt=\"R109\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R109</h5>
        <p class=\"card-text\">Introduction aux technologies WEB</p>
        <a href=\"#module9\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R110.jpg\" alt=\"R110\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R110</h5>
        <p class=\"card-text\">Anglais de comm. et initiation au vocabulaire technique</p>
        <a href=\"#module10\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R111.jpg\" alt=\"R111\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R111</h5>
        <p class=\"card-text\">Expression-cultureècommunication-professionnelles</p>
        <a href=\"#module11\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R112.jpg\" alt=\"R112\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R112</h5>
        <p class=\"card-text\">Projet personnel et professionnel</p>
        <a href=\"#module12\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R113.jpg\" alt=\"R113\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R113</h5>
        <p class=\"card-text\">Maths du signal</p>
        <a href=\"#module13\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R114.jpg\" alt=\"R114\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R114</h5>
        <p class=\"card-text\">Maths des transmissions</p>
        <a href=\"#module14\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R115.jpg\" alt=\"R115\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R115</h5>
        <p class=\"card-text\">Gestion de projet</p>
        <a href=\"#module15\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>

";
        // line 137
        echo "<div class=\"modal fade\" id=\"module1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.01</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Configurer une adresse IP sur une interface réseau
        </li>
        <li>
            Installation de poste de travail
        </li>
        <li>
            Résoudre un dysfonctionnement
        </li>
        <li>
            Compréhension du système d'exploitation
        </li>
        <li>
            Compréhension des risques liés à l'utilisation d'un poste de travail
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.02</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des principes d'encapsulation et de déencapsulation
        </li>
        <li>
            Analyse de trame pour identifier les dysfonctionnements
        </li>
        <li>
            Utilisation de simulation (Cisco Packet Tracer)
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.03</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Configurations de switchs en mode accès et en mode trunk
        </li>
        <li>
            Configuration de VLANs
        </li>
        <li>
            Application d'IP pour les VLANs
        </li>
        <li>
            Connexion physique entre switchs et postes de travail
        </li>
        <li>
            Analyse de réseaux locaux
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module4\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.04</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des lois de bases de l'électricité, pont diviseur de tension, loi d'ohm, loi des noeuds, loi des mailles
        </li>
        <li>
            Prendre des mesures avec un multimètre
        </li>
        <li>
            Utilisation des sinusoïdes
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module5\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.05</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Soudage de fibre optique
        </li>
        <li>
            Réalisation de cablâge RJ45
        </li>
        <li>
            Test de connectivité
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.06</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des périphériques d'un ordinateur
        </li>
        <li>
            Assimilation de l'environnement de travail (arduino)
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module7\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.07</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Utilisation de logiciels (github, visual studio code, ...)
        </li>
        <li>
            Compréhension des langages de programmation (C, Python, ...)
        </li>
        <li>
            Compréhension des algorithmes
        </li>
        <li>
            Compréhension des notions de bases d'une page HTMl
        </li>
        <li>
            Traitement de données
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module8\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.08</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des commandes de base d'un système d'exploitation grâce au Gameshell (déplacement, copie, suppression, ...)
        </li>
        <li>
            Installation de machine virtuelle
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module9\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.09</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des notions de base d'un site web
        </li>
        <li>
            Utilisation de Symfony
        </li>
        <li>
            Utilisation de Bootstrap
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module10\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.10</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des notions de base de l'anglais
        </li>
        <li>
            Niveau C1
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module11\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.11</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Meilleur compréhension de ce qu'est la communication
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module12\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.12</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Travail en groupe
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module13\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.13</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Lecture du cercle de trigonométrie
        </li>
        <li>
            Etude de fonction
        </li>
        <li>
            Compréhension des transformations sur un signal
        </li>
        <li>
            Résolution numériques d'équations 
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module14\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.14</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Apprentissage des nombres complexes
        </li>
        <li>
            Apprentissage des logarythmes et exponentielles
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module15\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.15</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension de la notion de projet
        </li>
        <li>
            Compréhension des notions de base de la gestion de projet
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sae14/portfolio.html.twig";
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
        return array (  223 => 137,  90 => 5,  87 => 3,  77 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Portfolio{%
endblock %} {% block body %}
<h1>Portfolio</h1>
{# les 15 cards #}
<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R101.jpg\" alt=\"R101\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R101</h5>
        <p class=\"card-text\">Initialisation aux réseaux informatiques</p>
        <a href=\"#module1\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R102.jpg\" alt=\"R102\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R102</h5>
        <p class=\"card-text\">Principes et architecture des réseaux</p>
        <a href=\"#module2\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R103.jpg\" alt=\"R103\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R103</h5>
        <p class=\"card-text\">Réseaux locaux et équipements actifs</p>
        <a href=\"#module3\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R104.jpg\" alt=\"R104\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R104</h5>
        <p class=\"card-text\">fondamentaux des systèmes électroniques</p>
        <a href=\"#module4\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R105.jpg\" alt=\"R105\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R105</h5>
        <p class=\"card-text\">Supports de transmission pour les réseaux locaux</p>
        <a href=\"#module5\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R106.jpg\" alt=\"R106\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R106</h5>
        <p class=\"card-text\">Architecture des systèmes numériques et informatiques</p>
        <a href=\"#module6\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R107.jpg\" alt=\"R107\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R107</h5>
        <p class=\"card-text\">Fondamentaux de la programmation</p>
        <a href=\"#module7\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R108.jpg\" alt=\"R108\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R108</h5>
        <p class=\"card-text\">Bases des systèmes d'exploitation</p>
        <a href=\"#module8\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R109.jpg\" alt=\"R109\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R109</h5>
        <p class=\"card-text\">Introduction aux technologies WEB</p>
        <a href=\"#module9\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R110.jpg\" alt=\"R110\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R110</h5>
        <p class=\"card-text\">Anglais de comm. et initiation au vocabulaire technique</p>
        <a href=\"#module10\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R111.jpg\" alt=\"R111\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R111</h5>
        <p class=\"card-text\">Expression-cultureècommunication-professionnelles</p>
        <a href=\"#module11\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R112.jpg\" alt=\"R112\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R112</h5>
        <p class=\"card-text\">Projet personnel et professionnel</p>
        <a href=\"#module12\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R113.jpg\" alt=\"R113\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R113</h5>
        <p class=\"card-text\">Maths du signal</p>
        <a href=\"#module13\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R114.jpg\" alt=\"R114\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R114</h5>
        <p class=\"card-text\">Maths des transmissions</p>
        <a href=\"#module14\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
    <div class=\"card\" style=\"width: 18rem;\">
      <img class=\"card-img-top\" src=\"R115.jpg\" alt=\"R115\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">R115</h5>
        <p class=\"card-text\">Gestion de projet</p>
        <a href=\"#module15\" class=\"btn btn-primary\" class\"module_btn\" data-toggle=\"modal\">Plus</a>
      </div>
    </div>
</div>

{# les modules pour les pop ups #}
<div class=\"modal fade\" id=\"module1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.01</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Configurer une adresse IP sur une interface réseau
        </li>
        <li>
            Installation de poste de travail
        </li>
        <li>
            Résoudre un dysfonctionnement
        </li>
        <li>
            Compréhension du système d'exploitation
        </li>
        <li>
            Compréhension des risques liés à l'utilisation d'un poste de travail
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.02</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des principes d'encapsulation et de déencapsulation
        </li>
        <li>
            Analyse de trame pour identifier les dysfonctionnements
        </li>
        <li>
            Utilisation de simulation (Cisco Packet Tracer)
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.03</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Configurations de switchs en mode accès et en mode trunk
        </li>
        <li>
            Configuration de VLANs
        </li>
        <li>
            Application d'IP pour les VLANs
        </li>
        <li>
            Connexion physique entre switchs et postes de travail
        </li>
        <li>
            Analyse de réseaux locaux
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module4\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.04</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des lois de bases de l'électricité, pont diviseur de tension, loi d'ohm, loi des noeuds, loi des mailles
        </li>
        <li>
            Prendre des mesures avec un multimètre
        </li>
        <li>
            Utilisation des sinusoïdes
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module5\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.05</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Soudage de fibre optique
        </li>
        <li>
            Réalisation de cablâge RJ45
        </li>
        <li>
            Test de connectivité
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.06</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des périphériques d'un ordinateur
        </li>
        <li>
            Assimilation de l'environnement de travail (arduino)
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module7\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.07</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Utilisation de logiciels (github, visual studio code, ...)
        </li>
        <li>
            Compréhension des langages de programmation (C, Python, ...)
        </li>
        <li>
            Compréhension des algorithmes
        </li>
        <li>
            Compréhension des notions de bases d'une page HTMl
        </li>
        <li>
            Traitement de données
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module8\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.08</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des commandes de base d'un système d'exploitation grâce au Gameshell (déplacement, copie, suppression, ...)
        </li>
        <li>
            Installation de machine virtuelle
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module9\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.09</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des notions de base d'un site web
        </li>
        <li>
            Utilisation de Symfony
        </li>
        <li>
            Utilisation de Bootstrap
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module10\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.10</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension des notions de base de l'anglais
        </li>
        <li>
            Niveau C1
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module11\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.11</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Meilleur compréhension de ce qu'est la communication
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module12\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.12</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Travail en groupe
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module13\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.13</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Lecture du cercle de trigonométrie
        </li>
        <li>
            Etude de fonction
        </li>
        <li>
            Compréhension des transformations sur un signal
        </li>
        <li>
            Résolution numériques d'équations 
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module14\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.14</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Apprentissage des nombres complexes
        </li>
        <li>
            Apprentissage des logarythmes et exponentielles
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"module15\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">R1.15</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <li>
            Compréhension de la notion de projet
        </li>
        <li>
            Compréhension des notions de base de la gestion de projet
        </li>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
{% endblock %}
", "sae14/portfolio.html.twig", "C:\\Users\\amaxe\\Desktop\\github\\symfony\\templates\\sae14\\portfolio.html.twig");
    }
}
