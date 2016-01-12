<?php

/* helados/newPromocion.html.twig */
class __TwigTemplate_8b5981bd2660d20fbdad6478f305aed9efc370c6cb549c6f46d51338614d8b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "helados/newPromocion.html.twig", 1);
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
        $__internal_141a511f248a8ec262bd5b508519ffc26bbf23166c2ecf46b2bc601de61ed0b9 = $this->env->getExtension("native_profiler");
        $__internal_141a511f248a8ec262bd5b508519ffc26bbf23166c2ecf46b2bc601de61ed0b9->enter($__internal_141a511f248a8ec262bd5b508519ffc26bbf23166c2ecf46b2bc601de61ed0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helados/newPromocion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141a511f248a8ec262bd5b508519ffc26bbf23166c2ecf46b2bc601de61ed0b9->leave($__internal_141a511f248a8ec262bd5b508519ffc26bbf23166c2ecf46b2bc601de61ed0b9_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_35207ec6d09af3b0efd4b0eb1faed6946d0c01066d3d171773b9aa6ad91e9b1c = $this->env->getExtension("native_profiler");
        $__internal_35207ec6d09af3b0efd4b0eb1faed6946d0c01066d3d171773b9aa6ad91e9b1c->enter($__internal_35207ec6d09af3b0efd4b0eb1faed6946d0c01066d3d171773b9aa6ad91e9b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Crear Promocion";
        
        $__internal_35207ec6d09af3b0efd4b0eb1faed6946d0c01066d3d171773b9aa6ad91e9b1c->leave($__internal_35207ec6d09af3b0efd4b0eb1faed6946d0c01066d3d171773b9aa6ad91e9b1c_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_cf06ad63f05e08750a90259e4efaa050e0c23e114d2804fdc551e04d7ebc1921 = $this->env->getExtension("native_profiler");
        $__internal_cf06ad63f05e08750a90259e4efaa050e0c23e114d2804fdc551e04d7ebc1921->enter($__internal_cf06ad63f05e08750a90259e4efaa050e0c23e114d2804fdc551e04d7ebc1921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_cf06ad63f05e08750a90259e4efaa050e0c23e114d2804fdc551e04d7ebc1921->leave($__internal_cf06ad63f05e08750a90259e4efaa050e0c23e114d2804fdc551e04d7ebc1921_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c38eaa0e165a49f0b6beb0e34094e551079a3f5c895efcc28907a0d2261f07ca = $this->env->getExtension("native_profiler");
        $__internal_c38eaa0e165a49f0b6beb0e34094e551079a3f5c895efcc28907a0d2261f07ca->enter($__internal_c38eaa0e165a49f0b6beb0e34094e551079a3f5c895efcc28907a0d2261f07ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <h3 class=\"box-title\">Crear Promocion</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role=\"form\" id=\"newPromocionForm\">
                    <div class=\"box-body\">

                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputDescripcion\">Descripcion</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputDescripcion\" >
                        </div>
                        <div class=\"col-md-12\"></div>

                        <div class=\"form-group col-md-6\">
                            <label for=\"inputPorcDesc\">Porcentaje de Descuento:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputPorcDesc\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <!-- Date range -->
                        <div class=\"form-group col-md-6\">
                            <label>Fecha de Inicio:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" class=\"form-control pull-right\" id=\"fechaInic\" >
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <!-- Date range -->
                        <div class=\"col-md-12\"></div>
                        <!-- Date range -->
                        <div class=\"form-group col-md-6\">
                            <label>Fecha Fin:</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" class=\"form-control pull-right\" id=\"fechaFin\" >
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <!-- Date range -->


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
        
        $__internal_c38eaa0e165a49f0b6beb0e34094e551079a3f5c895efcc28907a0d2261f07ca->leave($__internal_c38eaa0e165a49f0b6beb0e34094e551079a3f5c895efcc28907a0d2261f07ca_prof);

    }

    // line 73
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_75919b0704eaa874dc98057f582c95511de8f9d49f633391d6b8dc9b62a69e35 = $this->env->getExtension("native_profiler");
        $__internal_75919b0704eaa874dc98057f582c95511de8f9d49f633391d6b8dc9b62a69e35->enter($__internal_75919b0704eaa874dc98057f582c95511de8f9d49f633391d6b8dc9b62a69e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 74
        echo "    <script>
        \$(function () {
            //Datemask dd/mm/yyyy
            \$(\"#fechaInic\").inputmask(\"dd/mm/yyyy\", {\"placeholder\": \"dd/mm/yyyy\"});
            \$(\"#fechaFin\").inputmask(\"dd/mm/yyyy\", {\"placeholder\": \"dd/mm/yyyy\"});
        });
        \$(document).ready(function () {
            \$(\"#newPromocionForm\").submit(function (event) {
                if(\$(\"#inputDescripcion\").val().length == 0 ||
                        \$(\"#inputPorcDesc\").val().length == 0 ||
                        \$(\"#fechaInic\").val().length == 0 ||
                        \$(\"#fechaFin\").val().length == 0 )
                {
                    \$(\"#alert\").show();
                    event.preventDefault();
                }
                else {
                    \$.ajax({

                        url: \"/helados/";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "/promocion/new?descripcion=\" + \$('#inputDescripcion').val() + \"&\" +
                        \"porcdesc=\" + \$(\"#inputPorcDesc\").val() + \"&\" +
                        \"fechainic=\" + \$(\"#fechaInic\").val() + \"&\" +
                        \"fechafin=\" + \$(\"#fechaFin\").val() + \"&\" +
                                \"id=";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"
                        ,
                        method: \"POST\",
                        dataType: 'json',
                        encode: true
                    })
                            .done(function (data) {
                                console.log(data);
                                window.location = \"/helados\";
                            });
                }

            });
        });

    </script>
";
        
        $__internal_75919b0704eaa874dc98057f582c95511de8f9d49f633391d6b8dc9b62a69e35->leave($__internal_75919b0704eaa874dc98057f582c95511de8f9d49f633391d6b8dc9b62a69e35_prof);

    }

    public function getTemplateName()
    {
        return "helados/newPromocion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 97,  166 => 93,  145 => 74,  139 => 73,  66 => 6,  60 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Crear Promocion{% endblock %}*/
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
/*                     <h3 class="box-title">Crear Promocion</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form role="form" id="newPromocionForm">*/
/*                     <div class="box-body">*/
/* */
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputDescripcion">Descripcion</label>*/
/*                             <input type="text" class="form-control" id="inputDescripcion" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/* */
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputPorcDesc">Porcentaje de Descuento:</label>*/
/*                             <input type="text" class="form-control" id="inputPorcDesc" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <!-- Date range -->*/
/*                         <div class="form-group col-md-6">*/
/*                             <label>Fecha de Inicio:</label>*/
/*                             <div class="input-group">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-calendar"></i>*/
/*                                 </div>*/
/*                                 <input type="text" class="form-control pull-right" id="fechaInic" >*/
/*                             </div><!-- /.input group -->*/
/*                         </div><!-- /.form group -->*/
/*                         <!-- Date range -->*/
/*                         <div class="col-md-12"></div>*/
/*                         <!-- Date range -->*/
/*                         <div class="form-group col-md-6">*/
/*                             <label>Fecha Fin:</label>*/
/*                             <div class="input-group">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-calendar"></i>*/
/*                                 </div>*/
/*                                 <input type="text" class="form-control pull-right" id="fechaFin" >*/
/*                             </div><!-- /.input group -->*/
/*                         </div><!-- /.form group -->*/
/*                         <!-- Date range -->*/
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
/*             $("#fechaInic").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});*/
/*             $("#fechaFin").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});*/
/*         });*/
/*         $(document).ready(function () {*/
/*             $("#newPromocionForm").submit(function (event) {*/
/*                 if($("#inputDescripcion").val().length == 0 ||*/
/*                         $("#inputPorcDesc").val().length == 0 ||*/
/*                         $("#fechaInic").val().length == 0 ||*/
/*                         $("#fechaFin").val().length == 0 )*/
/*                 {*/
/*                     $("#alert").show();*/
/*                     event.preventDefault();*/
/*                 }*/
/*                 else {*/
/*                     $.ajax({*/
/* */
/*                         url: "/helados/{{ id }}/promocion/new?descripcion=" + $('#inputDescripcion').val() + "&" +*/
/*                         "porcdesc=" + $("#inputPorcDesc").val() + "&" +*/
/*                         "fechainic=" + $("#fechaInic").val() + "&" +*/
/*                         "fechafin=" + $("#fechaFin").val() + "&" +*/
/*                                 "id={{ id }}"*/
/*                         ,*/
/*                         method: "POST",*/
/*                         dataType: 'json',*/
/*                         encode: true*/
/*                     })*/
/*                             .done(function (data) {*/
/*                                 console.log(data);*/
/*                                 window.location = "/helados";*/
/*                             });*/
/*                 }*/
/* */
/*             });*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
