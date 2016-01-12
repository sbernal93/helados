<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c6fd49f7b09a4daa6e2643e4a3255bbaaf983478b2917b8641325e8bd40fceae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d04fe4ec33b1574cd5a603b359086de51fec2bda639787b3fa52bb54150dc3f = $this->env->getExtension("native_profiler");
        $__internal_4d04fe4ec33b1574cd5a603b359086de51fec2bda639787b3fa52bb54150dc3f->enter($__internal_4d04fe4ec33b1574cd5a603b359086de51fec2bda639787b3fa52bb54150dc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d04fe4ec33b1574cd5a603b359086de51fec2bda639787b3fa52bb54150dc3f->leave($__internal_4d04fe4ec33b1574cd5a603b359086de51fec2bda639787b3fa52bb54150dc3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ff4193d50ee4ea8eea7c082fdcfa917c6e8701f2f48fedf65c22520de6f352f = $this->env->getExtension("native_profiler");
        $__internal_9ff4193d50ee4ea8eea7c082fdcfa917c6e8701f2f48fedf65c22520de6f352f->enter($__internal_9ff4193d50ee4ea8eea7c082fdcfa917c6e8701f2f48fedf65c22520de6f352f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ff4193d50ee4ea8eea7c082fdcfa917c6e8701f2f48fedf65c22520de6f352f->leave($__internal_9ff4193d50ee4ea8eea7c082fdcfa917c6e8701f2f48fedf65c22520de6f352f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3bdf6feb139f0191d4282d865f8e9280c31c90a1792a52904c5c3525d568dff = $this->env->getExtension("native_profiler");
        $__internal_d3bdf6feb139f0191d4282d865f8e9280c31c90a1792a52904c5c3525d568dff->enter($__internal_d3bdf6feb139f0191d4282d865f8e9280c31c90a1792a52904c5c3525d568dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3bdf6feb139f0191d4282d865f8e9280c31c90a1792a52904c5c3525d568dff->leave($__internal_d3bdf6feb139f0191d4282d865f8e9280c31c90a1792a52904c5c3525d568dff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf7b36477af5209c2ab6aa931b5e494e922e8bc2338ff58bdff22d9a96ef410d = $this->env->getExtension("native_profiler");
        $__internal_bf7b36477af5209c2ab6aa931b5e494e922e8bc2338ff58bdff22d9a96ef410d->enter($__internal_bf7b36477af5209c2ab6aa931b5e494e922e8bc2338ff58bdff22d9a96ef410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf7b36477af5209c2ab6aa931b5e494e922e8bc2338ff58bdff22d9a96ef410d->leave($__internal_bf7b36477af5209c2ab6aa931b5e494e922e8bc2338ff58bdff22d9a96ef410d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
