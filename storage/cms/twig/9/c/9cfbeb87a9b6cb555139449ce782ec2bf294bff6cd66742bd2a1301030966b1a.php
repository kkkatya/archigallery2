<?php

/* C:\xampp\htdocs/themes/demo/layouts/main_layout.htm */
class __TwigTemplate_9cfbeb87a9b6cb555139449ce782ec2bf294bff6cd66742bd2a1301030966b1a extends Twig_Template
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

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href=";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.min.css");
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/simple-sidebar.css");
        echo " rel=\"stylesheet\">
    
    <link href=";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/custom.css");
        echo " rel=\"stylesheet\">
    
    <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/transitions.css");
        echo " media=\"all\" />
    
    <link rel=\"stylesheet\" href=";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/main.css");
        echo ">
    <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    ";
        // line 26
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 27
        echo "    
    <script src=";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/modernizr-2.6.2-respond-1.1.0.min.js");
        echo "></script>
    
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
        <script src=";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 34
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
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href=\"#\">Dashboard</a>
                </li>
                <li>
                    <a href=\"#\">Shortcuts</a>
                </li>
                <li>
                    <a href=\"#\">Overview</a>
                </li>
                <li>
                    <a href=\"#\">Events</a>
                </li>
                <li>
                    <a href=\"#\">About</a>
                </li>
                <li>
                    <a href=\"#\">Services</a>
                </li>
                <li>
                    <a href=\"#\">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
        <div id=\"page-content-wrapper\">
            ";
        // line 84
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 85
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
        // line 101
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 102
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/themes/demo/layouts/main_layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 102,  152 => 101,  134 => 85,  132 => 84,  79 => 34,  73 => 31,  67 => 28,  64 => 27,  61 => 26,  56 => 24,  51 => 22,  46 => 20,  41 => 18,  35 => 15,  19 => 1,);
    }
}
