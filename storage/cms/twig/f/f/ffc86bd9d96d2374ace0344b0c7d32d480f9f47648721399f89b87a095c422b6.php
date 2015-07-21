<?php

/* C:\xampp\htdocs/themes/archigallery/pages/home.htm */
class __TwigTemplate_ffc86bd9d96d2374ace0344b0c7d32d480f9f47648721399f89b87a095c422b6 extends Twig_Template
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
    <link href=";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.min.css");
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/full-slider.css");
        echo " rel=\"stylesheet\">
    <link href=";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/stylish-portfolio.css");
        echo " rel=\"stylesheet\">
    <link href=";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/custom.css");
        echo " rel=\"stylesheet\">
    <link href=";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/font-awesome/css/font-awesome.min.css");
        echo " rel=\"stylesheet\" type=\"text/css\">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <a id=\"menu-toggle\" href=\"#\" class=\"btn btn-dark btn-lg toggle\"><i class=\"fa fa-bars\"></i></a>
    <nav id=\"sidebar-wrapper\">
        <ul class=\"sidebar-nav\">
            <a id=\"menu-close\" href=\"#\" class=\"btn btn-lg pull-right toggle\" style=\"color:white;\"><i class=\"fa fa-times\"></i></a>
            <a href=\"/\">
                    <img id=\"logo\" src=";
        // line 41
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
    </nav>
    <!-- Full Page Image Background Carousel Header -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <!-- Set the first background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide One');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class=\"item\">
                <!-- Set the second background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Two');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class=\"item\">
                <!-- Set the third background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Three');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>

    </header>

    <!-- jQuery -->
    <script src=";
        // line 102
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 105
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "></script>

    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    \$(\"#menu-close\").click(function(e) {
        e.preventDefault();
        \$(\"#sidebar-wrapper\").toggleClass(\"active\");
    });

    // Opens the sidebar menu
    \$(\"#menu-toggle\").click(function(e) {
        e.preventDefault();
        \$(\"#sidebar-wrapper\").toggleClass(\"active\");
    });

    </script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/themes/archigallery/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 105,  143 => 102,  79 => 41,  56 => 21,  52 => 20,  48 => 19,  44 => 18,  38 => 15,  32 => 12,  19 => 1,);
    }
}
