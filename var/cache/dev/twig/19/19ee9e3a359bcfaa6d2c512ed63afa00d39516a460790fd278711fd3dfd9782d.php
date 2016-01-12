<?php

/* directores/editDirector.html.twig */
class __TwigTemplate_5849dcbdddad91af03d778dee373331b54ce121a9dfc8cf1a9f03541b8851084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "directores/editDirector.html.twig", 1);
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
        $__internal_cf8d2cdec0748da5029c8b0ce0f5e8dc7e39fa4df2451fdab5f283e5be392bde = $this->env->getExtension("native_profiler");
        $__internal_cf8d2cdec0748da5029c8b0ce0f5e8dc7e39fa4df2451fdab5f283e5be392bde->enter($__internal_cf8d2cdec0748da5029c8b0ce0f5e8dc7e39fa4df2451fdab5f283e5be392bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "directores/editDirector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf8d2cdec0748da5029c8b0ce0f5e8dc7e39fa4df2451fdab5f283e5be392bde->leave($__internal_cf8d2cdec0748da5029c8b0ce0f5e8dc7e39fa4df2451fdab5f283e5be392bde_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_fd393f47087a489fc8226a293afb61900e7d70ce86e6b3ebbddb400587407662 = $this->env->getExtension("native_profiler");
        $__internal_fd393f47087a489fc8226a293afb61900e7d70ce86e6b3ebbddb400587407662->enter($__internal_fd393f47087a489fc8226a293afb61900e7d70ce86e6b3ebbddb400587407662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Editar Director";
        
        $__internal_fd393f47087a489fc8226a293afb61900e7d70ce86e6b3ebbddb400587407662->leave($__internal_fd393f47087a489fc8226a293afb61900e7d70ce86e6b3ebbddb400587407662_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_d825694ffb6dfdc2c812c5e027d17bf843e0284c9d3c3284f5fd8e77a63e452a = $this->env->getExtension("native_profiler");
        $__internal_d825694ffb6dfdc2c812c5e027d17bf843e0284c9d3c3284f5fd8e77a63e452a->enter($__internal_d825694ffb6dfdc2c812c5e027d17bf843e0284c9d3c3284f5fd8e77a63e452a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_cedula", array()), "html", null, true);
        
        $__internal_d825694ffb6dfdc2c812c5e027d17bf843e0284c9d3c3284f5fd8e77a63e452a->leave($__internal_d825694ffb6dfdc2c812c5e027d17bf843e0284c9d3c3284f5fd8e77a63e452a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_65092b27dffb07673743be15064dc3f2c8f87ae6ac78fd6a32607690f01ebf37 = $this->env->getExtension("native_profiler");
        $__internal_65092b27dffb07673743be15064dc3f2c8f87ae6ac78fd6a32607690f01ebf37->enter($__internal_65092b27dffb07673743be15064dc3f2c8f87ae6ac78fd6a32607690f01ebf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <h3 class=\"box-title\">Editar Director</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role=\"form\" id=\"editDirectorForm\">
                    <div class=\"box-body\">
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCedula\">Cedula:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCedula\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_cedula", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputNombre\">Nombre:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputNombre\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_nombre", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputSegundoNombre\">SegundoNombre:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputSegundoNombre\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_seg_nom", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputApellido\">Apellido:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputApellido\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_apellido", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputSegundoApellido\">SegundoApellido:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputSegundoApellido\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_seg_ape", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCorreo\">Correo:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCorreo\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_correo", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <!-- Date range -->
                        <div class=\"form-group col-md-6\">
                            <label>Fecha de Ingreso:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" class=\"form-control pull-right\" id=\"fechaIngreso\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_fecha_ing", array()), "html", null, true);
        echo "\">
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <!-- Date range -->
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputPaisNacimiento\">Pais de Nacimiento:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputPaisNacimiento\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_pais_nacim", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputPais\">Pais de Residencia:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputPais\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "pais", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCiudad\">Ciudad de Residencia:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCiudad\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "ciudad", array()), "html", null, true);
        echo "\">
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
        
        $__internal_65092b27dffb07673743be15064dc3f2c8f87ae6ac78fd6a32607690f01ebf37->leave($__internal_65092b27dffb07673743be15064dc3f2c8f87ae6ac78fd6a32607690f01ebf37_prof);

    }

    // line 95
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_a992828d5b7abd059928bcd4f5e81045762a547f5a66e82b89a2d5ea06069c03 = $this->env->getExtension("native_profiler");
        $__internal_a992828d5b7abd059928bcd4f5e81045762a547f5a66e82b89a2d5ea06069c03->enter($__internal_a992828d5b7abd059928bcd4f5e81045762a547f5a66e82b89a2d5ea06069c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 96
        echo "    <script>
        \$(function () {
            //Datemask dd/mm/yyyy
            \$(\"#fechaIngreso\").inputmask(\"dd/mm/yyyy\", {\"placeholder\": \"dd/mm/yyyy\"});
        });
        \$(document).ready(function () {
            \$(\"#editDirectorForm\").submit(function (event) {
                if(\$(\"#inputCedula\").val().length == 0 ||
                        \$(\"#inputApellido\").val().length == 0 ||
                        \$(\"#inputNombre\").val().length == 0 ||
                        \$(\"#inputCorreo\").val().length == 0 ||
                        \$(\"#inputPaisNacimiento\").val().length == 0 ||
                        \$(\"#fechaIngreso\").val().length == 0)
                {
                    \$(\"#alert\").show();
                    event.preventDefault();
                }
                else {
                    \$.ajax({
                        url: \"/directores/update?cedula=\" + \$('#inputCedula').val() + \"&\" +
                        \"nombre=\" + \$(\"#inputNombre\").val() + \"&\" +
                        \"apellido=\" + \$(\"#inputApellido\").val() + \"&\" +
                        \"correo=\" + \$(\"#inputCorreo\").val() + \"&\" +
                        \"pasinacimiento=\" + \$(\"#inputPaisNacimiento\").val() + \"&\" +
                        \"fechaingreso=\" + \$(\"#fechaIngreso\").val() + \"&\" +
                        \"segundonombre=\" + \$(\"#inputSegundoNombre\").val() + \"&\" +
                        \"segundoapellido=\" + \$(\"#inputSegundoApellido\").val() + \"&\" +
                        \"pais=\" + \$(\"#inputPais\").val() + \"&\" +
                        \"ciudad=\" + \$(\"#inputciudad\").val() + \"&\" +
                                \"cedulaOriginal=";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "di_cedula", array()), "html", null, true);
        echo "\"
                        ,
                        method: \"POST\",
                        dataType: 'json',
                        encode: true
                    })
                            .done(function (data) {
                                console.log(data);
                            });
                }

            });
        });

    </script>
";
        
        $__internal_a992828d5b7abd059928bcd4f5e81045762a547f5a66e82b89a2d5ea06069c03->leave($__internal_a992828d5b7abd059928bcd4f5e81045762a547f5a66e82b89a2d5ea06069c03_prof);

    }

    public function getTemplateName()
    {
        return "directores/editDirector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 125,  198 => 96,  192 => 95,  166 => 76,  158 => 71,  150 => 66,  140 => 59,  127 => 49,  119 => 44,  111 => 39,  103 => 34,  95 => 29,  87 => 24,  67 => 6,  61 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Editar Director{% endblock %}*/
/* {% block optionalDescription %}{{ director.di_cedula }}{% endblock %}*/
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
/*                     <h3 class="box-title">Editar Director</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form role="form" id="editDirectorForm">*/
/*                     <div class="box-body">*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCedula">Cedula:</label>*/
/*                             <input type="text" class="form-control" id="inputCedula" value="{{ director.di_cedula }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputNombre">Nombre:</label>*/
/*                             <input type="text" class="form-control" id="inputNombre" value="{{ director.di_nombre }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputSegundoNombre">SegundoNombre:</label>*/
/*                             <input type="text" class="form-control" id="inputSegundoNombre" value="{{ director.di_seg_nom }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputApellido">Apellido:</label>*/
/*                             <input type="text" class="form-control" id="inputApellido" value="{{ director.di_apellido }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputSegundoApellido">SegundoApellido:</label>*/
/*                             <input type="text" class="form-control" id="inputSegundoApellido" value="{{ director.di_seg_ape }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCorreo">Correo:</label>*/
/*                             <input type="text" class="form-control" id="inputCorreo" value="{{ director.di_correo }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <!-- Date range -->*/
/*                         <div class="form-group col-md-6">*/
/*                             <label>Fecha de Ingreso:</label>*/
/*                             <div class="input-group">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-calendar"></i>*/
/*                                 </div>*/
/*                                 <input type="text" class="form-control pull-right" id="fechaIngreso" value="{{ director.di_fecha_ing }}">*/
/*                             </div><!-- /.input group -->*/
/*                         </div><!-- /.form group -->*/
/*                         <!-- Date range -->*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputPaisNacimiento">Pais de Nacimiento:</label>*/
/*                             <input type="text" class="form-control" id="inputPaisNacimiento" value="{{ director.di_pais_nacim }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputPais">Pais de Residencia:</label>*/
/*                             <input type="text" class="form-control" id="inputPais" value="{{ director.pais }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCiudad">Ciudad de Residencia:</label>*/
/*                             <input type="text" class="form-control" id="inputCiudad" value="{{ director.ciudad }}">*/
/*                         </div>*/
/* */
/* */
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
/*             $("#fechaIngreso").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});*/
/*         });*/
/*         $(document).ready(function () {*/
/*             $("#editDirectorForm").submit(function (event) {*/
/*                 if($("#inputCedula").val().length == 0 ||*/
/*                         $("#inputApellido").val().length == 0 ||*/
/*                         $("#inputNombre").val().length == 0 ||*/
/*                         $("#inputCorreo").val().length == 0 ||*/
/*                         $("#inputPaisNacimiento").val().length == 0 ||*/
/*                         $("#fechaIngreso").val().length == 0)*/
/*                 {*/
/*                     $("#alert").show();*/
/*                     event.preventDefault();*/
/*                 }*/
/*                 else {*/
/*                     $.ajax({*/
/*                         url: "/directores/update?cedula=" + $('#inputCedula').val() + "&" +*/
/*                         "nombre=" + $("#inputNombre").val() + "&" +*/
/*                         "apellido=" + $("#inputApellido").val() + "&" +*/
/*                         "correo=" + $("#inputCorreo").val() + "&" +*/
/*                         "pasinacimiento=" + $("#inputPaisNacimiento").val() + "&" +*/
/*                         "fechaingreso=" + $("#fechaIngreso").val() + "&" +*/
/*                         "segundonombre=" + $("#inputSegundoNombre").val() + "&" +*/
/*                         "segundoapellido=" + $("#inputSegundoApellido").val() + "&" +*/
/*                         "pais=" + $("#inputPais").val() + "&" +*/
/*                         "ciudad=" + $("#inputciudad").val() + "&" +*/
/*                                 "cedulaOriginal={{ director.di_cedula }}"*/
/*                         ,*/
/*                         method: "POST",*/
/*                         dataType: 'json',*/
/*                         encode: true*/
/*                     })*/
/*                             .done(function (data) {*/
/*                                 console.log(data);*/
/*                             });*/
/*                 }*/
/* */
/*             });*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
