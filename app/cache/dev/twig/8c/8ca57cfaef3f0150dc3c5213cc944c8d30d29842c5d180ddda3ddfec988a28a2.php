<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fb627cf2cec2c4dae04de0e7a36899088261e0cc33aa7177b25c0e1bfe353c00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc705878c14ecd039b481fadce0aa8708d8bfde8464ae06913d17c50a8c3306 = $this->env->getExtension("native_profiler");
        $__internal_0fc705878c14ecd039b481fadce0aa8708d8bfde8464ae06913d17c50a8c3306->enter($__internal_0fc705878c14ecd039b481fadce0aa8708d8bfde8464ae06913d17c50a8c3306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc705878c14ecd039b481fadce0aa8708d8bfde8464ae06913d17c50a8c3306->leave($__internal_0fc705878c14ecd039b481fadce0aa8708d8bfde8464ae06913d17c50a8c3306_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10dc180c6232a50a2227e4e2885853ac971b841a43750e05a38b0ed1e279fc14 = $this->env->getExtension("native_profiler");
        $__internal_10dc180c6232a50a2227e4e2885853ac971b841a43750e05a38b0ed1e279fc14->enter($__internal_10dc180c6232a50a2227e4e2885853ac971b841a43750e05a38b0ed1e279fc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_10dc180c6232a50a2227e4e2885853ac971b841a43750e05a38b0ed1e279fc14->leave($__internal_10dc180c6232a50a2227e4e2885853ac971b841a43750e05a38b0ed1e279fc14_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8420a45a8f6cbe164a69cad7a74bcd188b668f00be1aa781f24aefeaac6935d = $this->env->getExtension("native_profiler");
        $__internal_f8420a45a8f6cbe164a69cad7a74bcd188b668f00be1aa781f24aefeaac6935d->enter($__internal_f8420a45a8f6cbe164a69cad7a74bcd188b668f00be1aa781f24aefeaac6935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f8420a45a8f6cbe164a69cad7a74bcd188b668f00be1aa781f24aefeaac6935d->leave($__internal_f8420a45a8f6cbe164a69cad7a74bcd188b668f00be1aa781f24aefeaac6935d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f89c292464394e9d9e42bd3fc3172cb0696cab0711c1ca2505faa3e0a4476b9 = $this->env->getExtension("native_profiler");
        $__internal_6f89c292464394e9d9e42bd3fc3172cb0696cab0711c1ca2505faa3e0a4476b9->enter($__internal_6f89c292464394e9d9e42bd3fc3172cb0696cab0711c1ca2505faa3e0a4476b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6f89c292464394e9d9e42bd3fc3172cb0696cab0711c1ca2505faa3e0a4476b9->leave($__internal_6f89c292464394e9d9e42bd3fc3172cb0696cab0711c1ca2505faa3e0a4476b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
