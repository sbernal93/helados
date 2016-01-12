<?php

/* sucursales/editSucursal.html.twig */
class __TwigTemplate_dd2b00f63ce53619a41ae1d5d2072db6e3425a3eb08baa95d4130eb2d6c61605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "sucursales/editSucursal.html.twig", 1);
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
        $__internal_94434869f9e3f9b97834be9a4e5506a7710813f04e061a5a5c68f348e9ac1a29 = $this->env->getExtension("native_profiler");
        $__internal_94434869f9e3f9b97834be9a4e5506a7710813f04e061a5a5c68f348e9ac1a29->enter($__internal_94434869f9e3f9b97834be9a4e5506a7710813f04e061a5a5c68f348e9ac1a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sucursales/editSucursal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94434869f9e3f9b97834be9a4e5506a7710813f04e061a5a5c68f348e9ac1a29->leave($__internal_94434869f9e3f9b97834be9a4e5506a7710813f04e061a5a5c68f348e9ac1a29_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_b7af5209268aceb384cbd5ed0591247214317c705dd9aa5ccf39c6289c233167 = $this->env->getExtension("native_profiler");
        $__internal_b7af5209268aceb384cbd5ed0591247214317c705dd9aa5ccf39c6289c233167->enter($__internal_b7af5209268aceb384cbd5ed0591247214317c705dd9aa5ccf39c6289c233167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Sucursal ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_id", array()), "html", null, true);
        echo " ";
        
        $__internal_b7af5209268aceb384cbd5ed0591247214317c705dd9aa5ccf39c6289c233167->leave($__internal_b7af5209268aceb384cbd5ed0591247214317c705dd9aa5ccf39c6289c233167_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_45f96122f6f8320291b0c2d11f6cf31ad0fc84d9297b3cd2714824637accc476 = $this->env->getExtension("native_profiler");
        $__internal_45f96122f6f8320291b0c2d11f6cf31ad0fc84d9297b3cd2714824637accc476->enter($__internal_45f96122f6f8320291b0c2d11f6cf31ad0fc84d9297b3cd2714824637accc476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_nombre", array()), "html", null, true);
        
        $__internal_45f96122f6f8320291b0c2d11f6cf31ad0fc84d9297b3cd2714824637accc476->leave($__internal_45f96122f6f8320291b0c2d11f6cf31ad0fc84d9297b3cd2714824637accc476_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a077fa72812b1703ba83dc4bab6bd5d6a07ea9e3451723dc63460c88689678d5 = $this->env->getExtension("native_profiler");
        $__internal_a077fa72812b1703ba83dc4bab6bd5d6a07ea9e3451723dc63460c88689678d5->enter($__internal_a077fa72812b1703ba83dc4bab6bd5d6a07ea9e3451723dc63460c88689678d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"alert alert-danger alert-dismissable\" id=\"alert\" hidden>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        <h4>Uno de los campos obligatorios se encuentra vacio, revise la informacion e intente de nuevo
            <i class=\"icon fa fa-ban\"></i></h4>

    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- general form elements -->
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Editar Sucursal</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role=\"form\" id=\"editForm\">
                    <div class=\"box-body\">
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputId\">ID</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputID\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_id", array()), "html", null, true);
        echo "\" disabled>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputName\">Nombre</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputName\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_nombre", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputTlf\">Telfono</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputTlf\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "te_numero", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <!-- Date range -->
                        <div class=\"form-group col-md-6\">
                            <label>Fecha de Apertura:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" class=\"form-control pull-right\" id=\"fechaOriginal\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_fecha_apert", array()), "html", null, true);
        echo "\" disabled>
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                            <!-- Date range -->
                        <div class=\"form-group col-md-6\">
                            <label>Cambiar Fecha de Apertura:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" class=\"form-control pull-right\" id=\"fechaApertura\">
                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputPais\">Pais:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputPais\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "pais", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCiudad\">Ciudad:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCiudad\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "ciudad", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCodigoPostal\">Codigo Postal:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCodigoPostal\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_cod_post", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputUrbanizacion\">Urbanizacion:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputUrbanizacion\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_urbanizacion", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCalle\">Calle:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCalle\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_calle", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputEdificio\">Edificio:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputEdificio\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_edificio", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputReferencia\">Referencia:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputReferencia\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sucursal"]) ? $context["sucursal"] : $this->getContext($context, "sucursal")), "su_ref_dir", array()), "html", null, true);
        echo "\">
                        </div>


                    </div><!-- /.box-body -->

                    <div class=\"box-footer\">
                        <div class=\"col-md-1\">
                        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.box -->
        </div><!-- /col -->
    </div><!-- /row -->

";
        
        $__internal_a077fa72812b1703ba83dc4bab6bd5d6a07ea9e3451723dc63460c88689678d5->leave($__internal_a077fa72812b1703ba83dc4bab6bd5d6a07ea9e3451723dc63460c88689678d5_prof);

    }

    // line 106
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_df4b2a72a92874803b1bdacf2076024af500e82be45dc74de60016c00d1f9cfa = $this->env->getExtension("native_profiler");
        $__internal_df4b2a72a92874803b1bdacf2076024af500e82be45dc74de60016c00d1f9cfa->enter($__internal_df4b2a72a92874803b1bdacf2076024af500e82be45dc74de60016c00d1f9cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 107
        echo "    <script>
        \$(function () {
            //Datemask dd/mm/yyyy
            \$(\"#fechaApertura\").inputmask(\"dd/mm/yyyy\", {\"placeholder\": \"dd/mm/yyyy\"});
        });
    </script>
    <script>

        \$(document).ready(function () {
            \$(\"#editForm\").submit(function (event) {
                if(\$(\"#inputName\").val().length == 0 ||
                        \$(\"#inputCodigoPostal\").val().length == 0 ||
                        \$(\"#fechaOriginal\").val().length == 0)
                {
                    \$(\"#alert\").show();
                }
                else {

                    var fecha = null;
                    if(\$(\"#fechaApertura\").val().length == 0)
                    {
                       fecha = \$(\"#fechaOriginal\").val();

                    }
                    else
                    {
                        fecha = \$(\"#fechaApertura\").val();
                    }
                    var city = \$(\"#inputCiudad\").val().toLowerCase();
                    var pais = \$(\"#inputPais\").val().toLowerCase();
                    \$.ajax({
                        url: \"/sucursales/update?name=\" + \$('#inputName').val() + \"&\" +
                        \"fecha=\" + fecha + \"&\" +
                        \"pais=\" + pais + \"&\" +
                        \"ciudad=\" + city + \"&\" +
                        \"codigoPostal=\" + \$(\"#inputCodigoPostal\").val() + \"&\" +
                        \"urbanizacion=\" + \$(\"#inputUrbanizacion\").val() + \"&\" +
                        \"calle=\" + \$(\"#inputCalle\").val() + \"&\" +
                        \"edificio=\" + \$(\"#inputEdificio\").val() + \"&\" +
                        \"referencia=\" + \$(\"#inputReferencia\").val() + \"&\" +
                                \"id=\" + \$(\"#inputID\").val()
                        ,
                        method: \"POST\",
                        dataType: 'json',
                        encode: true
                    })
                            .done(function (data) {
                                console.log(data);
                                window.location = \"/sucursales/\" +\$(\"#inputID\").val();
                            });
                }

            });
        });

    </script>
";
        
        $__internal_df4b2a72a92874803b1bdacf2076024af500e82be45dc74de60016c00d1f9cfa->leave($__internal_df4b2a72a92874803b1bdacf2076024af500e82be45dc74de60016c00d1f9cfa_prof);

    }

    public function getTemplateName()
    {
        return "sucursales/editSucursal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 107,  208 => 106,  184 => 89,  176 => 84,  168 => 79,  160 => 74,  152 => 69,  144 => 64,  136 => 59,  118 => 44,  105 => 34,  97 => 29,  89 => 24,  69 => 6,  63 => 5,  51 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Sucursal {{ sucursal.su_id }} {% endblock %}*/
/* {% block optionalDescription %}{{ sucursal.su_nombre }}{% endblock %}*/
/* {% block content %}*/
/*     <div class="alert alert-danger alert-dismissable" id="alert" hidden>*/
/*         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*         <h4>Uno de los campos obligatorios se encuentra vacio, revise la informacion e intente de nuevo*/
/*             <i class="icon fa fa-ban"></i></h4>*/
/* */
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <!-- general form elements -->*/
/*             <div class="box box-primary">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Editar Sucursal</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form role="form" id="editForm">*/
/*                     <div class="box-body">*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputId">ID</label>*/
/*                             <input type="text" class="form-control" id="inputID" value="{{ sucursal.su_id }}" disabled>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputName">Nombre</label>*/
/*                             <input type="text" class="form-control" id="inputName" value="{{ sucursal.su_nombre }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputTlf">Telfono</label>*/
/*                             <input type="text" class="form-control" id="inputTlf" value="{{ sucursal.te_numero }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <!-- Date range -->*/
/*                         <div class="form-group col-md-6">*/
/*                             <label>Fecha de Apertura:</label>*/
/*                             <div class="input-group">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-calendar"></i>*/
/*                                 </div>*/
/*                                 <input type="text" class="form-control pull-right" id="fechaOriginal" value="{{ sucursal.su_fecha_apert }}" disabled>*/
/*                             </div><!-- /.input group -->*/
/*                         </div><!-- /.form group -->*/
/*                             <!-- Date range -->*/
/*                         <div class="form-group col-md-6">*/
/*                             <label>Cambiar Fecha de Apertura:</label>*/
/*                             <div class="input-group">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-calendar"></i>*/
/*                                 </div>*/
/*                                 <input type="text" class="form-control pull-right" id="fechaApertura">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputPais">Pais:</label>*/
/*                             <input type="text" class="form-control" id="inputPais" value="{{ sucursal.pais }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCiudad">Ciudad:</label>*/
/*                             <input type="text" class="form-control" id="inputCiudad" value="{{ sucursal.ciudad }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCodigoPostal">Codigo Postal:</label>*/
/*                             <input type="text" class="form-control" id="inputCodigoPostal" value="{{ sucursal.su_cod_post }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputUrbanizacion">Urbanizacion:</label>*/
/*                             <input type="text" class="form-control" id="inputUrbanizacion" value="{{ sucursal.su_urbanizacion }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCalle">Calle:</label>*/
/*                             <input type="text" class="form-control" id="inputCalle" value="{{ sucursal.su_calle }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputEdificio">Edificio:</label>*/
/*                             <input type="text" class="form-control" id="inputEdificio" value="{{ sucursal.su_edificio }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputReferencia">Referencia:</label>*/
/*                             <input type="text" class="form-control" id="inputReferencia" value="{{ sucursal.su_ref_dir }}">*/
/*                         </div>*/
/* */
/* */
/*                     </div><!-- /.box-body -->*/
/* */
/*                     <div class="box-footer">*/
/*                         <div class="col-md-1">*/
/*                         <button type="submit" class="btn btn-primary">Submit</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div><!-- /.box -->*/
/*         </div><!-- /col -->*/
/*     </div><!-- /row -->*/
/* */
/* {% endblock %}*/
/* {% block scripts %}*/
/*     <script>*/
/*         $(function () {*/
/*             //Datemask dd/mm/yyyy*/
/*             $("#fechaApertura").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});*/
/*         });*/
/*     </script>*/
/*     <script>*/
/* */
/*         $(document).ready(function () {*/
/*             $("#editForm").submit(function (event) {*/
/*                 if($("#inputName").val().length == 0 ||*/
/*                         $("#inputCodigoPostal").val().length == 0 ||*/
/*                         $("#fechaOriginal").val().length == 0)*/
/*                 {*/
/*                     $("#alert").show();*/
/*                 }*/
/*                 else {*/
/* */
/*                     var fecha = null;*/
/*                     if($("#fechaApertura").val().length == 0)*/
/*                     {*/
/*                        fecha = $("#fechaOriginal").val();*/
/* */
/*                     }*/
/*                     else*/
/*                     {*/
/*                         fecha = $("#fechaApertura").val();*/
/*                     }*/
/*                     var city = $("#inputCiudad").val().toLowerCase();*/
/*                     var pais = $("#inputPais").val().toLowerCase();*/
/*                     $.ajax({*/
/*                         url: "/sucursales/update?name=" + $('#inputName').val() + "&" +*/
/*                         "fecha=" + fecha + "&" +*/
/*                         "pais=" + pais + "&" +*/
/*                         "ciudad=" + city + "&" +*/
/*                         "codigoPostal=" + $("#inputCodigoPostal").val() + "&" +*/
/*                         "urbanizacion=" + $("#inputUrbanizacion").val() + "&" +*/
/*                         "calle=" + $("#inputCalle").val() + "&" +*/
/*                         "edificio=" + $("#inputEdificio").val() + "&" +*/
/*                         "referencia=" + $("#inputReferencia").val() + "&" +*/
/*                                 "id=" + $("#inputID").val()*/
/*                         ,*/
/*                         method: "POST",*/
/*                         dataType: 'json',*/
/*                         encode: true*/
/*                     })*/
/*                             .done(function (data) {*/
/*                                 console.log(data);*/
/*                                 window.location = "/sucursales/" +$("#inputID").val();*/
/*                             });*/
/*                 }*/
/* */
/*             });*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
