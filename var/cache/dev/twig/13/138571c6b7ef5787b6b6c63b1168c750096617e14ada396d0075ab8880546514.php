<?php

/* directores/directores.html.twig */
class __TwigTemplate_c8de59a9f2f919aa1f56c6e02ddc371f0813478959937d04bac14f26ba3720f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "directores/directores.html.twig", 1);
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
        $__internal_c2fdd0b0e4a81d3d3f759fd9906ddde2c91bf733aee0e9bd049124cad8dee5b7 = $this->env->getExtension("native_profiler");
        $__internal_c2fdd0b0e4a81d3d3f759fd9906ddde2c91bf733aee0e9bd049124cad8dee5b7->enter($__internal_c2fdd0b0e4a81d3d3f759fd9906ddde2c91bf733aee0e9bd049124cad8dee5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "directores/directores.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2fdd0b0e4a81d3d3f759fd9906ddde2c91bf733aee0e9bd049124cad8dee5b7->leave($__internal_c2fdd0b0e4a81d3d3f759fd9906ddde2c91bf733aee0e9bd049124cad8dee5b7_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_8292983e8b532a33fd298d90eee4d8e6d0d4ac0596ac5ec204bfcf6ff6e20723 = $this->env->getExtension("native_profiler");
        $__internal_8292983e8b532a33fd298d90eee4d8e6d0d4ac0596ac5ec204bfcf6ff6e20723->enter($__internal_8292983e8b532a33fd298d90eee4d8e6d0d4ac0596ac5ec204bfcf6ff6e20723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Directores ";
        
        $__internal_8292983e8b532a33fd298d90eee4d8e6d0d4ac0596ac5ec204bfcf6ff6e20723->leave($__internal_8292983e8b532a33fd298d90eee4d8e6d0d4ac0596ac5ec204bfcf6ff6e20723_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_9f984b5a5f2c7e69d32990f5793cad34d3e1a3378dca18bb5b8c4b5a306a5df5 = $this->env->getExtension("native_profiler");
        $__internal_9f984b5a5f2c7e69d32990f5793cad34d3e1a3378dca18bb5b8c4b5a306a5df5->enter($__internal_9f984b5a5f2c7e69d32990f5793cad34d3e1a3378dca18bb5b8c4b5a306a5df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_9f984b5a5f2c7e69d32990f5793cad34d3e1a3378dca18bb5b8c4b5a306a5df5->leave($__internal_9f984b5a5f2c7e69d32990f5793cad34d3e1a3378dca18bb5b8c4b5a306a5df5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_61a602117e22dc1507e3d4b5c64a10e3f84a63b974877358513737d280443c0a = $this->env->getExtension("native_profiler");
        $__internal_61a602117e22dc1507e3d4b5c64a10e3f84a63b974877358513737d280443c0a->enter($__internal_61a602117e22dc1507e3d4b5c64a10e3f84a63b974877358513737d280443c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <!-- TABLE: LATEST ORDERS -->
    <div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Directores</h3>

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
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Fecha Ingreso</th>
                <th>Pais de Nacimiento</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["directores"]) ? $context["directores"] : $this->getContext($context, "directores")));
        foreach ($context['_seq'] as $context["_key"] => $context["director"]) {
            // line 32
            echo "                <tr>
                    <td><a href=\"directores/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_cedula", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_cedula", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_seg_nom", array()), "html", null, true);
            echo "</td>
                    <td><span class=\"\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_apellido", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_seg_ape", array()), "html", null, true);
            echo "</span></td>
                    <td>
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_fecha_ing", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_pais_nacim", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a href=\"/directores/edit/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_cedula", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary\">Editar</a>
                        <a href=\"/directores/delete/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "di_cedula", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-danger  \">Eliminar</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['director'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>
        </table>
        <div class=\"box-footer\">
            <div class=\"col-md-1\">
                <a href=\"/directores/create\" type=\"submit\" class=\"btn btn-primary\">Crear Nuevo</a>
            </div>
        </div>
    </div>
    <!-- /.table-responsive -->


";
        
        $__internal_61a602117e22dc1507e3d4b5c64a10e3f84a63b974877358513737d280443c0a->leave($__internal_61a602117e22dc1507e3d4b5c64a10e3f84a63b974877358513737d280443c0a_prof);

    }

    public function getTemplateName()
    {
        return "directores/directores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  134 => 44,  130 => 43,  124 => 40,  118 => 37,  111 => 35,  105 => 34,  99 => 33,  96 => 32,  92 => 31,  65 => 6,  59 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Directores {% endblock %}*/
/* {% block optionalDescription %}{% endblock %}*/
/* {% block content %}*/
/* */
/*     <!-- TABLE: LATEST ORDERS -->*/
/*     <div class="box box-info">*/
/*     <div class="box-header with-border">*/
/*         <h3 class="box-title">Directores</h3>*/
/* */
/*         <div class="box-tools pull-right">*/
/*             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*             </button>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.box-header -->*/
/*     <div class="box-body">*/
/*     <div class="table-responsive">*/
/*         <table class="table no-margin">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Cedula</th>*/
/*                 <th>Nombres</th>*/
/*                 <th>Apellidos</th>*/
/*                 <th>Fecha Ingreso</th>*/
/*                 <th>Pais de Nacimiento</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for director in directores %}*/
/*                 <tr>*/
/*                     <td><a href="directores/{{ director.di_cedula }}">{{ director.di_cedula }}</a></td>*/
/*                     <td>{{ director.di_nombre }} {{ director.di_seg_nom }}</td>*/
/*                     <td><span class="">{{ director.di_apellido }} {{ director.di_seg_ape }}</span></td>*/
/*                     <td>*/
/*                         {{ director.di_fecha_ing }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ director.di_pais_nacim }}*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="/directores/edit/{{ director.di_cedula }}" type="submit" class="btn btn-primary">Editar</a>*/
/*                         <a href="/directores/delete/{{ director.di_cedula }}" type="submit" class="btn btn-danger  ">Eliminar</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*         <div class="box-footer">*/
/*             <div class="col-md-1">*/
/*                 <a href="/directores/create" type="submit" class="btn btn-primary">Crear Nuevo</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.table-responsive -->*/
/* */
/* */
/* {% endblock %}*/
