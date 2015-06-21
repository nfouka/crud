<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_c33783a935b6e817adeaf2c1969cc4305df50074e61898f8182f79a38138fb51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AcmeDemoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a20117d57b413b5adeabd19002f3f0a0f234f3420ae1740d89afba1baba421c7 = $this->env->getExtension("native_profiler");
        $__internal_a20117d57b413b5adeabd19002f3f0a0f234f3420ae1740d89afba1baba421c7->enter($__internal_a20117d57b413b5adeabd19002f3f0a0f234f3420ae1740d89afba1baba421c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a20117d57b413b5adeabd19002f3f0a0f234f3420ae1740d89afba1baba421c7->leave($__internal_a20117d57b413b5adeabd19002f3f0a0f234f3420ae1740d89afba1baba421c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3933128efbf78b1fb8df006716661820de6c8eb3bd25c2bb6574ce1c98da9455 = $this->env->getExtension("native_profiler");
        $__internal_3933128efbf78b1fb8df006716661820de6c8eb3bd25c2bb6574ce1c98da9455->enter($__internal_3933128efbf78b1fb8df006716661820de6c8eb3bd25c2bb6574ce1c98da9455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3933128efbf78b1fb8df006716661820de6c8eb3bd25c2bb6574ce1c98da9455->leave($__internal_3933128efbf78b1fb8df006716661820de6c8eb3bd25c2bb6574ce1c98da9455_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f426062fe2bdfc4c43caad6f9389cd12bfa37c087ab0e4a5c2222431cfc3d0f7 = $this->env->getExtension("native_profiler");
        $__internal_f426062fe2bdfc4c43caad6f9389cd12bfa37c087ab0e4a5c2222431cfc3d0f7->enter($__internal_f426062fe2bdfc4c43caad6f9389cd12bfa37c087ab0e4a5c2222431cfc3d0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_f426062fe2bdfc4c43caad6f9389cd12bfa37c087ab0e4a5c2222431cfc3d0f7->leave($__internal_f426062fe2bdfc4c43caad6f9389cd12bfa37c087ab0e4a5c2222431cfc3d0f7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0ff10ac47b89fbb58ab3767d69f0fe8070559bd7ce7a90a14cd42b0c8674757 = $this->env->getExtension("native_profiler");
        $__internal_c0ff10ac47b89fbb58ab3767d69f0fe8070559bd7ce7a90a14cd42b0c8674757->enter($__internal_c0ff10ac47b89fbb58ab3767d69f0fe8070559bd7ce7a90a14cd42b0c8674757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_c0ff10ac47b89fbb58ab3767d69f0fe8070559bd7ce7a90a14cd42b0c8674757->leave($__internal_c0ff10ac47b89fbb58ab3767d69f0fe8070559bd7ce7a90a14cd42b0c8674757_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_89b95745f167d681d16077d0f63ef4aec230a56346196472ba6ac9385359cf4c = $this->env->getExtension("native_profiler");
        $__internal_89b95745f167d681d16077d0f63ef4aec230a56346196472ba6ac9385359cf4c->enter($__internal_89b95745f167d681d16077d0f63ef4aec230a56346196472ba6ac9385359cf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_89b95745f167d681d16077d0f63ef4aec230a56346196472ba6ac9385359cf4c->leave($__internal_89b95745f167d681d16077d0f63ef4aec230a56346196472ba6ac9385359cf4c_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_9cc114393ce01ffccb2f0ea9673f95da73281d28e6f15d0f0d17a7f46a7d6189 = $this->env->getExtension("native_profiler");
        $__internal_9cc114393ce01ffccb2f0ea9673f95da73281d28e6f15d0f0d17a7f46a7d6189->enter($__internal_9cc114393ce01ffccb2f0ea9673f95da73281d28e6f15d0f0d17a7f46a7d6189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_9cc114393ce01ffccb2f0ea9673f95da73281d28e6f15d0f0d17a7f46a7d6189->leave($__internal_9cc114393ce01ffccb2f0ea9673f95da73281d28e6f15d0f0d17a7f46a7d6189_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_f9591e1ea593c6b1dd5b407317f83beb7a5807ad3fd8195847faf375e1533170 = $this->env->getExtension("native_profiler");
        $__internal_f9591e1ea593c6b1dd5b407317f83beb7a5807ad3fd8195847faf375e1533170->enter($__internal_f9591e1ea593c6b1dd5b407317f83beb7a5807ad3fd8195847faf375e1533170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f9591e1ea593c6b1dd5b407317f83beb7a5807ad3fd8195847faf375e1533170->leave($__internal_f9591e1ea593c6b1dd5b407317f83beb7a5807ad3fd8195847faf375e1533170_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  153 => 20,  147 => 19,  137 => 22,  135 => 19,  132 => 18,  126 => 17,  115 => 34,  111 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 26,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
