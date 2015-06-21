<?php

/* MyAppFilmothequeBundle:Default:ajouter.html.twig */
class __TwigTemplate_6388f7b4592099792a1c42171ba13ea596281f38526a98a54bec0659496558c1 extends Twig_Template
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
        $__internal_ea8d017e9ff1e1c71b20ae95f06dcb34d244ef46825c2ae9fff00c043c09b26a = $this->env->getExtension("native_profiler");
        $__internal_ea8d017e9ff1e1c71b20ae95f06dcb34d244ef46825c2ae9fff00c043c09b26a->enter($__internal_ea8d017e9ff1e1c71b20ae95f06dcb34d244ef46825c2ae9fff00c043c09b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppFilmothequeBundle:Default:ajouter.html.twig"));

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

    <div class=\"container\">

      <div class=\"starter-template\">
      <br>  <br><br>
        <h1>Bootstrap starter template</h1>
        <p class=\"lead\">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->
    
   
<h1>Ajouter un acteur</h1>

";
        // line 46
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 47
            echo "<p style=\"color: green ; \">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 49
        echo "
";
        // line 50
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AcmeDemoBundle:Form:bootstrap_3_layout.html.twig"));
        // line 51
        echo "

<form action=\"#\" method=\"post\" ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
   
    <div>
    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Votre nom")) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
    </div>
    (*) votre nom dois avoir au moin deux lettres .
    <div>
    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Votre Prénom")) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
    </div>
    (*) votre prénom dois avoir au moin deux lettres .
    <div>
    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'errors');
        echo "
    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Date de naissance")) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget');
        echo "
    </div>
    
      <div>
    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("sexe")) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "
    </div>
    
    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <br/>
    <input type=\"submit\" id=\"submit\"  name=\"submit\" />
   
</form>

<p><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_lister");
        echo "\">Retour à la liste des acteurs</a></p>
</div>
    
    </div> <!-- /container -->


  </body>";
        
        $__internal_ea8d017e9ff1e1c71b20ae95f06dcb34d244ef46825c2ae9fff00c043c09b26a->leave($__internal_ea8d017e9ff1e1c71b20ae95f06dcb34d244ef46825c2ae9fff00c043c09b26a_prof);

    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Default:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 85,  151 => 79,  145 => 76,  141 => 75,  137 => 74,  130 => 70,  126 => 69,  122 => 68,  115 => 64,  111 => 63,  107 => 62,  100 => 58,  96 => 57,  92 => 56,  86 => 53,  82 => 51,  80 => 50,  77 => 49,  71 => 47,  69 => 46,  22 => 1,);
    }
}
