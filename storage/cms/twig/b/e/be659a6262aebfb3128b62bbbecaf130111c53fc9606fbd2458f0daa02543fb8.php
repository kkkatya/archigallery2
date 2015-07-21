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

    <title>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

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
    
    <link href=";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/font-awesome/css/font-awesome.min.css");
        echo " rel=\"stylesheet\">

    

    <link rel=\"stylesheet\" href=";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/main.css");
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/grayscale.css");
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/agency.css");
        echo ">
    <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    <script src=";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/modernizr-2.6.2-respond-1.1.0.min.js");
        echo "></script>

    
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
        <script src=";
        // line 35
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 37
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    
    <script src=\"https://api-maps.yandex.ru/2.1/?lang=ru_RU\" type=\"text/javascript\"></script>

</head>

<body>

    <div id=\"wrapper\">

        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <ul class=\"sidebar-nav\">
                <a href=\"/\">
                    <img id=\"logo\" src=";
        // line 57
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/logo.jpg");
        echo " alt=\"Архитектурная галерея Ильдара Енилеева\"/>
                </a>
                <li>
                    <a href=\"/\">Главная</a>
                </li>
                <li>
                    <a href=\"/portfolio\">Портфолио</a>
                </li>
                <li>
                    <a href=\"/about\">О нас</a>
                </li>
                <li>
                    <a href=\"/contacts\">Контакты</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
        <div id=\"page-content-wrapper\" style=\"position:relative;\">
            ";
        // line 78
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 79
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
        // line 95
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 96
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
        return array (  160 => 96,  157 => 95,  139 => 79,  137 => 78,  113 => 57,  90 => 37,  85 => 35,  78 => 31,  73 => 29,  69 => 28,  65 => 27,  58 => 23,  53 => 21,  48 => 19,  41 => 16,  38 => 15,  32 => 12,  19 => 1,);
    }
}
