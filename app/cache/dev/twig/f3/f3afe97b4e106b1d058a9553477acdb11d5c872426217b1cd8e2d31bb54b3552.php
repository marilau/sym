<?php

/* base.html.twig */
class __TwigTemplate_52e961a23d3bfea24c8718a44c58340cf8eda145344e4993a1bfffe241cae443 extends Twig_Template
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
        $__internal_281c63a5ec3b0bd17524fcc0ef0affedac43c7c8097c21db98b0377be996b8c2 = $this->env->getExtension("native_profiler");
        $__internal_281c63a5ec3b0bd17524fcc0ef0affedac43c7c8097c21db98b0377be996b8c2->enter($__internal_281c63a5ec3b0bd17524fcc0ef0affedac43c7c8097c21db98b0377be996b8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_281c63a5ec3b0bd17524fcc0ef0affedac43c7c8097c21db98b0377be996b8c2->leave($__internal_281c63a5ec3b0bd17524fcc0ef0affedac43c7c8097c21db98b0377be996b8c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fa7df18333f51fb7bab7cf33472dee81d05129119c7dad7e5161781c33fd63e = $this->env->getExtension("native_profiler");
        $__internal_5fa7df18333f51fb7bab7cf33472dee81d05129119c7dad7e5161781c33fd63e->enter($__internal_5fa7df18333f51fb7bab7cf33472dee81d05129119c7dad7e5161781c33fd63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5fa7df18333f51fb7bab7cf33472dee81d05129119c7dad7e5161781c33fd63e->leave($__internal_5fa7df18333f51fb7bab7cf33472dee81d05129119c7dad7e5161781c33fd63e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea9110a70b2d4031242c1da2f11a6a63683ec3abbfc77d2149b832f1c8817a1b = $this->env->getExtension("native_profiler");
        $__internal_ea9110a70b2d4031242c1da2f11a6a63683ec3abbfc77d2149b832f1c8817a1b->enter($__internal_ea9110a70b2d4031242c1da2f11a6a63683ec3abbfc77d2149b832f1c8817a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ea9110a70b2d4031242c1da2f11a6a63683ec3abbfc77d2149b832f1c8817a1b->leave($__internal_ea9110a70b2d4031242c1da2f11a6a63683ec3abbfc77d2149b832f1c8817a1b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_66488505270a54abf00d96afe4662020af33f35aa7ba276a70fb8dd7b2d9bcaf = $this->env->getExtension("native_profiler");
        $__internal_66488505270a54abf00d96afe4662020af33f35aa7ba276a70fb8dd7b2d9bcaf->enter($__internal_66488505270a54abf00d96afe4662020af33f35aa7ba276a70fb8dd7b2d9bcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_66488505270a54abf00d96afe4662020af33f35aa7ba276a70fb8dd7b2d9bcaf->leave($__internal_66488505270a54abf00d96afe4662020af33f35aa7ba276a70fb8dd7b2d9bcaf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d09cc9c21d33fb572fa00535c56454047c747cf0370c30fae73b83b1c2e68cf6 = $this->env->getExtension("native_profiler");
        $__internal_d09cc9c21d33fb572fa00535c56454047c747cf0370c30fae73b83b1c2e68cf6->enter($__internal_d09cc9c21d33fb572fa00535c56454047c747cf0370c30fae73b83b1c2e68cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d09cc9c21d33fb572fa00535c56454047c747cf0370c30fae73b83b1c2e68cf6->leave($__internal_d09cc9c21d33fb572fa00535c56454047c747cf0370c30fae73b83b1c2e68cf6_prof);

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
