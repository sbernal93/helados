<?php

/* helados/helados.html.twig */
class __TwigTemplate_e135f8397576a3f03efb677a6a573ea758c605a346768d1dbbf91e2f751727b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "helados/helados.html.twig", 1);
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
        $__internal_5657b4e45c421783a4db511c57578688bc22f41c285e791cd574f8b3b777205d = $this->env->getExtension("native_profiler");
        $__internal_5657b4e45c421783a4db511c57578688bc22f41c285e791cd574f8b3b777205d->enter($__internal_5657b4e45c421783a4db511c57578688bc22f41c285e791cd574f8b3b777205d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helados/helados.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5657b4e45c421783a4db511c57578688bc22f41c285e791cd574f8b3b777205d->leave($__internal_5657b4e45c421783a4db511c57578688bc22f41c285e791cd574f8b3b777205d_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_5c3db1398ee8f6812d1f4b783c0fa817be05025b70b16e1d84c88b358f855cd5 = $this->env->getExtension("native_profiler");
        $__internal_5c3db1398ee8f6812d1f4b783c0fa817be05025b70b16e1d84c88b358f855cd5->enter($__internal_5c3db1398ee8f6812d1f4b783c0fa817be05025b70b16e1d84c88b358f855cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Helados ";
        
        $__internal_5c3db1398ee8f6812d1f4b783c0fa817be05025b70b16e1d84c88b358f855cd5->leave($__internal_5c3db1398ee8f6812d1f4b783c0fa817be05025b70b16e1d84c88b358f855cd5_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_3d8996e483595c1e94c946025c88b5b13ff539d00f856da6ec8e4c18cf0b0992 = $this->env->getExtension("native_profiler");
        $__internal_3d8996e483595c1e94c946025c88b5b13ff539d00f856da6ec8e4c18cf0b0992->enter($__internal_3d8996e483595c1e94c946025c88b5b13ff539d00f856da6ec8e4c18cf0b0992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_3d8996e483595c1e94c946025c88b5b13ff539d00f856da6ec8e4c18cf0b0992->leave($__internal_3d8996e483595c1e94c946025c88b5b13ff539d00f856da6ec8e4c18cf0b0992_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e9b48c83c8f98133a094642e43254b8e9c63dafc657416db41d746ec8197462 = $this->env->getExtension("native_profiler");
        $__internal_5e9b48c83c8f98133a094642e43254b8e9c63dafc657416db41d746ec8197462->enter($__internal_5e9b48c83c8f98133a094642e43254b8e9c63dafc657416db41d746ec8197462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<!-- TABLE: LATEST ORDERS -->
<div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Helados</h3>

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
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Cantidad Bolas</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["helados"]) ? $context["helados"] : $this->getContext($context, "helados")));
        foreach ($context['_seq'] as $context["_key"] => $context["helado"]) {
            // line 32
            echo "                    <tr>
                        <td><a href=\"helados/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["helado"], "pro_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["helado"], "pro_id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["helado"], "pro_nombre", array()), "html", null, true);
            echo "</td>
                        <td><span class=\"\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["helado"], "pro_tipo", array()), "html", null, true);
            echo "</span></td>
                        <td>
                            ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["helado"], "pro_descripcion", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["helado"], "pro_cant_bol", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <a href=\"/helados/edit/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["helado"], "pro_id", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary\">Editar</a>
                            <a href=\"/helados/delete/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["helado"], "pro_id", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-danger  \">Eliminar</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>
            <div class=\"box-footer\">
                <div class=\"col-md-1\">
                    <a href=\"/helados/create\" type=\"submit\" class=\"btn btn-primary\">Crear Nuevo</a>
                </div>
            </div>
        </div>
        <!-- /.table-responsive -->


";
        
        $__internal_5e9b48c83c8f98133a094642e43254b8e9c63dafc657416db41d746ec8197462->leave($__internal_5e9b48c83c8f98133a094642e43254b8e9c63dafc657416db41d746ec8197462_prof);

    }

    public function getTemplateName()
    {
        return "helados/helados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 48,  130 => 44,  126 => 43,  120 => 40,  114 => 37,  109 => 35,  105 => 34,  99 => 33,  96 => 32,  92 => 31,  65 => 6,  59 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Helados {% endblock %}*/
/* {% block optionalDescription %}{% endblock %}*/
/* {% block content %}*/
/* */
/* <!-- TABLE: LATEST ORDERS -->*/
/* <div class="box box-info">*/
/*     <div class="box-header with-border">*/
/*         <h3 class="box-title">Helados</h3>*/
/* */
/*         <div class="box-tools pull-right">*/
/*             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*             </button>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="table-responsive">*/
/*             <table class="table no-margin">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>ID</th>*/
/*                     <th>Nombre</th>*/
/*                     <th>Tipo</th>*/
/*                     <th>Descripcion</th>*/
/*                     <th>Cantidad Bolas</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for helado in helados %}*/
/*                     <tr>*/
/*                         <td><a href="helados/{{ helado.pro_id }}">{{ helado.pro_id }}</a></td>*/
/*                         <td>{{ helado.pro_nombre }}</td>*/
/*                         <td><span class="">{{ helado.pro_tipo }}</span></td>*/
/*                         <td>*/
/*                             {{ helado.pro_descripcion }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ helado.pro_cant_bol }}*/
/*                         </td>*/
/*                         <td>*/
/*                             <a href="/helados/edit/{{ helado.pro_id }}" type="submit" class="btn btn-primary">Editar</a>*/
/*                             <a href="/helados/delete/{{ helado.pro_id }}" type="submit" class="btn btn-danger  ">Eliminar</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <div class="box-footer">*/
/*                 <div class="col-md-1">*/
/*                     <a href="/helados/create" type="submit" class="btn btn-primary">Crear Nuevo</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.table-responsive -->*/
/* */
/* */
/* {% endblock %}*/
