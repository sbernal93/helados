<?php

/* helados/viewHelados.html.twig */
class __TwigTemplate_d6dcc9d05d0a63d126f1d3c9602e0e99542b440f35229c6fea03b1936ff2dd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "helados/viewHelados.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'optionalDescription' => array($this, 'block_optionalDescription'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe61bc44a70f702563204795f72d6147bbe8a9759c725cab116299b84eda56ae = $this->env->getExtension("native_profiler");
        $__internal_fe61bc44a70f702563204795f72d6147bbe8a9759c725cab116299b84eda56ae->enter($__internal_fe61bc44a70f702563204795f72d6147bbe8a9759c725cab116299b84eda56ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helados/viewHelados.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe61bc44a70f702563204795f72d6147bbe8a9759c725cab116299b84eda56ae->leave($__internal_fe61bc44a70f702563204795f72d6147bbe8a9759c725cab116299b84eda56ae_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_b7fbb5adeef74fe379134b22de99c6fcb6b4aa97147be66be5d258d77dbf5216 = $this->env->getExtension("native_profiler");
        $__internal_b7fbb5adeef74fe379134b22de99c6fcb6b4aa97147be66be5d258d77dbf5216->enter($__internal_b7fbb5adeef74fe379134b22de99c6fcb6b4aa97147be66be5d258d77dbf5216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Helado ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_nombre", array()), "html", null, true);
        echo " ";
        
        $__internal_b7fbb5adeef74fe379134b22de99c6fcb6b4aa97147be66be5d258d77dbf5216->leave($__internal_b7fbb5adeef74fe379134b22de99c6fcb6b4aa97147be66be5d258d77dbf5216_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_95aa48005912203c1acb1a6c35496c414bb6a3175f9585bb5a7ea1702a6b8a45 = $this->env->getExtension("native_profiler");
        $__internal_95aa48005912203c1acb1a6c35496c414bb6a3175f9585bb5a7ea1702a6b8a45->enter($__internal_95aa48005912203c1acb1a6c35496c414bb6a3175f9585bb5a7ea1702a6b8a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_id", array()), "html", null, true);
        
        $__internal_95aa48005912203c1acb1a6c35496c414bb6a3175f9585bb5a7ea1702a6b8a45->leave($__internal_95aa48005912203c1acb1a6c35496c414bb6a3175f9585bb5a7ea1702a6b8a45_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_410b80b6fcaa49a8a522ae0ae09465f6f0731ee8c0a94534ec7028934362875e = $this->env->getExtension("native_profiler");
        $__internal_410b80b6fcaa49a8a522ae0ae09465f6f0731ee8c0a94534ec7028934362875e->enter($__internal_410b80b6fcaa49a8a522ae0ae09465f6f0731ee8c0a94534ec7028934362875e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"row\">
    <div class=\"col-md-4\">
        <!-- general form elements -->
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Informacion General</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role=\"form\">
                <div class=\"box-body\">
                    <div class=\"col-md-1\">
                        <label >ID: </label>
                    </div>
                    <div class=\"col-md-2\">
                        <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_id", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-md-12\"></div>
                    <div class=\"col-md-1\">
                        <label >Nombre: </label>
                    </div>
                    <div class=\"col-md-12\"></div>
                    <div class=\"col-md-8\">
                        <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_nombre", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-md-12\"></div>
                    <div class=\"col-md-1\">
                        <label >Tipo: </label>
                    </div>
                    <div class=\"col-md-12\"></div>
                    <div class=\"col-md-8\">
                        <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_tipo", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-md-12\"></div>
                    <div class=\"col-md-8\">
                        <label >Descripcion </label>
                    </div>
                    <div class=\"col-md-12\"></div>
                    <div class=\"col-md-8\">
                        <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_descripcion", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-md-12\"></div>
                    <div class=\"col-md-8\">
                        <label >Cantidad de Bolas: </label>
                    </div>
                    <div class=\"col-md-12\"></div>
                    <div class=\"col-md-8\">
                        <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_cant_bol", array()), "html", null, true);
        echo "</p>
                    </div>


                </div><!-- /.box-body -->

                <div class=\"box-footer\">
                    <div class=\"col-md-1\">
                        <a href=\"/helados/edit/";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_id", array()), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\">Editar</a>
                    </div>
                    <div class=\"col-md-2\"></div>
                    <div class=\"col-md-1\">
                        <a href=\"/helados/delete/";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_id", array()), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-danger\">Eliminar</a>
                    </div>
                </div>
            </form>
        </div><!-- /.box -->
    </div><!-- /col -->
    <div class=\"col-md-8\">
        <!-- general form elements -->
        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Promociones</h3>
                <div class=\"box-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table no-margin\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Rango de Fecha</th>
                                <th>Descripcion</th>
                                <th>Porcentaje Descuento</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promociones"]) ? $context["promociones"] : $this->getContext($context, "promociones")));
        foreach ($context['_seq'] as $context["_key"] => $context["promocion"]) {
            // line 88
            echo "                                <tr>
                                    <td><a href=\"promocion/";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["promocion"], "pr_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["promocion"], "pr_id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["promocion"], "prp_fecha_ini", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["promocion"], "prp_fecha_fin", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["promocion"], "pr_descripcion", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["promocion"], "pr_porc_desc", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promocion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                            </tbody>
                        </table>
                        <div class=\"box-footer\">
                            <div class=\"col-md-1\">
                                <a href=\"/helados/";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_id", array()), "html", null, true);
        echo "/promocion/create\" type=\"submit\" class=\"btn btn-primary\">Crear Nuevo</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
            </div><!-- /.box -->
        </div><!-- /col -->
    </div><!-- /row -->
    ";
        
        $__internal_410b80b6fcaa49a8a522ae0ae09465f6f0731ee8c0a94534ec7028934362875e->leave($__internal_410b80b6fcaa49a8a522ae0ae09465f6f0731ee8c0a94534ec7028934362875e_prof);

    }

    // line 108
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_e0dd5284bfcc53b4eb39807666fbd5cd20d48bc8ed751de431c56edb0e1bd3ec = $this->env->getExtension("native_profiler");
        $__internal_e0dd5284bfcc53b4eb39807666fbd5cd20d48bc8ed751de431c56edb0e1bd3ec->enter($__internal_e0dd5284bfcc53b4eb39807666fbd5cd20d48bc8ed751de431c56edb0e1bd3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 109
        echo "
";
        
        $__internal_e0dd5284bfcc53b4eb39807666fbd5cd20d48bc8ed751de431c56edb0e1bd3ec->leave($__internal_e0dd5284bfcc53b4eb39807666fbd5cd20d48bc8ed751de431c56edb0e1bd3ec_prof);

    }

    public function getTemplateName()
    {
        return "helados/viewHelados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 109,  227 => 108,  211 => 99,  205 => 95,  196 => 92,  192 => 91,  186 => 90,  180 => 89,  177 => 88,  173 => 87,  147 => 64,  140 => 60,  129 => 52,  118 => 44,  107 => 36,  96 => 28,  85 => 20,  69 => 6,  63 => 5,  51 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Helado {{ helado.pro_nombre }} {% endblock %}*/
/* {% block optionalDescription %}{{ helado.pro_id }}{% endblock %}*/
/* {% block content %}*/
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         <!-- general form elements -->*/
/*         <div class="box box-primary">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">Informacion General</h3>*/
/*             </div><!-- /.box-header -->*/
/*             <!-- form start -->*/
/*             <form role="form">*/
/*                 <div class="box-body">*/
/*                     <div class="col-md-1">*/
/*                         <label >ID: </label>*/
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         <p>{{ helado.pro_id }}</p>*/
/*                     </div>*/
/*                     <div class="col-md-12"></div>*/
/*                     <div class="col-md-1">*/
/*                         <label >Nombre: </label>*/
/*                     </div>*/
/*                     <div class="col-md-12"></div>*/
/*                     <div class="col-md-8">*/
/*                         <p>{{ helado.pro_nombre }}</p>*/
/*                     </div>*/
/*                     <div class="col-md-12"></div>*/
/*                     <div class="col-md-1">*/
/*                         <label >Tipo: </label>*/
/*                     </div>*/
/*                     <div class="col-md-12"></div>*/
/*                     <div class="col-md-8">*/
/*                         <p>{{ helado.pro_tipo }}</p>*/
/*                     </div>*/
/*                     <div class="col-md-12"></div>*/
/*                     <div class="col-md-8">*/
/*                         <label >Descripcion </label>*/
/*                     </div>*/
/*                     <div class="col-md-12"></div>*/
/*                     <div class="col-md-8">*/
/*                         <p>{{ helado.pro_descripcion }}</p>*/
/*                     </div>*/
/*                     <div class="col-md-12"></div>*/
/*                     <div class="col-md-8">*/
/*                         <label >Cantidad de Bolas: </label>*/
/*                     </div>*/
/*                     <div class="col-md-12"></div>*/
/*                     <div class="col-md-8">*/
/*                         <p>{{ helado.pro_cant_bol }}</p>*/
/*                     </div>*/
/* */
/* */
/*                 </div><!-- /.box-body -->*/
/* */
/*                 <div class="box-footer">*/
/*                     <div class="col-md-1">*/
/*                         <a href="/helados/edit/{{ helado.pro_id }}" type="submit" class="btn btn-primary">Editar</a>*/
/*                     </div>*/
/*                     <div class="col-md-2"></div>*/
/*                     <div class="col-md-1">*/
/*                         <a href="/helados/delete/{{ helado.pro_id }}" type="submit" class="btn btn-danger">Eliminar</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div><!-- /.box -->*/
/*     </div><!-- /col -->*/
/*     <div class="col-md-8">*/
/*         <!-- general form elements -->*/
/*         <div class="box box-success">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">Promociones</h3>*/
/*                 <div class="box-body">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table no-margin">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>ID</th>*/
/*                                 <th>Rango de Fecha</th>*/
/*                                 <th>Descripcion</th>*/
/*                                 <th>Porcentaje Descuento</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for promocion in promociones %}*/
/*                                 <tr>*/
/*                                     <td><a href="promocion/{{ promocion.pr_id }}">{{ promocion.pr_id }}</a></td>*/
/*                                     <td>{{ promocion.prp_fecha_ini }} - {{ promocion.prp_fecha_fin }}</td>*/
/*                                     <td>{{ promocion.pr_descripcion }}</td>*/
/*                                     <td>{{ promocion.pr_porc_desc }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                         <div class="box-footer">*/
/*                             <div class="col-md-1">*/
/*                                 <a href="/helados/{{ helado.pro_id }}/promocion/create" type="submit" class="btn btn-primary">Crear Nuevo</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box-header -->*/
/*             </div><!-- /.box -->*/
/*         </div><!-- /col -->*/
/*     </div><!-- /row -->*/
/*     {% endblock %}*/
/*     {% block scripts %}*/
/* */
/* {% endblock %}*/
