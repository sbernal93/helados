<?php

/* directores/newDirector.html.twig */
class __TwigTemplate_a10e54145fb0b0b70540ab99e739c020eb1c107dcd74097b226bd2c574943861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "directores/newDirector.html.twig", 1);
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
        $__internal_b9618a73095502d50b30a4e357dbb8227ed40e9f2a5468781e183ee74d947973 = $this->env->getExtension("native_profiler");
        $__internal_b9618a73095502d50b30a4e357dbb8227ed40e9f2a5468781e183ee74d947973->enter($__internal_b9618a73095502d50b30a4e357dbb8227ed40e9f2a5468781e183ee74d947973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "directores/newDirector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9618a73095502d50b30a4e357dbb8227ed40e9f2a5468781e183ee74d947973->leave($__internal_b9618a73095502d50b30a4e357dbb8227ed40e9f2a5468781e183ee74d947973_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_c416d7fb1473988f8643a0871900905fd70fda57b9e45589f5b7d3404192e7e8 = $this->env->getExtension("native_profiler");
        $__internal_c416d7fb1473988f8643a0871900905fd70fda57b9e45589f5b7d3404192e7e8->enter($__internal_c416d7fb1473988f8643a0871900905fd70fda57b9e45589f5b7d3404192e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Crear Director";
        
        $__internal_c416d7fb1473988f8643a0871900905fd70fda57b9e45589f5b7d3404192e7e8->leave($__internal_c416d7fb1473988f8643a0871900905fd70fda57b9e45589f5b7d3404192e7e8_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_3d165b1f9e1bdcbfe78936e514b7aafae9ca2f5ca9a72ad0e141a9677af27b81 = $this->env->getExtension("native_profiler");
        $__internal_3d165b1f9e1bdcbfe78936e514b7aafae9ca2f5ca9a72ad0e141a9677af27b81->enter($__internal_3d165b1f9e1bdcbfe78936e514b7aafae9ca2f5ca9a72ad0e141a9677af27b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_3d165b1f9e1bdcbfe78936e514b7aafae9ca2f5ca9a72ad0e141a9677af27b81->leave($__internal_3d165b1f9e1bdcbfe78936e514b7aafae9ca2f5ca9a72ad0e141a9677af27b81_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8dcb8005e3503e724ec7f33b3ca81e89d6c200f875196229383e65917f036887 = $this->env->getExtension("native_profiler");
        $__internal_8dcb8005e3503e724ec7f33b3ca81e89d6c200f875196229383e65917f036887->enter($__internal_8dcb8005e3503e724ec7f33b3ca81e89d6c200f875196229383e65917f036887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <h3 class=\"box-title\">Crear Director</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role=\"form\" id=\"newDirectorForm\">
                    <div class=\"box-body\">
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCedula\">Cedula:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCedula\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputNombre\">Nombre:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputNombre\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputSegundoNombre\">SegundoNombre:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputSegundoNombre\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputApellido\">Apellido:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputApellido\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputSegundoApellido\">SegundoApellido:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputSegundoApellido\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCorreo\">Correo:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCorreo\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <!-- Date range -->
                        <div class=\"form-group col-md-6\">
                            <label>Fecha de Ingreso:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" class=\"form-control pull-right\" id=\"fechaIngreso\" >
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <!-- Date range -->
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputPaisNacimiento\">Pais de Nacimiento:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputPaisNacimiento\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputPais\">Pais de Residencia:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputPais\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCiudad\">Ciudad de Residencia:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCiudad\" >
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
        
        $__internal_8dcb8005e3503e724ec7f33b3ca81e89d6c200f875196229383e65917f036887->leave($__internal_8dcb8005e3503e724ec7f33b3ca81e89d6c200f875196229383e65917f036887_prof);

    }

    // line 95
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_986fa85157ce8106f46891a8c95fc2bb01ebc4d810acca58b9d48136d7666961 = $this->env->getExtension("native_profiler");
        $__internal_986fa85157ce8106f46891a8c95fc2bb01ebc4d810acca58b9d48136d7666961->enter($__internal_986fa85157ce8106f46891a8c95fc2bb01ebc4d810acca58b9d48136d7666961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 96
        echo "    <script>
        \$(function () {
            //Datemask dd/mm/yyyy
            \$(\"#fechaIngreso\").inputmask(\"dd/mm/yyyy\", {\"placeholder\": \"dd/mm/yyyy\"});
        });
        \$(document).ready(function () {
            \$(\"#newDirectorForm\").submit(function (event) {
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
                        url: \"/directores/new?cedula=\" + \$('#inputCedula').val() + \"&\" +
                        \"nombre=\" + \$(\"#inputNombre\").val() + \"&\" +
                        \"apellido=\" + \$(\"#inputApellido\").val() + \"&\" +
                        \"correo=\" + \$(\"#inputCorreo\").val() + \"&\" +
                        \"pasinacimiento=\" + \$(\"#inputPaisNacimiento\").val() + \"&\" +
                        \"fechaingreso=\" + \$(\"#fechaIngreso\").val() + \"&\" +
                        \"segundonombre=\" + \$(\"#inputSegundoNombre\").val() + \"&\" +
                        \"segundoapellido=\" + \$(\"#inputSegundoApellido\").val() + \"&\" +
                        \"pais=\" + \$(\"#inputPais\").val() + \"&\" +
                        \"ciudad=\" + \$(\"#inputCiudad\").val()
                        ,
                        method: \"POST\",
                        dataType: 'json',
                        encode: true
                    })
                            .done(function (data) {
                                console.log(data);
                                window.location = \"/directores\";
                            });

                }

            });
        });

    </script>
";
        
        $__internal_986fa85157ce8106f46891a8c95fc2bb01ebc4d810acca58b9d48136d7666961->leave($__internal_986fa85157ce8106f46891a8c95fc2bb01ebc4d810acca58b9d48136d7666961_prof);

    }

    public function getTemplateName()
    {
        return "directores/newDirector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 96,  161 => 95,  66 => 6,  60 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Crear Director{% endblock %}*/
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
/*                     <h3 class="box-title">Crear Director</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form role="form" id="newDirectorForm">*/
/*                     <div class="box-body">*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCedula">Cedula:</label>*/
/*                             <input type="text" class="form-control" id="inputCedula" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputNombre">Nombre:</label>*/
/*                             <input type="text" class="form-control" id="inputNombre" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputSegundoNombre">SegundoNombre:</label>*/
/*                             <input type="text" class="form-control" id="inputSegundoNombre" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputApellido">Apellido:</label>*/
/*                             <input type="text" class="form-control" id="inputApellido" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputSegundoApellido">SegundoApellido:</label>*/
/*                             <input type="text" class="form-control" id="inputSegundoApellido" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCorreo">Correo:</label>*/
/*                             <input type="text" class="form-control" id="inputCorreo" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <!-- Date range -->*/
/*                         <div class="form-group col-md-6">*/
/*                             <label>Fecha de Ingreso:</label>*/
/*                             <div class="input-group">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-calendar"></i>*/
/*                                 </div>*/
/*                                 <input type="text" class="form-control pull-right" id="fechaIngreso" >*/
/*                             </div><!-- /.input group -->*/
/*                         </div><!-- /.form group -->*/
/*                         <!-- Date range -->*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputPaisNacimiento">Pais de Nacimiento:</label>*/
/*                             <input type="text" class="form-control" id="inputPaisNacimiento" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputPais">Pais de Residencia:</label>*/
/*                             <input type="text" class="form-control" id="inputPais" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCiudad">Ciudad de Residencia:</label>*/
/*                             <input type="text" class="form-control" id="inputCiudad" >*/
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
/*             $("#newDirectorForm").submit(function (event) {*/
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
/*                         url: "/directores/new?cedula=" + $('#inputCedula').val() + "&" +*/
/*                         "nombre=" + $("#inputNombre").val() + "&" +*/
/*                         "apellido=" + $("#inputApellido").val() + "&" +*/
/*                         "correo=" + $("#inputCorreo").val() + "&" +*/
/*                         "pasinacimiento=" + $("#inputPaisNacimiento").val() + "&" +*/
/*                         "fechaingreso=" + $("#fechaIngreso").val() + "&" +*/
/*                         "segundonombre=" + $("#inputSegundoNombre").val() + "&" +*/
/*                         "segundoapellido=" + $("#inputSegundoApellido").val() + "&" +*/
/*                         "pais=" + $("#inputPais").val() + "&" +*/
/*                         "ciudad=" + $("#inputCiudad").val()*/
/*                         ,*/
/*                         method: "POST",*/
/*                         dataType: 'json',*/
/*                         encode: true*/
/*                     })*/
/*                             .done(function (data) {*/
/*                                 console.log(data);*/
/*                                 window.location = "/directores";*/
/*                             });*/
/* */
/*                 }*/
/* */
/*             });*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
