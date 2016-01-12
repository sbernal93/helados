<?php

/* sucursales/newSucursal.html.twig */
class __TwigTemplate_8f9fe982136933f7c58ad7b6ad1336b1bb6d27d0f4e02092bfa26a83f6d8816a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "sucursales/newSucursal.html.twig", 1);
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
        $__internal_0b3a20013e3a50b3ec178546b182f0b4b690b4fd29f396f05ccd0cba62b3c782 = $this->env->getExtension("native_profiler");
        $__internal_0b3a20013e3a50b3ec178546b182f0b4b690b4fd29f396f05ccd0cba62b3c782->enter($__internal_0b3a20013e3a50b3ec178546b182f0b4b690b4fd29f396f05ccd0cba62b3c782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sucursales/newSucursal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b3a20013e3a50b3ec178546b182f0b4b690b4fd29f396f05ccd0cba62b3c782->leave($__internal_0b3a20013e3a50b3ec178546b182f0b4b690b4fd29f396f05ccd0cba62b3c782_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_d29e2ccbfbaad9731c7ed945d4cc3c9b8845d2aacff4d672ce100b33c796a9a4 = $this->env->getExtension("native_profiler");
        $__internal_d29e2ccbfbaad9731c7ed945d4cc3c9b8845d2aacff4d672ce100b33c796a9a4->enter($__internal_d29e2ccbfbaad9731c7ed945d4cc3c9b8845d2aacff4d672ce100b33c796a9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Crear Sucursal";
        
        $__internal_d29e2ccbfbaad9731c7ed945d4cc3c9b8845d2aacff4d672ce100b33c796a9a4->leave($__internal_d29e2ccbfbaad9731c7ed945d4cc3c9b8845d2aacff4d672ce100b33c796a9a4_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_c41217ddcae6a1afd1bc185987d6e3b7f39d85732c2485357d3ddb86f3b7a0f7 = $this->env->getExtension("native_profiler");
        $__internal_c41217ddcae6a1afd1bc185987d6e3b7f39d85732c2485357d3ddb86f3b7a0f7->enter($__internal_c41217ddcae6a1afd1bc185987d6e3b7f39d85732c2485357d3ddb86f3b7a0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_c41217ddcae6a1afd1bc185987d6e3b7f39d85732c2485357d3ddb86f3b7a0f7->leave($__internal_c41217ddcae6a1afd1bc185987d6e3b7f39d85732c2485357d3ddb86f3b7a0f7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_1477598777f2727ffa6f4120b2a8e88bdeec215edc5364600e5c601f6c5a16a6 = $this->env->getExtension("native_profiler");
        $__internal_1477598777f2727ffa6f4120b2a8e88bdeec215edc5364600e5c601f6c5a16a6->enter($__internal_1477598777f2727ffa6f4120b2a8e88bdeec215edc5364600e5c601f6c5a16a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <h3 class=\"box-title\">Crear Sucursal</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role=\"form\" id=\"newSucursalForm\">
                    <div class=\"box-body\">

                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputName\">Nombre</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputName\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <!-- Date range -->
                        <div class=\"form-group col-md-6\">
                            <label>Fecha de Apertura:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" class=\"form-control pull-right\" id=\"fechaOriginal\" >
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <!-- Date range -->
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputPais\">Pais:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputPais\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCiudad\">Ciudad:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCiudad\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCodigoPostal\">Codigo Postal:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCodigoPostal\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputUrbanizacion\">Urbanizacion:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputUrbanizacion\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCalle\">Calle:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCalle\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputEdificio\">Edificio:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputEdificio\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputReferencia\">Referencia:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputReferencia\" >
                        </div>


                    </div><!-- /.box-body -->

                    <div class=\"box-footer\">
                        <div class=\"col-md-1\">
                            <button type=\"submit\" class=\"btn btn-primary\" id=\"submitBtn\">Submit</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.box -->
        </div><!-- /col -->
    </div><!-- /row -->

";
        
        $__internal_1477598777f2727ffa6f4120b2a8e88bdeec215edc5364600e5c601f6c5a16a6->leave($__internal_1477598777f2727ffa6f4120b2a8e88bdeec215edc5364600e5c601f6c5a16a6_prof);

    }

    // line 90
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4e5492d772aeb70d1ef4a2c7f5e25f7104cb2a780f346da736304ffc47223bf8 = $this->env->getExtension("native_profiler");
        $__internal_4e5492d772aeb70d1ef4a2c7f5e25f7104cb2a780f346da736304ffc47223bf8->enter($__internal_4e5492d772aeb70d1ef4a2c7f5e25f7104cb2a780f346da736304ffc47223bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 91
        echo "    <script>
        \$(function () {
            //Datemask dd/mm/yyyy
            \$(\"#fechaOriginal\").inputmask(\"dd/mm/yyyy\", {\"placeholder\": \"dd/mm/yyyy\"});
        });
        \$(document).ready(function () {
            \$(\"#newSucursalForm\").submit(function (event) {
                if(\$(\"#inputName\").val().length == 0 ||
                \$(\"#inputCodigoPostal\").val().length == 0 ||
                \$(\"#fechaOriginal\").val().length == 0)
                {
                    \$(\"#alert\").show();
                }
                else {
                    var city = \$(\"#inputCiudad\").val().toLowerCase();
                    var pais = \$(\"#inputPais\").val().toLowerCase();
                    \$.ajax({
                        url: \"/sucursales/new?name=\" + \$('#inputName').val() + \"&\" +
                        \"fecha=\" + \$(\"#fechaOriginal\").val() + \"&\" +
                        \"pais=\" + pais + \"&\" +
                        \"ciudad=\" + city + \"&\" +
                        \"codigoPostal=\" + \$(\"#inputCodigoPostal\").val() + \"&\" +
                        \"urbanizacion=\" + \$(\"#inputUrbanizacion\").val() + \"&\" +
                        \"calle=\" + \$(\"#inputCalle\").val() + \"&\" +
                        \"edificio=\" + \$(\"#inputEdificio\").val() + \"&\" +
                        \"referencia=\" + \$(\"#inputReferencia\").val()
                        ,
                        method: \"POST\",
                        dataType: 'json',
                        encode: true
                    })
                            .done(function (data) {
                                console.log(data);
                                window.location = \"/sucursales\";
                            });
                }

                });
        });

    </script>
";
        
        $__internal_4e5492d772aeb70d1ef4a2c7f5e25f7104cb2a780f346da736304ffc47223bf8->leave($__internal_4e5492d772aeb70d1ef4a2c7f5e25f7104cb2a780f346da736304ffc47223bf8_prof);

    }

    public function getTemplateName()
    {
        return "sucursales/newSucursal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 91,  156 => 90,  66 => 6,  60 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Crear Sucursal{% endblock %}*/
/* {% block optionalDescription %}{% endblock %}*/
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
/*                     <h3 class="box-title">Crear Sucursal</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form role="form" id="newSucursalForm">*/
/*                     <div class="box-body">*/
/* */
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputName">Nombre</label>*/
/*                             <input type="text" class="form-control" id="inputName" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <!-- Date range -->*/
/*                         <div class="form-group col-md-6">*/
/*                             <label>Fecha de Apertura:</label>*/
/*                             <div class="input-group">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-calendar"></i>*/
/*                                 </div>*/
/*                                 <input type="text" class="form-control pull-right" id="fechaOriginal" >*/
/*                             </div><!-- /.input group -->*/
/*                         </div><!-- /.form group -->*/
/*                         <!-- Date range -->*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputPais">Pais:</label>*/
/*                             <input type="text" class="form-control" id="inputPais" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCiudad">Ciudad:</label>*/
/*                             <input type="text" class="form-control" id="inputCiudad" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCodigoPostal">Codigo Postal:</label>*/
/*                             <input type="text" class="form-control" id="inputCodigoPostal" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputUrbanizacion">Urbanizacion:</label>*/
/*                             <input type="text" class="form-control" id="inputUrbanizacion" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCalle">Calle:</label>*/
/*                             <input type="text" class="form-control" id="inputCalle" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputEdificio">Edificio:</label>*/
/*                             <input type="text" class="form-control" id="inputEdificio" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputReferencia">Referencia:</label>*/
/*                             <input type="text" class="form-control" id="inputReferencia" >*/
/*                         </div>*/
/* */
/* */
/*                     </div><!-- /.box-body -->*/
/* */
/*                     <div class="box-footer">*/
/*                         <div class="col-md-1">*/
/*                             <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>*/
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
/*             $("#fechaOriginal").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});*/
/*         });*/
/*         $(document).ready(function () {*/
/*             $("#newSucursalForm").submit(function (event) {*/
/*                 if($("#inputName").val().length == 0 ||*/
/*                 $("#inputCodigoPostal").val().length == 0 ||*/
/*                 $("#fechaOriginal").val().length == 0)*/
/*                 {*/
/*                     $("#alert").show();*/
/*                 }*/
/*                 else {*/
/*                     var city = $("#inputCiudad").val().toLowerCase();*/
/*                     var pais = $("#inputPais").val().toLowerCase();*/
/*                     $.ajax({*/
/*                         url: "/sucursales/new?name=" + $('#inputName').val() + "&" +*/
/*                         "fecha=" + $("#fechaOriginal").val() + "&" +*/
/*                         "pais=" + pais + "&" +*/
/*                         "ciudad=" + city + "&" +*/
/*                         "codigoPostal=" + $("#inputCodigoPostal").val() + "&" +*/
/*                         "urbanizacion=" + $("#inputUrbanizacion").val() + "&" +*/
/*                         "calle=" + $("#inputCalle").val() + "&" +*/
/*                         "edificio=" + $("#inputEdificio").val() + "&" +*/
/*                         "referencia=" + $("#inputReferencia").val()*/
/*                         ,*/
/*                         method: "POST",*/
/*                         dataType: 'json',*/
/*                         encode: true*/
/*                     })*/
/*                             .done(function (data) {*/
/*                                 console.log(data);*/
/*                                 window.location = "/sucursales";*/
/*                             });*/
/*                 }*/
/* */
/*                 });*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
