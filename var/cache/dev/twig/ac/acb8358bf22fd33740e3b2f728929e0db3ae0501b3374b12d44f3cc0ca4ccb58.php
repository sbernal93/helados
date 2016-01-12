<?php

/* sucursales/viewSucursal.html.twig */
class __TwigTemplate_fe7ce9d233320ec44a4a422bc26ce63c16a2de8efce3bc04af5f6371f9104ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "sucursales/viewSucursal.html.twig", 1);
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
        $__internal_a8874b0b50ec17f374eb5cc43db863311bc309865700a16677bbc787f81ac958 = $this->env->getExtension("native_profiler");
        $__internal_a8874b0b50ec17f374eb5cc43db863311bc309865700a16677bbc787f81ac958->enter($__internal_a8874b0b50ec17f374eb5cc43db863311bc309865700a16677bbc787f81ac958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sucursales/viewSucursal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8874b0b50ec17f374eb5cc43db863311bc309865700a16677bbc787f81ac958->leave($__internal_a8874b0b50ec17f374eb5cc43db863311bc309865700a16677bbc787f81ac958_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_6809a70f90ef232c15f4b59ea2cd6e8fb2c43b500a5e15fa65e5c8b406d0ff72 = $this->env->getExtension("native_profiler");
        $__internal_6809a70f90ef232c15f4b59ea2cd6e8fb2c43b500a5e15fa65e5c8b406d0ff72->enter($__internal_6809a70f90ef232c15f4b59ea2cd6e8fb2c43b500a5e15fa65e5c8b406d0ff72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Sucursal ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_id", array()), "html", null, true);
        echo " ";
        
        $__internal_6809a70f90ef232c15f4b59ea2cd6e8fb2c43b500a5e15fa65e5c8b406d0ff72->leave($__internal_6809a70f90ef232c15f4b59ea2cd6e8fb2c43b500a5e15fa65e5c8b406d0ff72_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_4b035342d4a6804093091b35850094e3e0e077324c148ec9c01fc15eee955665 = $this->env->getExtension("native_profiler");
        $__internal_4b035342d4a6804093091b35850094e3e0e077324c148ec9c01fc15eee955665->enter($__internal_4b035342d4a6804093091b35850094e3e0e077324c148ec9c01fc15eee955665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_nombre", array()), "html", null, true);
        
        $__internal_4b035342d4a6804093091b35850094e3e0e077324c148ec9c01fc15eee955665->leave($__internal_4b035342d4a6804093091b35850094e3e0e077324c148ec9c01fc15eee955665_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f17b091c968ea73424a52483e39679e38b67c27f7b5837fce14e36d67d9c911e = $this->env->getExtension("native_profiler");
        $__internal_f17b091c968ea73424a52483e39679e38b67c27f7b5837fce14e36d67d9c911e->enter($__internal_f17b091c968ea73424a52483e39679e38b67c27f7b5837fce14e36d67d9c911e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"row\">
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_nombre", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-1\">
                            <label >Telefono: </label>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "te_numero", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <label >Fecha de Apertura: </label>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_fecha_apert", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <label >Pais: </label>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "pais", array()), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-md-8\">
                            <label >Ciudad: </label>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <p>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "ciudad", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <label >Codigo Postal: </label>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <p>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_cod_post", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <label >Urbanizacion: </label>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <p>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_urbanizacion", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <label >Calle: </label>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <p>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_calle", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <label >Edificio: </label>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <p>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_edificio", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <label >Referencia: </label>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"col-md-8\">
                            <p>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_ref_dir", array()), "html", null, true);
        echo "</p>
                        </div>


                    </div><!-- /.box-body -->

                    <div class=\"box-footer\">
                        <div class=\"col-md-1\">
                            <a href=\"/sucursales/edit/";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_id", array()), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\">Editar</a>
                        </div>
                    </div>
                </form>
            </div><!-- /.box -->
        </div><!-- /col -->
    <div class=\"col-md-8\">
        <!-- general form elements -->
        <div class=\"box box-success\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Pedidos</h3>
                <div class=\"box-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table no-margin\">
                            <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Fecha Solicitada</th>
                                <th>Fecha Recepcion</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 131
            echo "                                <tr>
                                    <td><a href=\"pedido/";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "pe_num_orden", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "pe_num_orden", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "pe_fecha_solic", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "pe_fecha_recep", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                            </tbody>
                        </table>
                    </div>
            </div><!-- /.box-header -->
        </div><!-- /.box -->
    </div><!-- /col -->
</div><!-- /row -->
";
        
        $__internal_f17b091c968ea73424a52483e39679e38b67c27f7b5837fce14e36d67d9c911e->leave($__internal_f17b091c968ea73424a52483e39679e38b67c27f7b5837fce14e36d67d9c911e_prof);

    }

    // line 145
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_9c6091ccbbd40cd71a37eb7f672771f5b94de4dcecdb1d542f54569272c981d7 = $this->env->getExtension("native_profiler");
        $__internal_9c6091ccbbd40cd71a37eb7f672771f5b94de4dcecdb1d542f54569272c981d7->enter($__internal_9c6091ccbbd40cd71a37eb7f672771f5b94de4dcecdb1d542f54569272c981d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 146
        echo "
";
        
        $__internal_9c6091ccbbd40cd71a37eb7f672771f5b94de4dcecdb1d542f54569272c981d7->leave($__internal_9c6091ccbbd40cd71a37eb7f672771f5b94de4dcecdb1d542f54569272c981d7_prof);

    }

    public function getTemplateName()
    {
        return "sucursales/viewSucursal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 146,  271 => 145,  257 => 137,  248 => 134,  244 => 133,  238 => 132,  235 => 131,  231 => 130,  206 => 108,  195 => 100,  184 => 92,  173 => 84,  162 => 76,  151 => 68,  140 => 60,  129 => 52,  118 => 44,  107 => 36,  96 => 28,  85 => 20,  69 => 6,  63 => 5,  51 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Sucursal {{ sucursal.su_id }} {% endblock %}*/
/* {% block optionalDescription %}{{ sucursal.su_nombre }}{% endblock %}*/
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <!-- general form elements -->*/
/*             <div class="box box-primary">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Informacion General</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form role="form">*/
/*                     <div class="box-body">*/
/*                         <div class="col-md-1">*/
/*                             <label >ID: </label>*/
/*                         </div>*/
/*                         <div class="col-md-2">*/
/*                             <p>{{ sucursal.su_id }}</p>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-1">*/
/*                             <label >Nombre: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.su_nombre }}</p>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-1">*/
/*                             <label >Telefono: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.te_numero }}</p>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <label >Fecha de Apertura: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.su_fecha_apert }}</p>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <label >Pais: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.pais }}</p>*/
/*                         </div>*/
/* */
/*                         <div class="col-md-8">*/
/*                             <label >Ciudad: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.ciudad }}</p>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <label >Codigo Postal: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.su_cod_post }}</p>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <label >Urbanizacion: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.su_urbanizacion }}</p>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <label >Calle: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.su_calle }}</p>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <label >Edificio: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.su_edificio }}</p>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <label >Referencia: </label>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="col-md-8">*/
/*                             <p>{{ sucursal.su_ref_dir }}</p>*/
/*                         </div>*/
/* */
/* */
/*                     </div><!-- /.box-body -->*/
/* */
/*                     <div class="box-footer">*/
/*                         <div class="col-md-1">*/
/*                             <a href="/sucursales/edit/{{ sucursal.su_id }}" type="submit" class="btn btn-primary">Editar</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div><!-- /.box -->*/
/*         </div><!-- /col -->*/
/*     <div class="col-md-8">*/
/*         <!-- general form elements -->*/
/*         <div class="box box-success">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">Pedidos</h3>*/
/*                 <div class="box-body">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table no-margin">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Numero</th>*/
/*                                 <th>Fecha Solicitada</th>*/
/*                                 <th>Fecha Recepcion</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for pedido in pedidos %}*/
/*                                 <tr>*/
/*                                     <td><a href="pedido/{{ pedido.pe_num_orden }}">{{ pedido.pe_num_orden }}</a></td>*/
/*                                     <td>{{ pedido.pe_fecha_solic }}</td>*/
/*                                     <td>{{ pedido.pe_fecha_recep }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*             </div><!-- /.box-header -->*/
/*         </div><!-- /.box -->*/
/*     </div><!-- /col -->*/
/* </div><!-- /row -->*/
/* {% endblock %}*/
/* {% block scripts %}*/
/* */
/* {% endblock %}*/
