<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f7f24222a6acd2463414a377aec2d876c5ace3cebe6a147d2a683ed5607b67e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85b980578b1f8960fd27aaecfc9e858ccd72fa12e53f5d34dab9cf6f646e3249 = $this->env->getExtension("native_profiler");
        $__internal_85b980578b1f8960fd27aaecfc9e858ccd72fa12e53f5d34dab9cf6f646e3249->enter($__internal_85b980578b1f8960fd27aaecfc9e858ccd72fa12e53f5d34dab9cf6f646e3249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85b980578b1f8960fd27aaecfc9e858ccd72fa12e53f5d34dab9cf6f646e3249->leave($__internal_85b980578b1f8960fd27aaecfc9e858ccd72fa12e53f5d34dab9cf6f646e3249_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7820ba573287c807afb54bb84026027381766e5a4cca089b8a9db686d35a5626 = $this->env->getExtension("native_profiler");
        $__internal_7820ba573287c807afb54bb84026027381766e5a4cca089b8a9db686d35a5626->enter($__internal_7820ba573287c807afb54bb84026027381766e5a4cca089b8a9db686d35a5626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7820ba573287c807afb54bb84026027381766e5a4cca089b8a9db686d35a5626->leave($__internal_7820ba573287c807afb54bb84026027381766e5a4cca089b8a9db686d35a5626_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_828d1944100667b339b08bba2e19a0cc469453afd10c9fca42a70c7134b4b9c3 = $this->env->getExtension("native_profiler");
        $__internal_828d1944100667b339b08bba2e19a0cc469453afd10c9fca42a70c7134b4b9c3->enter($__internal_828d1944100667b339b08bba2e19a0cc469453afd10c9fca42a70c7134b4b9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_828d1944100667b339b08bba2e19a0cc469453afd10c9fca42a70c7134b4b9c3->leave($__internal_828d1944100667b339b08bba2e19a0cc469453afd10c9fca42a70c7134b4b9c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_05cd5f2d19caee48592f4e28c4e8f67fa63e97fb49a800264bd79cb6da989300 = $this->env->getExtension("native_profiler");
        $__internal_05cd5f2d19caee48592f4e28c4e8f67fa63e97fb49a800264bd79cb6da989300->enter($__internal_05cd5f2d19caee48592f4e28c4e8f67fa63e97fb49a800264bd79cb6da989300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_05cd5f2d19caee48592f4e28c4e8f67fa63e97fb49a800264bd79cb6da989300->leave($__internal_05cd5f2d19caee48592f4e28c4e8f67fa63e97fb49a800264bd79cb6da989300_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
