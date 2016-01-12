<?php

/* sucursales.html.twig */
class __TwigTemplate_bcf226e35ae6d87699ca36b486a7b6df1740648a62c3c6b476dcd44455351df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "sucursales.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'optionalDescription' => array($this, 'block_optionalDescription'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17e8b61e146853c6512a6e6120b352f4ae02632ae37ab3b19ac3e67f9c4d0558 = $this->env->getExtension("native_profiler");
        $__internal_17e8b61e146853c6512a6e6120b352f4ae02632ae37ab3b19ac3e67f9c4d0558->enter($__internal_17e8b61e146853c6512a6e6120b352f4ae02632ae37ab3b19ac3e67f9c4d0558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sucursales.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e8b61e146853c6512a6e6120b352f4ae02632ae37ab3b19ac3e67f9c4d0558->leave($__internal_17e8b61e146853c6512a6e6120b352f4ae02632ae37ab3b19ac3e67f9c4d0558_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_b91867127e1762b011db7f59f3652f0ae5aa8e186d18be260a68a33752d50060 = $this->env->getExtension("native_profiler");
        $__internal_b91867127e1762b011db7f59f3652f0ae5aa8e186d18be260a68a33752d50060->enter($__internal_b91867127e1762b011db7f59f3652f0ae5aa8e186d18be260a68a33752d50060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Sucursales ";
        
        $__internal_b91867127e1762b011db7f59f3652f0ae5aa8e186d18be260a68a33752d50060->leave($__internal_b91867127e1762b011db7f59f3652f0ae5aa8e186d18be260a68a33752d50060_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_2f64affac4b26f946d21324d458e4418e37c0981e23a625827e198de2b844677 = $this->env->getExtension("native_profiler");
        $__internal_2f64affac4b26f946d21324d458e4418e37c0981e23a625827e198de2b844677->enter($__internal_2f64affac4b26f946d21324d458e4418e37c0981e23a625827e198de2b844677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_2f64affac4b26f946d21324d458e4418e37c0981e23a625827e198de2b844677->leave($__internal_2f64affac4b26f946d21324d458e4418e37c0981e23a625827e198de2b844677_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e82af4c9dd1180a72022748870d08c7fcc2fdb06ffd98104488046226c175989 = $this->env->getExtension("native_profiler");
        $__internal_e82af4c9dd1180a72022748870d08c7fcc2fdb06ffd98104488046226c175989->enter($__internal_e82af4c9dd1180a72022748870d08c7fcc2fdb06ffd98104488046226c175989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <!-- TABLE: LATEST ORDERS -->
          <div class=\"box box-info\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Sucursales</h3>

              <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
              <div class=\"table-responsive\">
                <table class=\"table no-margin\">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Postal</th>
                    <th>Fecha Apertura</th>
                    <th>Lugar</th>
                  </tr>
                  </thead>
                  <tbody>
                  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sucursales"]) ? $context["sucursales"] : $this->getContext($context, "sucursales")));
        foreach ($context['_seq'] as $context["_key"] => $context["sucursal"]) {
            // line 32
            echo "                  <tr>
                    <td><a href=\"sucursales/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_nombre", array()), "html", null, true);
            echo "</td>
                    <td><span class=\"\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_cod_post", array()), "html", null, true);
            echo "</span></td>
                    <td>
                      ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_fecha_apert", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                      ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_urbanizacion", array()), "html", null, true);
            echo "
                      &nbsp;
                      ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_calle", array()), "html", null, true);
            echo "
                      &nbsp;
                      ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_edificio", array()), "html", null, true);
            echo "
                      &nbsp;
                      ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_ref_dir", array()), "html", null, true);
            echo "
                    </td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sucursal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->


";
        
        $__internal_e82af4c9dd1180a72022748870d08c7fcc2fdb06ffd98104488046226c175989->leave($__internal_e82af4c9dd1180a72022748870d08c7fcc2fdb06ffd98104488046226c175989_prof);

    }

    public function getTemplateName()
    {
        return "sucursales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  135 => 46,  130 => 44,  125 => 42,  120 => 40,  114 => 37,  109 => 35,  105 => 34,  99 => 33,  96 => 32,  92 => 31,  65 => 6,  59 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Sucursales {% endblock %}*/
/* {% block optionalDescription %}{% endblock %}*/
/* {% block content %}*/
/* */
/*     <!-- TABLE: LATEST ORDERS -->*/
/*           <div class="box box-info">*/
/*             <div class="box-header with-border">*/
/*               <h3 class="box-title">Sucursales</h3>*/
/* */
/*               <div class="box-tools pull-right">*/
/*                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                 </button>*/
/*               </div>*/
/*             </div>*/
/*             <!-- /.box-header -->*/
/*             <div class="box-body">*/
/*               <div class="table-responsive">*/
/*                 <table class="table no-margin">*/
/*                   <thead>*/
/*                   <tr>*/
/*                     <th>ID</th>*/
/*                     <th>Nombre</th>*/
/*                     <th>Postal</th>*/
/*                     <th>Fecha Apertura</th>*/
/*                     <th>Lugar</th>*/
/*                   </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for sucursal in sucursales %}*/
/*                   <tr>*/
/*                     <td><a href="sucursales/{{ sucursal.su_id }}">{{ sucursal.su_id }}</a></td>*/
/*                     <td>{{ sucursal.su_nombre }}</td>*/
/*                     <td><span class="">{{ sucursal.su_cod_post }}</span></td>*/
/*                     <td>*/
/*                       {{ sucursal.su_fecha_apert }}*/
/*                     </td>*/
/*                     <td>*/
/*                       {{ sucursal.su_urbanizacion }}*/
/*                       &nbsp;*/
/*                       {{ sucursal.su_calle }}*/
/*                       &nbsp;*/
/*                       {{ sucursal.su_edificio }}*/
/*                       &nbsp;*/
/*                       {{ sucursal.su_ref_dir }}*/
/*                     </td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*               <!-- /.table-responsive -->*/
/* */
/* */
/* {% endblock %}*/
