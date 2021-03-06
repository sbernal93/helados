<?php

/* layout.html.twig */
class __TwigTemplate_cb162d5e1a924ff5347633d028fd580c016dd4ea002bc17f08a93bcaf7046c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'optionalDescription' => array($this, 'block_optionalDescription'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49ddc1ba7281611ca76eefc6a3f292a8ffadbe2ca6825741ede483e48b361062 = $this->env->getExtension("native_profiler");
        $__internal_49ddc1ba7281611ca76eefc6a3f292a8ffadbe2ca6825741ede483e48b361062->enter($__internal_49ddc1ba7281611ca76eefc6a3f292a8ffadbe2ca6825741ede483e48b361062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class=\"hold-transition skin-blue sidebar-mini\">
";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 424
        echo "<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
";
        // line 428
        $this->displayBlock('scripts', $context, $blocks);
        // line 430
        echo "</body>
</html>
";
        
        $__internal_49ddc1ba7281611ca76eefc6a3f292a8ffadbe2ca6825741ede483e48b361062->leave($__internal_49ddc1ba7281611ca76eefc6a3f292a8ffadbe2ca6825741ede483e48b361062_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8f61d1878e756e7fe652891ef3c8b823d7f71a372d6798f1da58db8fcaf7522 = $this->env->getExtension("native_profiler");
        $__internal_f8f61d1878e756e7fe652891ef3c8b823d7f71a372d6798f1da58db8fcaf7522->enter($__internal_f8f61d1878e756e7fe652891ef3c8b823d7f71a372d6798f1da58db8fcaf7522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ben & Jerry's ";
        
        $__internal_f8f61d1878e756e7fe652891ef3c8b823d7f71a372d6798f1da58db8fcaf7522->leave($__internal_f8f61d1878e756e7fe652891ef3c8b823d7f71a372d6798f1da58db8fcaf7522_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_432ddd538d52ca283e74e9d1daa0ace342fa1bff28f2bbc50cc162e8d9bb4903 = $this->env->getExtension("native_profiler");
        $__internal_432ddd538d52ca283e74e9d1daa0ace342fa1bff28f2bbc50cc162e8d9bb4903->enter($__internal_432ddd538d52ca283e74e9d1daa0ace342fa1bff28f2bbc50cc162e8d9bb4903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_432ddd538d52ca283e74e9d1daa0ace342fa1bff28f2bbc50cc162e8d9bb4903->leave($__internal_432ddd538d52ca283e74e9d1daa0ace342fa1bff28f2bbc50cc162e8d9bb4903_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7640b5f02d3db377957af0cc07e87ae92e5cf8a57a214e5a1b97c5a70473789 = $this->env->getExtension("native_profiler");
        $__internal_e7640b5f02d3db377957af0cc07e87ae92e5cf8a57a214e5a1b97c5a70473789->enter($__internal_e7640b5f02d3db377957af0cc07e87ae92e5cf8a57a214e5a1b97c5a70473789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "<div class=\"wrapper\">

    <!-- Main Header -->
    <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"/\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>B</b>&<b>J's</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Ben </b> & <b>Jerry's</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <!-- Menu toggle button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <!-- User Image -->
                                                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/dist/img/default-user.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class=\"dropdown notifications-menu\">
                        <!-- Menu toggle button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class=\"menu\">
                                    <li><!-- start notification -->
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class=\"dropdown tasks-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class=\"progress xs\">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <!-- The user image in the navbar-->
                            <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/dist/img/default-user.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">Administrador</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/dist/img/default-user.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Administrador - Ben & Jerry's
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Ventas</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Reportes</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Historicos</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Perfil</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Cerrar</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/dist/img/default-user.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>Administrador</p>
                    <!-- Status -->
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class=\"\"><a href=\"/sucursales\"><i class=\"fa fa-building\"></i> <span>Sucursales</span></a></li>
                <li><a href=\"/helados\"><i class=\"fa fa-spoon\"></i> <span>Helados</span></a></li>
                <li><a href=\"/directores\"><i class=\"fa fa-black-tie\"></i> <span>Directores</span></a></li>
                <li><a href=\"/lugares\"><i class=\"fa fa-map\"></i> <span>Lugares</span></a></li>
                <li><a href=\"/historias\"><i class=\"fa fa-book\"></i> <span>Historia</span></a></li>
                <li class=\"treeview\">
                    <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Multilevel</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"#\">Link in level 2</a></li>
                        <li><a href=\"#\">Link in level 2</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                ";
        // line 285
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 286
        echo "                <small>";
        $this->displayBlock('optionalDescription', $context, $blocks);
        echo "</small>
            </h1>
           <!-- <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                <li class=\"active\">Here</li>
            </ol> -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 296
        $this->displayBlock('content', $context, $blocks);
        // line 299
        echo "
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"pull-right hidden-xs\">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href=\"#\">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.5 -->
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- InputMask -->
    <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/input-mask/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js"), "html", null, true);
        echo "\"></script>
    <!-- date-range-picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap color picker -->
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap time picker -->
    <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck 1.0.1 -->
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/AdminLTE/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e7640b5f02d3db377957af0cc07e87ae92e5cf8a57a214e5a1b97c5a70473789->leave($__internal_e7640b5f02d3db377957af0cc07e87ae92e5cf8a57a214e5a1b97c5a70473789_prof);

    }

    // line 285
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_e8659cf52fa7873e860a08c9059e6e8dc31a0fc5aef3cf07077b37324d452578 = $this->env->getExtension("native_profiler");
        $__internal_e8659cf52fa7873e860a08c9059e6e8dc31a0fc5aef3cf07077b37324d452578->enter($__internal_e8659cf52fa7873e860a08c9059e6e8dc31a0fc5aef3cf07077b37324d452578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        echo "Page Header";
        
        $__internal_e8659cf52fa7873e860a08c9059e6e8dc31a0fc5aef3cf07077b37324d452578->leave($__internal_e8659cf52fa7873e860a08c9059e6e8dc31a0fc5aef3cf07077b37324d452578_prof);

    }

    // line 286
    public function block_optionalDescription($context, array $blocks = array())
    {
        $__internal_57a2849f9769a5adff3fcfda371d3282d36dac6a25411e9bc69b0b7b346d789e = $this->env->getExtension("native_profiler");
        $__internal_57a2849f9769a5adff3fcfda371d3282d36dac6a25411e9bc69b0b7b346d789e->enter($__internal_57a2849f9769a5adff3fcfda371d3282d36dac6a25411e9bc69b0b7b346d789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optionalDescription"));

        echo "Optional description";
        
        $__internal_57a2849f9769a5adff3fcfda371d3282d36dac6a25411e9bc69b0b7b346d789e->leave($__internal_57a2849f9769a5adff3fcfda371d3282d36dac6a25411e9bc69b0b7b346d789e_prof);

    }

    // line 296
    public function block_content($context, array $blocks = array())
    {
        $__internal_f10024dca01264479be9e9e45b1e41bb5b2e4b3a6e537f05f172ed5639045d78 = $this->env->getExtension("native_profiler");
        $__internal_f10024dca01264479be9e9e45b1e41bb5b2e4b3a6e537f05f172ed5639045d78->enter($__internal_f10024dca01264479be9e9e45b1e41bb5b2e4b3a6e537f05f172ed5639045d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 297
        echo "            <!-- Your Page Content Here -->
            ";
        
        $__internal_f10024dca01264479be9e9e45b1e41bb5b2e4b3a6e537f05f172ed5639045d78->leave($__internal_f10024dca01264479be9e9e45b1e41bb5b2e4b3a6e537f05f172ed5639045d78_prof);

    }

    // line 428
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4fa20ceb787e5230c41e3e6f8aa1b87b9f701a64e58900129139f0d11e123dd8 = $this->env->getExtension("native_profiler");
        $__internal_4fa20ceb787e5230c41e3e6f8aa1b87b9f701a64e58900129139f0d11e123dd8->enter($__internal_4fa20ceb787e5230c41e3e6f8aa1b87b9f701a64e58900129139f0d11e123dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_4fa20ceb787e5230c41e3e6f8aa1b87b9f701a64e58900129139f0d11e123dd8->leave($__internal_4fa20ceb787e5230c41e3e6f8aa1b87b9f701a64e58900129139f0d11e123dd8_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 428,  619 => 297,  613 => 296,  601 => 286,  589 => 285,  580 => 422,  575 => 420,  570 => 418,  565 => 416,  560 => 414,  555 => 412,  550 => 410,  545 => 408,  539 => 405,  535 => 404,  531 => 403,  526 => 401,  521 => 399,  516 => 397,  511 => 395,  413 => 299,  411 => 296,  397 => 286,  395 => 285,  344 => 237,  292 => 188,  282 => 181,  195 => 97,  155 => 59,  149 => 58,  139 => 27,  131 => 22,  122 => 16,  119 => 15,  113 => 14,  101 => 10,  92 => 430,  90 => 428,  84 => 424,  82 => 58,  52 => 30,  50 => 14,  44 => 11,  40 => 10,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--*/
/* This is a starter template page. Use this page to start your new project from*/
/* scratch. This page gets rid of all links and provides the needed markup only.*/
/* -->*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>{% block title %}Ben & Jerry's {% endblock %}</title>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     {% block stylesheets %}*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/vendor/AdminLTE/bootstrap/css/bootstrap.min.css') }}">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*     <!-- Ionicons -->*/
/*     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/vendor/AdminLTE/dist/css/AdminLTE.min.css') }}">*/
/*     <!-- AdminLTE Skins. We have chosen the skin-blue for this starter*/
/*           page. However, you can choose any other skin. Make sure you*/
/*           apply the skin class to the body tag so the changes take effect.*/
/*     -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/vendor/AdminLTE/dist/css/skins/skin-blue.min.css') }}">*/
/* */
/*     {% endblock %}*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <!--*/
/* BODY TAG OPTIONS:*/
/* =================*/
/* Apply one or more of the following classes to get the*/
/* desired effect*/
/* |---------------------------------------------------------|*/
/* | SKINS         | skin-blue                               |*/
/* |               | skin-black                              |*/
/* |               | skin-purple                             |*/
/* |               | skin-yellow                             |*/
/* |               | skin-red                                |*/
/* |               | skin-green                              |*/
/* |---------------------------------------------------------|*/
/* |LAYOUT OPTIONS | fixed                                   |*/
/* |               | layout-boxed                            |*/
/* |               | layout-top-nav                          |*/
/* |               | sidebar-collapse                        |*/
/* |               | sidebar-mini                            |*/
/* |---------------------------------------------------------|*/
/* -->*/
/* <body class="hold-transition skin-blue sidebar-mini">*/
/* {% block body %}*/
/* <div class="wrapper">*/
/* */
/*     <!-- Main Header -->*/
/*     <header class="main-header">*/
/* */
/*         <!-- Logo -->*/
/*         <a href="/" class="logo">*/
/*             <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*             <span class="logo-mini"><b>B</b>&<b>J's</b></span>*/
/*             <!-- logo for regular state and mobile devices -->*/
/*             <span class="logo-lg"><b>Ben </b> & <b>Jerry's</b></span>*/
/*         </a>*/
/* */
/*         <!-- Header Navbar -->*/
/*         <nav class="navbar navbar-static-top" role="navigation">*/
/*             <!-- Sidebar toggle button-->*/
/*             <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*             </a>*/
/*             <!-- Navbar Right Menu -->*/
/*             <div class="navbar-custom-menu">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <!-- Messages: style can be found in dropdown.less-->*/
/*                     <li class="dropdown messages-menu">*/
/*                         <!-- Menu toggle button -->*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-envelope-o"></i>*/
/*                             <span class="label label-success">4</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="header">You have 4 messages</li>*/
/*                             <li>*/
/*                                 <!-- inner menu: contains the messages -->*/
/*                                 <ul class="menu">*/
/*                                     <li><!-- start message -->*/
/*                                         <a href="#">*/
/*                                             <div class="pull-left">*/
/*                                                 <!-- User Image -->*/
/*                                                 <img src="{{ asset('assets/vendor/AdminLTE/dist/img/default-user.png') }}" class="img-circle" alt="User Image">*/
/*                                             </div>*/
/*                                             <!-- Message title and timestamp -->*/
/*                                             <h4>*/
/*                                                 Support Team*/
/*                                                 <small><i class="fa fa-clock-o"></i> 5 mins</small>*/
/*                                             </h4>*/
/*                                             <!-- The message -->*/
/*                                             <p>Why not buy a new awesome theme?</p>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <!-- end message -->*/
/*                                 </ul>*/
/*                                 <!-- /.menu -->*/
/*                             </li>*/
/*                             <li class="footer"><a href="#">See All Messages</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- /.messages-menu -->*/
/* */
/*                     <!-- Notifications Menu -->*/
/*                     <li class="dropdown notifications-menu">*/
/*                         <!-- Menu toggle button -->*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-bell-o"></i>*/
/*                             <span class="label label-warning">10</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="header">You have 10 notifications</li>*/
/*                             <li>*/
/*                                 <!-- Inner Menu: contains the notifications -->*/
/*                                 <ul class="menu">*/
/*                                     <li><!-- start notification -->*/
/*                                         <a href="#">*/
/*                                             <i class="fa fa-users text-aqua"></i> 5 new members joined today*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <!-- end notification -->*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="footer"><a href="#">View all</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- Tasks Menu -->*/
/*                     <li class="dropdown tasks-menu">*/
/*                         <!-- Menu Toggle Button -->*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-flag-o"></i>*/
/*                             <span class="label label-danger">9</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="header">You have 9 tasks</li>*/
/*                             <li>*/
/*                                 <!-- Inner menu: contains the tasks -->*/
/*                                 <ul class="menu">*/
/*                                     <li><!-- Task item -->*/
/*                                         <a href="#">*/
/*                                             <!-- Task title and progress text -->*/
/*                                             <h3>*/
/*                                                 Design some buttons*/
/*                                                 <small class="pull-right">20%</small>*/
/*                                             </h3>*/
/*                                             <!-- The progress bar -->*/
/*                                             <div class="progress xs">*/
/*                                                 <!-- Change the css width attribute to simulate progress -->*/
/*                                                 <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                                                     <span class="sr-only">20% Complete</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <!-- end task item -->*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="footer">*/
/*                                 <a href="#">View all tasks</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- User Account Menu -->*/
/*                     <li class="dropdown user user-menu">*/
/*                         <!-- Menu Toggle Button -->*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <!-- The user image in the navbar-->*/
/*                             <img src="{{ asset('assets/vendor/AdminLTE/dist/img/default-user.png') }}" class="user-image" alt="User Image">*/
/*                             <!-- hidden-xs hides the username on small devices so only the image appears. -->*/
/*                             <span class="hidden-xs">Administrador</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <!-- The user image in the menu -->*/
/*                             <li class="user-header">*/
/*                                 <img src="{{ asset('assets/vendor/AdminLTE/dist/img/default-user.png') }}" class="img-circle" alt="User Image">*/
/* */
/*                                 <p>*/
/*                                     Administrador - Ben & Jerry's*/
/*                                 </p>*/
/*                             </li>*/
/*                             <!-- Menu Body -->*/
/*                             <li class="user-body">*/
/*                                 <div class="row">*/
/*                                     <div class="col-xs-4 text-center">*/
/*                                         <a href="#">Ventas</a>*/
/*                                     </div>*/
/*                                     <div class="col-xs-4 text-center">*/
/*                                         <a href="#">Reportes</a>*/
/*                                     </div>*/
/*                                     <div class="col-xs-4 text-center">*/
/*                                         <a href="#">Historicos</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- /.row -->*/
/*                             </li>*/
/*                             <!-- Menu Footer-->*/
/*                             <li class="user-footer">*/
/*                                 <div class="pull-left">*/
/*                                     <a href="#" class="btn btn-default btn-flat">Perfil</a>*/
/*                                 </div>*/
/*                                 <div class="pull-right">*/
/*                                     <a href="#" class="btn btn-default btn-flat">Cerrar</a>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- Control Sidebar Toggle Button -->*/
/*                     <li>*/
/*                         <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
/*     </header>*/
/*     <!-- Left side column. contains the logo and sidebar -->*/
/*     <aside class="main-sidebar">*/
/* */
/*         <!-- sidebar: style can be found in sidebar.less -->*/
/*         <section class="sidebar">*/
/* */
/*             <!-- Sidebar user panel (optional) -->*/
/*             <div class="user-panel">*/
/*                 <div class="pull-left image">*/
/*                     <img src="{{ asset('assets/vendor/AdminLTE/dist/img/default-user.png') }}" class="img-circle" alt="User Image">*/
/*                 </div>*/
/*                 <div class="pull-left info">*/
/*                     <p>Administrador</p>*/
/*                     <!-- Status -->*/
/*                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- search form (Optional) -->*/
/*             <form action="#" method="get" class="sidebar-form">*/
/*                 <div class="input-group">*/
/*                     <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>*/
/*                 </button>*/
/*               </span>*/
/*                 </div>*/
/*             </form>*/
/*             <!-- /.search form -->*/
/* */
/*             <!-- Sidebar Menu -->*/
/*             <ul class="sidebar-menu">*/
/*                 <li class="header">HEADER</li>*/
/*                 <!-- Optionally, you can add icons to the links -->*/
/*                 <li class=""><a href="/sucursales"><i class="fa fa-building"></i> <span>Sucursales</span></a></li>*/
/*                 <li><a href="/helados"><i class="fa fa-spoon"></i> <span>Helados</span></a></li>*/
/*                 <li><a href="/directores"><i class="fa fa-black-tie"></i> <span>Directores</span></a></li>*/
/*                 <li><a href="/lugares"><i class="fa fa-map"></i> <span>Lugares</span></a></li>*/
/*                 <li><a href="/historias"><i class="fa fa-book"></i> <span>Historia</span></a></li>*/
/*                 <li class="treeview">*/
/*                     <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li><a href="#">Link in level 2</a></li>*/
/*                         <li><a href="#">Link in level 2</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             <!-- /.sidebar-menu -->*/
/*         </section>*/
/*         <!-- /.sidebar -->*/
/*     </aside>*/
/* */
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*             <h1>*/
/*                 {% block pageHeader %}Page Header{% endblock %}*/
/*                 <small>{% block optionalDescription %}Optional description{% endblock %}</small>*/
/*             </h1>*/
/*            <!-- <ol class="breadcrumb">*/
/*                 <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>*/
/*                 <li class="active">Here</li>*/
/*             </ol> -->*/
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*             {% block content %}*/
/*             <!-- Your Page Content Here -->*/
/*             {% endblock %}*/
/* */
/*         </section>*/
/*         <!-- /.content -->*/
/*     </div>*/
/*     <!-- /.content-wrapper -->*/
/* */
/*     <!-- Main Footer -->*/
/*     <footer class="main-footer">*/
/*         <!-- To the right -->*/
/*         <div class="pull-right hidden-xs">*/
/*             Anything you want*/
/*         </div>*/
/*         <!-- Default to the left -->*/
/*         <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.*/
/*     </footer>*/
/* */
/*     <!-- Control Sidebar -->*/
/*     <aside class="control-sidebar control-sidebar-dark">*/
/*         <!-- Create the tabs -->*/
/*         <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*             <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*             <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*         </ul>*/
/*         <!-- Tab panes -->*/
/*         <div class="tab-content">*/
/*             <!-- Home tab content -->*/
/*             <div class="tab-pane active" id="control-sidebar-home-tab">*/
/*                 <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*                 <ul class="control-sidebar-menu">*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/* */
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/* */
/*                                 <p>Will be 23 on April 24th</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- /.control-sidebar-menu -->*/
/* */
/*                 <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*                 <ul class="control-sidebar-menu">*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Custom Template Design*/
/*                                 <span class="label label-danger pull-right">70%</span>*/
/*                             </h4>*/
/* */
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- /.control-sidebar-menu -->*/
/* */
/*             </div>*/
/*             <!-- /.tab-pane -->*/
/*             <!-- Stats tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>*/
/*             <!-- /.tab-pane -->*/
/*             <!-- Settings tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*                 <form method="post">*/
/*                     <h3 class="control-sidebar-heading">General Settings</h3>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Report panel usage*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/* */
/*                         <p>*/
/*                             Some information about this general settings option*/
/*                         </p>*/
/*                     </div>*/
/*                     <!-- /.form-group -->*/
/*                 </form>*/
/*             </div>*/
/*             <!-- /.tab-pane -->*/
/*         </div>*/
/*     </aside>*/
/*     <!-- /.control-sidebar -->*/
/*     <!-- Add the sidebar's background. This div must be placed*/
/*          immediately after the control sidebar -->*/
/*     <div class="control-sidebar-bg"></div>*/
/* </div>*/
/* <!-- ./wrapper -->*/
/* */
/* <!-- REQUIRED JS SCRIPTS -->*/
/* */
/* <!-- jQuery 2.1.4 -->*/
/* <script src="{{ asset('assets/vendor/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>*/
/* <!-- Bootstrap 3.3.5 -->*/
/* <script src="{{ asset('assets/vendor/AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>*/
/* <!-- AdminLTE App -->*/
/* <script src="{{ asset('assets/vendor/AdminLTE/dist/js/app.min.js') }}"></script>*/
/*     <!-- Select2 -->*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/select2/select2.full.min.js') }}"></script>*/
/*     <!-- InputMask -->*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/input-mask/jquery.inputmask.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>*/
/*     <!-- date-range-picker -->*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>*/
/*     <!-- bootstrap color picker -->*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>*/
/*     <!-- bootstrap time picker -->*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>*/
/*     <!-- SlimScroll 1.3.0 -->*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>*/
/*     <!-- iCheck 1.0.1 -->*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/iCheck/icheck.min.js') }}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/plugins/fastclick/fastclick.min.js') }}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/dist/js/app.min.js') }}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{ asset('assets/vendor/AdminLTE/dist/js/demo.js') }}"></script>*/
/* {% endblock %}*/
/* <!-- Optionally, you can add Slimscroll and FastClick plugins.*/
/*      Both of these plugins are recommended to enhance the*/
/*      user experience. Slimscroll is required when using the*/
/*      fixed layout. -->*/
/* {% block scripts %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
