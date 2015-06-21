<?php

/* MyAppFilmothequeBundle:Default:lister.html.twig */
class __TwigTemplate_740b1357b7d79108b9a8931d526cc70b6638a80d9f9989773bfeb5bb2d987601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16d3c8862b53c186ac051374ce813b5bbdbd5c4a830492c951b7d6451e1712c4 = $this->env->getExtension("native_profiler");
        $__internal_16d3c8862b53c186ac051374ce813b5bbdbd5c4a830492c951b7d6451e1712c4->enter($__internal_16d3c8862b53c186ac051374ce813b5bbdbd5c4a830492c951b7d6451e1712c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppFilmothequeBundle:Default:lister.html.twig"));

        // line 1
        echo "<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

<body>
    <div class=\"container\"> 
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">GLACIOCLIM PROJECT</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br><br>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <h1>Symfony LTS With BootStrap 3.0</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class=\"container\">

      <div class=\"starter-template\">

        <h1>Bootstrap starter template</h1>
        <p class=\"lead\">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->
    
   

<h1>Liste des acteurs</h1>

<table class=\"table table-striped\">

  <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Date de naissance</th>
        <th>Sexe</th>
        <th>Modifier</th>
        <th>Suprimer</th>
      </tr>
    </thead>

";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 70
            echo "\t<tr>
\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "dateNaissance", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "sexe", array()), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_modifier", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t<td><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_supprimer", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
\t</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "\t<tr><td>Aucun acteur n'a été trouvé.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</table>

<p style=\"font-size: 20px;\"><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_ajouter");
        echo "\">Ajouter un acteur</a><p>
</p>
</div>


  </body>";
        
        $__internal_16d3c8862b53c186ac051374ce813b5bbdbd5c4a830492c951b7d6451e1712c4->leave($__internal_16d3c8862b53c186ac051374ce813b5bbdbd5c4a830492c951b7d6451e1712c4_prof);

    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Default:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 83,  135 => 81,  128 => 79,  120 => 76,  116 => 75,  112 => 74,  108 => 73,  104 => 72,  100 => 71,  97 => 70,  92 => 69,  22 => 1,);
    }
}
