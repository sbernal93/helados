<?php

/* helados/newHelado.html.twig */
class __TwigTemplate_240083c1fbea58d013d56080aff6ca15215f1fc38a0fbdd2d44c96f0dbd58d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "helados/newHelado.html.twig", 1);
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
        $__internal_c64d047280468a309a0e00ab0f9464974b6b0350b4ddfab001daccf3668e3de5 = $this->env->getExtension("native_profiler");
        $__internal_c64d047280468a309a0e00ab0f9464974b6b0350b4ddfab001daccf3668e3de5->enter($__internal_c64d047280468a309a0e00ab0f9464974b6b0350b4ddfab001daccf3668e3de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helados/newHelado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c64d047280468a309a0e00ab0f9464974b6b0350b4ddfab001daccf3668e3de5->leave($__internal_c64d047280468a309a0e00ab0f9464974b6b0350b4ddfab001daccf3668e3de5_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_1840c1997cc7ccdc445407e1c05a2c187efd7fd6756eaf1365dfd42a0c645038 = $this->env->getExtension("native_profiler");
        $__internal_1840c1997cc7ccdc445407e1c05a2c187efd7fd6756eaf1365dfd42a0c645038->enter($__internal_1840c1997cc7ccdc445407e1c05a2c187efd7fd6756eaf1365dfd42a0c645038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Crear Helado";
        
        $__internal_1840c1997cc7ccdc445407e1c05a2c187efd7fd6756eaf1365dfd42a0c645038->leave($__internal_1840c1997cc7ccdc445407e1c05a2c187efd7fd6756eaf1365dfd42a0c645038_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_6065f0cabb265298e4fab04bb3279994d55ebbf52cf760fa89c0b2aab029a47b = $this->env->getExtension("native_profiler");
        $__internal_6065f0cabb265298e4fab04bb3279994d55ebbf52cf760fa89c0b2aab029a47b->enter($__internal_6065f0cabb265298e4fab04bb3279994d55ebbf52cf760fa89c0b2aab029a47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_6065f0cabb265298e4fab04bb3279994d55ebbf52cf760fa89c0b2aab029a47b->leave($__internal_6065f0cabb265298e4fab04bb3279994d55ebbf52cf760fa89c0b2aab029a47b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_90cbebf9083931516035debc5499f9c6b29b3f737004cb940696a73f2ca326c3 = $this->env->getExtension("native_profiler");
        $__internal_90cbebf9083931516035debc5499f9c6b29b3f737004cb940696a73f2ca326c3->enter($__internal_90cbebf9083931516035debc5499f9c6b29b3f737004cb940696a73f2ca326c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <h3 class=\"box-title\">Crear Helado</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role=\"form\" id=\"newHeladoForm\">
                    <div class=\"box-body\">

                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputName\">Nombre</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputName\" >
                        </div>
                        <div class=\"col-md-12\"></div>

                        <div class=\"form-group col-md-6\">
                            <label for=\"inputTipo\">Tipo:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputTipo\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputDescripcion\">Descripcion:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputDescripcion\" >
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCantidadBol\">Cantidad de Bolas:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCantidadBol\" >
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
        
        $__internal_90cbebf9083931516035debc5499f9c6b29b3f737004cb940696a73f2ca326c3->leave($__internal_90cbebf9083931516035debc5499f9c6b29b3f737004cb940696a73f2ca326c3_prof);

    }

    // line 59
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_b6c3ba18302e7c3738d6e35dba8b284771d6dad66f0a0f0823e1dd2efabec8bf = $this->env->getExtension("native_profiler");
        $__internal_b6c3ba18302e7c3738d6e35dba8b284771d6dad66f0a0f0823e1dd2efabec8bf->enter($__internal_b6c3ba18302e7c3738d6e35dba8b284771d6dad66f0a0f0823e1dd2efabec8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 60
        echo "    <script>

        \$(document).ready(function () {
            \$(\"#newHeladoForm\").submit(function (event) {
                if(\$(\"#inputName\").val().length == 0 ||
                        \$(\"#inputTipo\").val().length == 0 ||
                        \$(\"#inputDescripcion\").val().length == 0)
                {
                    \$(\"#alert\").show();
                }
                else {
                    \$.ajax({
                        url: \"/helados/new?name=\" + \$('#inputName').val() + \"&\" +
                        \"tipo=\" + \$(\"#inputTipo\").val() + \"&\" +
                        \"descripcion=\" + \$(\"#inputDescripcion\").val() + \"&\" +
                        \"bolas=\" + \$(\"#inputCantidadBol\").val()
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
        
        $__internal_b6c3ba18302e7c3738d6e35dba8b284771d6dad66f0a0f0823e1dd2efabec8bf->leave($__internal_b6c3ba18302e7c3738d6e35dba8b284771d6dad66f0a0f0823e1dd2efabec8bf_prof);

    }

    public function getTemplateName()
    {
        return "helados/newHelado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 60,  125 => 59,  66 => 6,  60 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block pageHeader %}Crear Helado{% endblock %}*/
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
/*                     <h3 class="box-title">Crear Helado</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form role="form" id="newHeladoForm">*/
/*                     <div class="box-body">*/
/* */
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputName">Nombre</label>*/
/*                             <input type="text" class="form-control" id="inputName" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/* */
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputTipo">Tipo:</label>*/
/*                             <input type="text" class="form-control" id="inputTipo" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputDescripcion">Descripcion:</label>*/
/*                             <input type="text" class="form-control" id="inputDescripcion" >*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCantidadBol">Cantidad de Bolas:</label>*/
/*                             <input type="text" class="form-control" id="inputCantidadBol" >*/
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
/* */
/*         $(document).ready(function () {*/
/*             $("#newHeladoForm").submit(function (event) {*/
/*                 if($("#inputName").val().length == 0 ||*/
/*                         $("#inputTipo").val().length == 0 ||*/
/*                         $("#inputDescripcion").val().length == 0)*/
/*                 {*/
/*                     $("#alert").show();*/
/*                 }*/
/*                 else {*/
/*                     $.ajax({*/
/*                         url: "/helados/new?name=" + $('#inputName').val() + "&" +*/
/*                         "tipo=" + $("#inputTipo").val() + "&" +*/
/*                         "descripcion=" + $("#inputDescripcion").val() + "&" +*/
/*                         "bolas=" + $("#inputCantidadBol").val()*/
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
