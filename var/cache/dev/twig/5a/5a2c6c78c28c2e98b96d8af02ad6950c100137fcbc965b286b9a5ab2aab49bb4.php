<?php

/* sucursales/sucursales.html.twig */
class __TwigTemplate_bbb071fb5c01b7128f6d52f71fabfd3738d62a1e084ef377246aaa1665fefe5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "sucursales/sucursales.html.twig", 1);
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
        $__internal_c6a8593585b4cbb68a551e51abfc8ad3d11754d038e29e1c76b92575923b5b89 = $this->env->getExtension("native_profiler");
        $__internal_c6a8593585b4cbb68a551e51abfc8ad3d11754d038e29e1c76b92575923b5b89->enter($__internal_c6a8593585b4cbb68a551e51abfc8ad3d11754d038e29e1c76b92575923b5b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sucursales/sucursales.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a8593585b4cbb68a551e51abfc8ad3d11754d038e29e1c76b92575923b5b89->leave($__internal_c6a8593585b4cbb68a551e51abfc8ad3d11754d038e29e1c76b92575923b5b89_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_a5ca57065697445319d4ea05335d5b1cad08a9e2877a377e09552d69795f6167 = $this->env->getExtension("native_profiler");
        $__internal_a5ca57065697445319d4ea05335d5b1cad08a9e2877a377e09552d69795f6167->enter($__internal_a5ca57065697445319d4ea05335d5b1cad08a9e2877a377e09552d69795f6167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Sucursales ";
        
        $__internal_a5ca57065697445319d4ea05335d5b1cad08a9e2877a377e09552d69795f6167->leave($__internal_a5ca57065697445319d4ea05335d5b1cad08a9e2877a377e09552d69795f6167_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_86fc863330c9d60f10e7c6b4dc65c0d97bccaac3252702181cad0b980c459150 = $this->env->getExtension("native_profiler");
        $__internal_86fc863330c9d60f10e7c6b4dc65c0d97bccaac3252702181cad0b980c459150->enter($__internal_86fc863330c9d60f10e7c6b4dc65c0d97bccaac3252702181cad0b980c459150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_86fc863330c9d60f10e7c6b4dc65c0d97bccaac3252702181cad0b980c459150->leave($__internal_86fc863330c9d60f10e7c6b4dc65c0d97bccaac3252702181cad0b980c459150_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c954014836fc25f1724320310ea39962fc5af6752c9eb7a11d66f795fa50d1e8 = $this->env->getExtension("native_profiler");
        $__internal_c954014836fc25f1724320310ea39962fc5af6752c9eb7a11d66f795fa50d1e8->enter($__internal_c954014836fc25f1724320310ea39962fc5af6752c9eb7a11d66f795fa50d1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <th>Pais</th>
                    <th>Ciudad</th>
                    <th>Fecha Apertura</th>
                    <th>Accion</th>
                  </tr>
                  </thead>
                  <tbody>
                  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sucursales"]) ? $context["sucursales"] : $this->getContext($context, "sucursales")));
        foreach ($context['_seq'] as $context["_key"] => $context["sucursal"]) {
            // line 34
            echo "                  <tr>
                    <td><a href=\"sucursales/";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_nombre", array()), "html", null, true);
            echo "</td>
                    <td><span class=\"\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_cod_post", array()), "html", null, true);
            echo "</span></td>
                    <td>
                      ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "pais", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                      ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "ciudad", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                      ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_fecha_apert", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                      <a href=\"/sucursales/edit/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_id", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary\">Editar</a>
                      <a href=\"/sucursales/delete/";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["sucursal"], "su_id", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-danger  \">Eliminar</a>
                    </td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sucursal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                  </tbody>
                </table>
                <div class=\"box-footer\">
                  <div class=\"col-md-1\">
                    <a href=\"/sucursales/create\" type=\"submit\" class=\"btn btn-primary\">Crear Nuevo</a>
                  </div>
                </div>
              </div>
              <!-- /.table-responsive -->


";
        
        $__internal_c954014836fc25f1724320310ea39962fc5af6752c9eb7a11d66f795fa50d1e8->leave($__internal_c954014836fc25f1724320310ea39962fc5af6752c9eb7a11d66f795fa50d1e8_prof);

    }

    public function getTemplateName()
    {
        return "sucursales/sucursales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 53,  138 => 49,  134 => 48,  128 => 45,  122 => 42,  116 => 39,  111 => 37,  107 => 36,  101 => 35,  98 => 34,  94 => 33,  65 => 6,  59 => 5,  48 => 4,  36 => 3,  11 => 1,);
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
/*                     <th>Pais</th>*/
/*                     <th>Ciudad</th>*/
/*                     <th>Fecha Apertura</th>*/
/*                     <th>Accion</th>*/
/*                   </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for sucursal in sucursales %}*/
/*                   <tr>*/
/*                     <td><a href="sucursales/{{ sucursal.su_id }}">{{ sucursal.su_id }}</a></td>*/
/*                     <td>{{ sucursal.su_nombre }}</td>*/
/*                     <td><span class="">{{ sucursal.su_cod_post }}</span></td>*/
/*                     <td>*/
/*                       {{ sucursal.pais }}*/
/*                     </td>*/
/*                     <td>*/
/*                       {{ sucursal.ciudad }}*/
/*                     </td>*/
/*                     <td>*/
/*                       {{ sucursal.su_fecha_apert }}*/
/*                     </td>*/
/*                     <td>*/
/*                       <a href="/sucursales/edit/{{ sucursal.su_id }}" type="submit" class="btn btn-primary">Editar</a>*/
/*                       <a href="/sucursales/delete/{{ sucursal.su_id }}" type="submit" class="btn btn-danger  ">Eliminar</a>*/
/*                     </td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*                 <div class="box-footer">*/
/*                   <div class="col-md-1">*/
/*                     <a href="/sucursales/create" type="submit" class="btn btn-primary">Crear Nuevo</a>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.table-responsive -->*/
/* */
/* */
/* {% endblock %}*/
