<?php

/* C:\xampp\htdocs/themes/archigallery/pages/home2.htm */
class __TwigTemplate_48cd6965ecedad996b2b668af2c7f0c174cfa3143e4449feb0b931b8ab53cb37 extends Twig_Template
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
        echo "<!--<?php 
    function loadImages(){
        \$dirs = scandir(\"/themes/archigallery/assets/img/project\");
        foreach(\$dirs as \$dir){
            if(\$dir!=\".\" && \$dir!=\"..\"){
                \$files = scandir(\"/themes/archigallery/assets/img/projects/\".\$dir);
                foreach(\$files as \$file){
                    if(\$file!=\".\" && \$file!=\"..\"){
                        
                        echo '<a class=\"thumbnail\" rel=\"lightbox[\$dir]\" href=\"/themes/archigallery/assets/img/projects/\"'.\$dir.'><img class=\"group1\" src=\"/themes/archigallery/assets/img/projects/\"'.\$dir.'\"/\"'.\$file.'></a>';
                    }
                }
            }
        }
    }
   
?>-->
<script>
    \$(document).ready(function(){
        \$(\"[rel^='lightbox']\").prettyPhoto();
    });
    
</script>
<section id=\"photos\">
    
    <a class=\"thumbnail\" rel=\"lightbox[pics]\" href=";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/portfolio-1.jpg");
        echo "><img class=\"group1\" src=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/portfolio-1.jpg");
        echo "></a>
    
    <a class=\"thumbnail\" rel=\"lightbox[group2]\" href=";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/home.jpg");
        echo "><img class=\"group1\" src=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/home.jpg");
        echo "></a>
    <a class=\"thumbnail\" rel=\"lightbox[group]\" href=";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/portfolio-2.jpg");
        echo "><img class=\"group1\" src=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/portfolio-2.jpg");
        echo "></a>
    <a class=\"thumbnail\" rel=\"lightbox[group2]\" href=";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/portfolio-3.jpg");
        echo "><img class=\"group1\" src=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/portfolio-3.jpg");
        echo "></a>
    <a class=\"thumbnail\" rel=\"lightbox[group]\" href=";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/portfolio-4.jpg");
        echo "><img class=\"group1\" src=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/portfolio-4.jpg");
        echo "></a>
    <a class=\"thumbnail\" rel=\"lightbox[group2]\" href=";
        // line 32
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/pics/3.jpg");
        echo "><img class=\"group1\" src=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/pics/3.jpg");
        echo "></a>
    <a class=\"thumbnail\" rel=\"lightbox[group]\" href=";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/pics/4.jpg");
        echo "><img class=\"group1\" src=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/pics/4.jpg");
        echo "></a>
    <a class=\"thumbnail\" rel=\"lightbox[group2]\" href=";
        // line 34
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/pics/1.jpg");
        echo "><img class=\"group1\" src=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/pics/1.jpg");
        echo "></a>
    <a class=\"thumbnail\" rel=\"lightbox[group]\" href=";
        // line 35
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/pics/2.jpg");
        echo "><img class=\"group1\" src=";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/pics/2.jpg");
        echo "></a>
</section>



<script src=";
        // line 40
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "></script>

<script src=";
        // line 42
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugins.js");
        echo "></script>
<script src=";
        // line 43
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "></script>
<script src=";
        // line 44
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/themes/archigallery/pages/home2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  114 => 43,  110 => 42,  105 => 40,  95 => 35,  89 => 34,  83 => 33,  77 => 32,  71 => 31,  65 => 30,  59 => 29,  53 => 28,  46 => 26,  19 => 1,);
    }
}
