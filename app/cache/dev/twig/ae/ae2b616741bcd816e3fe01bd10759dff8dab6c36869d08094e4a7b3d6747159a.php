<?php

/* base.html.twig */
class __TwigTemplate_6b8c74e0803e59ad05ea77f06cf0073625688f19736b42ca8170237923f34b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9aa5a0db58d2ef17f9ecaec29d6002662d7d98e1b3111029d0df631fce1443a = $this->env->getExtension("native_profiler");
        $__internal_b9aa5a0db58d2ef17f9ecaec29d6002662d7d98e1b3111029d0df631fce1443a->enter($__internal_b9aa5a0db58d2ef17f9ecaec29d6002662d7d98e1b3111029d0df631fce1443a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b9aa5a0db58d2ef17f9ecaec29d6002662d7d98e1b3111029d0df631fce1443a->leave($__internal_b9aa5a0db58d2ef17f9ecaec29d6002662d7d98e1b3111029d0df631fce1443a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_adb60cdfe55ea1210b284e47a80840504046d79c36e204519cbb7d6f622bd68d = $this->env->getExtension("native_profiler");
        $__internal_adb60cdfe55ea1210b284e47a80840504046d79c36e204519cbb7d6f622bd68d->enter($__internal_adb60cdfe55ea1210b284e47a80840504046d79c36e204519cbb7d6f622bd68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_adb60cdfe55ea1210b284e47a80840504046d79c36e204519cbb7d6f622bd68d->leave($__internal_adb60cdfe55ea1210b284e47a80840504046d79c36e204519cbb7d6f622bd68d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69a6629f875147eaa4ae30af5472b26fe9a5552eead946a2499bc7f2d6f28e7c = $this->env->getExtension("native_profiler");
        $__internal_69a6629f875147eaa4ae30af5472b26fe9a5552eead946a2499bc7f2d6f28e7c->enter($__internal_69a6629f875147eaa4ae30af5472b26fe9a5552eead946a2499bc7f2d6f28e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_69a6629f875147eaa4ae30af5472b26fe9a5552eead946a2499bc7f2d6f28e7c->leave($__internal_69a6629f875147eaa4ae30af5472b26fe9a5552eead946a2499bc7f2d6f28e7c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_235230ac6e318f23b9318d1a4ff6ff11c414d63b1825101efa5470c3289edc8c = $this->env->getExtension("native_profiler");
        $__internal_235230ac6e318f23b9318d1a4ff6ff11c414d63b1825101efa5470c3289edc8c->enter($__internal_235230ac6e318f23b9318d1a4ff6ff11c414d63b1825101efa5470c3289edc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_235230ac6e318f23b9318d1a4ff6ff11c414d63b1825101efa5470c3289edc8c->leave($__internal_235230ac6e318f23b9318d1a4ff6ff11c414d63b1825101efa5470c3289edc8c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5a8e42685ec3730a47efc62dff4bda60f831ecbcf21354eac34882a5cb1f5d9 = $this->env->getExtension("native_profiler");
        $__internal_d5a8e42685ec3730a47efc62dff4bda60f831ecbcf21354eac34882a5cb1f5d9->enter($__internal_d5a8e42685ec3730a47efc62dff4bda60f831ecbcf21354eac34882a5cb1f5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d5a8e42685ec3730a47efc62dff4bda60f831ecbcf21354eac34882a5cb1f5d9->leave($__internal_d5a8e42685ec3730a47efc62dff4bda60f831ecbcf21354eac34882a5cb1f5d9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
