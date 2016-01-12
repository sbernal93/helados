<?php

/* historia/historias.html.twig */
class __TwigTemplate_e9763c792d0444af174adecd297b66c7128e19a227841e26f267285ace42b9f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "historia/historias.html.twig", 1);
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
        $__internal_6bd5d8de3dbb037500769b1355ae31091b020be30406774ed4d558cf4c385dcd = $this->env->getExtension("native_profiler");
        $__internal_6bd5d8de3dbb037500769b1355ae31091b020be30406774ed4d558cf4c385dcd->enter($__internal_6bd5d8de3dbb037500769b1355ae31091b020be30406774ed4d558cf4c385dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "historia/historias.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd5d8de3dbb037500769b1355ae31091b020be30406774ed4d558cf4c385dcd->leave($__internal_6bd5d8de3dbb037500769b1355ae31091b020be30406774ed4d558cf4c385dcd_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_09a3253b9eabecb44aace95845faffb469720b0295437b617ee1675af8f6f5d7 = $this->env->getExtension("native_profiler");
        $__internal_09a3253b9eabecb44aace95845faffb469720b0295437b617ee1675af8f6f5d7->enter($__internal_09a3253b9eabecb44aace95845faffb469720b0295437b617ee1675af8f6f5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Historia ";
        
        $__internal_09a3253b9eabecb44aace95845faffb469720b0295437b617ee1675af8f6f5d7->leave($__internal_09a3253b9eabecb44aace95845faffb469720b0295437b617ee1675af8f6f5d7_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_f4fbb7208f8c31eb4af7c653d9df0939e22033caef3ca40bd997bbdf461ea0a2 = $this->env->getExtension("native_profiler");
        $__internal_f4fbb7208f8c31eb4af7c653d9df0939e22033caef3ca40bd997bbdf461ea0a2->enter($__internal_f4fbb7208f8c31eb4af7c653d9df0939e22033caef3ca40bd997bbdf461ea0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_f4fbb7208f8c31eb4af7c653d9df0939e22033caef3ca40bd997bbdf461ea0a2->leave($__internal_f4fbb7208f8c31eb4af7c653d9df0939e22033caef3ca40bd997bbdf461ea0a2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8a70d677a0ce39acdea49b825e2a1bc253630825d7d0df955c0b82cb193c2e9 = $this->env->getExtension("native_profiler");
        $__internal_c8a70d677a0ce39acdea49b825e2a1bc253630825d7d0df955c0b82cb193c2e9->enter($__internal_c8a70d677a0ce39acdea49b825e2a1bc253630825d7d0df955c0b82cb193c2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <!-- TABLE: LATEST ORDERS -->
    <div class=\"box box-info\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Historia</h3>

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
                <th>Fecha</th>
                <th>Evento</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historias"]) ? $context["historias"] : $this->getContext($context, "historias")));
        foreach ($context['_seq'] as $context["_key"] => $context["historia"]) {
            // line 30
            echo "                <tr>
                    <td><a href=\"historias/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["historia"], "hi_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["historia"], "hi_id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["historia"], "hi_fecha", array()), "html", null, true);
            echo "</td>
                    <td><span class=\"\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["historia"], "hi_evento", array()), "html", null, true);
            echo "</span></td>

                    <td>
                        <a href=\"/historias/edit/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["historia"], "hi_id", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary\">Editar</a>
                        <a href=\"/historias/delete/";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["historia"], "hi_id", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-danger  \">Eliminar</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
        <div class=\"box-footer\">
            <div class=\"col-md-1\">
                <a href=\"/historias/create\" type=\"submit\" class=\"btn btn-primary\">Crear Nuevo</a>
            </div>
        </div>
    </div>
    <!-- /.table-responsive -->


";
        
        $__internal_c8a70d677a0ce39acdea49b825e2a1bc253630825d7d0df955c0b82cb193c2e9->leave($__internal_c8a70d677a0ce39acdea49b825e2a1bc253630825d7d0df955c0b82cb193c2e9_prof);

    }

    public function getTemplateName()
    {
        return "historia/historias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 41,  117 => 37,  113 => 36,  107 => 33,  103 => 32,  97 => 31,  94 => 30,  90 => 29,  65 => 6,  59 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Historia {% endblock %}*/
/* {% block optionalDescription %}{% endblock %}*/
/* {% block content %}*/
/* */
/*     <!-- TABLE: LATEST ORDERS -->*/
/*     <div class="box box-info">*/
/*     <div class="box-header with-border">*/
/*         <h3 class="box-title">Historia</h3>*/
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
/*                 <th>ID</th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Evento</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for historia in historias %}*/
/*                 <tr>*/
/*                     <td><a href="historias/{{ historia.hi_id }}">{{ historia.hi_id }}</a></td>*/
/*                     <td>{{ historia.hi_fecha }}</td>*/
/*                     <td><span class="">{{ historia.hi_evento }}</span></td>*/
/* */
/*                     <td>*/
/*                         <a href="/historias/edit/{{ historia.hi_id }}" type="submit" class="btn btn-primary">Editar</a>*/
/*                         <a href="/historias/delete/{{ historia.hi_id }}" type="submit" class="btn btn-danger  ">Eliminar</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*         <div class="box-footer">*/
/*             <div class="col-md-1">*/
/*                 <a href="/historias/create" type="submit" class="btn btn-primary">Crear Nuevo</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.table-responsive -->*/
/* */
/* */
/* {% endblock %}*/
