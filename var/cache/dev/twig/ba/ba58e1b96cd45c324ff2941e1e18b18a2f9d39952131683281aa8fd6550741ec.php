<?php

/* helados/editHelado.html.twig */
class __TwigTemplate_e0010b2364bff1e15ec79e7290f2e9fabb1c5f98207caaee235df97fd25bc495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "helados/editHelado.html.twig", 1);
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
        $__internal_a673f24ba7854e900f128a71f32719547bb2b192d16b0b8b18fd41e6c76f9d49 = $this->env->getExtension("native_profiler");
        $__internal_a673f24ba7854e900f128a71f32719547bb2b192d16b0b8b18fd41e6c76f9d49->enter($__internal_a673f24ba7854e900f128a71f32719547bb2b192d16b0b8b18fd41e6c76f9d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helados/editHelado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a673f24ba7854e900f128a71f32719547bb2b192d16b0b8b18fd41e6c76f9d49->leave($__internal_a673f24ba7854e900f128a71f32719547bb2b192d16b0b8b18fd41e6c76f9d49_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_6b2156825b4b6bc5da4b5e3c5cadf24c2d6869d8d1490f82bf219e2d9785cc78 = $this->env->getExtension("native_profiler");
        $__internal_6b2156825b4b6bc5da4b5e3c5cadf24c2d6869d8d1490f82bf219e2d9785cc78->enter($__internal_6b2156825b4b6bc5da4b5e3c5cadf24c2d6869d8d1490f82bf219e2d9785cc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Crear Helado";
        
        $__internal_6b2156825b4b6bc5da4b5e3c5cadf24c2d6869d8d1490f82bf219e2d9785cc78->leave($__internal_6b2156825b4b6bc5da4b5e3c5cadf24c2d6869d8d1490f82bf219e2d9785cc78_prof);

    }

    // line 4
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_14b83b3e65c838330ff13c77994f50537f8685a5ea21b763fbb84a4bdb2d26ab = $this->env->getExtension("native_profiler");
        $__internal_14b83b3e65c838330ff13c77994f50537f8685a5ea21b763fbb84a4bdb2d26ab->enter($__internal_14b83b3e65c838330ff13c77994f50537f8685a5ea21b763fbb84a4bdb2d26ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        
        $__internal_14b83b3e65c838330ff13c77994f50537f8685a5ea21b763fbb84a4bdb2d26ab->leave($__internal_14b83b3e65c838330ff13c77994f50537f8685a5ea21b763fbb84a4bdb2d26ab_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_433451aa2fbefb3dfec278021ecdf4ebf1684032ad728552f8dc5a36aca8d2f3 = $this->env->getExtension("native_profiler");
        $__internal_433451aa2fbefb3dfec278021ecdf4ebf1684032ad728552f8dc5a36aca8d2f3->enter($__internal_433451aa2fbefb3dfec278021ecdf4ebf1684032ad728552f8dc5a36aca8d2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <h3 class=\"box-title\">Editar Helado</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role=\"form\" id=\"editHeladoForm\">
                    <div class=\"box-body\">
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputID\">ID</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputID\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_id", array()), "html", null, true);
        echo "\" disabled>
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputName\">Nombre</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputName\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_nombre", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>

                        <div class=\"form-group col-md-6\">
                            <label for=\"inputTipo\">Tipo:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputTipo\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_tipo", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputDescripcion\">Descripcion:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputDescripcion\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_descripcion", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-12\"></div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"inputCantidadBol\">Cantidad de Bolas:</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputCantidadBol\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helado"]) ? $context["helado"] : $this->getContext($context, "helado")), "pro_cant_bol", array()), "html", null, true);
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
        
        $__internal_433451aa2fbefb3dfec278021ecdf4ebf1684032ad728552f8dc5a36aca8d2f3->leave($__internal_433451aa2fbefb3dfec278021ecdf4ebf1684032ad728552f8dc5a36aca8d2f3_prof);

    }

    // line 62
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_18e5ea021767fe1a332c31b57314fceb9b00918acce1d13422b8bbe2a07aaab7 = $this->env->getExtension("native_profiler");
        $__internal_18e5ea021767fe1a332c31b57314fceb9b00918acce1d13422b8bbe2a07aaab7->enter($__internal_18e5ea021767fe1a332c31b57314fceb9b00918acce1d13422b8bbe2a07aaab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 63
        echo "    <script>

        \$(document).ready(function () {
            \$(\"#editHeladoForm\").submit(function (event) {
                if(\$(\"#inputName\").val().length == 0 ||
                        \$(\"#inputTipo\").val().length == 0 ||
                        \$(\"#inputDescripcion\").val().length == 0)
                {
                    \$(\"#alert\").show();
                }
                else {
                    \$.ajax({
                        url: \"/helados/update?name=\" + \$('#inputName').val() + \"&\" +
                        \"tipo=\" + \$(\"#inputTipo\").val() + \"&\" +
                        \"descripcion=\" + \$(\"#inputDescripcion\").val() + \"&\" +
                        \"bolas=\" + \$(\"#inputCantidadBol\").val()+ \"&\" +
                        \"id=\" + \$(\"#inputID\").val()
                        ,
                        method: \"POST\",
                        dataType: 'json',
                        encode: true
                    })
                            .done(function (data) {
                                console.log(data);
                                window.location = \"/helados\" +\$(\"#inputID\").val();
                            });
                }

            });
        });

    </script>
";
        
        $__internal_18e5ea021767fe1a332c31b57314fceb9b00918acce1d13422b8bbe2a07aaab7->leave($__internal_18e5ea021767fe1a332c31b57314fceb9b00918acce1d13422b8bbe2a07aaab7_prof);

    }

    public function getTemplateName()
    {
        return "helados/editHelado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 63,  143 => 62,  119 => 45,  111 => 40,  103 => 35,  94 => 29,  86 => 24,  66 => 6,  60 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">Editar Helado</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form role="form" id="editHeladoForm">*/
/*                     <div class="box-body">*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputID">ID</label>*/
/*                             <input type="text" class="form-control" id="inputID" value="{{ helado.pro_id }}" disabled>*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputName">Nombre</label>*/
/*                             <input type="text" class="form-control" id="inputName" value="{{ helado.pro_nombre }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/* */
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputTipo">Tipo:</label>*/
/*                             <input type="text" class="form-control" id="inputTipo" value="{{ helado.pro_tipo }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputDescripcion">Descripcion:</label>*/
/*                             <input type="text" class="form-control" id="inputDescripcion" value="{{ helado.pro_descripcion }}">*/
/*                         </div>*/
/*                         <div class="col-md-12"></div>*/
/*                         <div class="form-group col-md-6">*/
/*                             <label for="inputCantidadBol">Cantidad de Bolas:</label>*/
/*                             <input type="text" class="form-control" id="inputCantidadBol" value="{{ helado.pro_cant_bol }}">*/
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
/*             $("#editHeladoForm").submit(function (event) {*/
/*                 if($("#inputName").val().length == 0 ||*/
/*                         $("#inputTipo").val().length == 0 ||*/
/*                         $("#inputDescripcion").val().length == 0)*/
/*                 {*/
/*                     $("#alert").show();*/
/*                 }*/
/*                 else {*/
/*                     $.ajax({*/
/*                         url: "/helados/update?name=" + $('#inputName').val() + "&" +*/
/*                         "tipo=" + $("#inputTipo").val() + "&" +*/
/*                         "descripcion=" + $("#inputDescripcion").val() + "&" +*/
/*                         "bolas=" + $("#inputCantidadBol").val()+ "&" +*/
/*                         "id=" + $("#inputID").val()*/
/*                         ,*/
/*                         method: "POST",*/
/*                         dataType: 'json',*/
/*                         encode: true*/
/*                     })*/
/*                             .done(function (data) {*/
/*                                 console.log(data);*/
/*                                 window.location = "/helados" +$("#inputID").val();*/
/*                             });*/
/*                 }*/
/* */
/*             });*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
