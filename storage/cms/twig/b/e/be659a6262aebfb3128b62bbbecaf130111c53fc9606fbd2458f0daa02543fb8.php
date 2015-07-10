<?php

/* C:\xampp\htdocs/themes/archigallery/layouts/main_layout.htm */
class __TwigTemplate_be659a6262aebfb3128b62bbbecaf130111c53fc9606fbd2458f0daa02543fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Архитектурная Галерея</title>

    <!-- Bootstrap Core CSS -->
    ";
        // line 15
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 16
        echo "    <link href=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.min.css");
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/simple-sidebar.css");
        echo " rel=\"stylesheet\">
    
    <link href=";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/custom.css");
        echo " rel=\"stylesheet\">
    

    <link rel=\"stylesheet\" href=";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/main.css");
        echo ">
    <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    <script src=";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/modernizr-2.6.2-respond-1.1.0.min.js");
        echo "></script>
    
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
        <script src=";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 32
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\">
                    <a href=\"#\">
                        Архитектурная Галерея
                    </a>
                </li>
                <li>
                    <a href=\"#\">Главная</a>
                </li>
                <li>
                    <a href=\"#\">О нас</a>
                </li>
                <li>
                    <a href=\"#\">Контакты</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
        <div id=\"page-content-wrapper\">
            ";
        // line 70
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 71
        echo "        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Menu Toggle Script -->
    <script>
    \$(\"#menu-toggle\").click(function(e) {
        e.preventDefault();
        \$(\"#wrapper\").toggleClass(\"toggled\");
    });
    </script>
    ";
        // line 87
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 88
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/themes/archigallery/layouts/main_layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 88,  134 => 87,  116 => 71,  114 => 70,  73 => 32,  67 => 29,  61 => 26,  56 => 24,  50 => 21,  45 => 19,  38 => 16,  35 => 15,  19 => 1,);
    }
}
