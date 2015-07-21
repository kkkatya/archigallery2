<?php

/* C:\xampp\htdocs/themes/archigallery/pages/portfolio.htm */
class __TwigTemplate_4e34659b6c48bd8f3ec4c7a89bea2e59fdf087e3cafdefa0e615f50e59bebad0 extends Twig_Template
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
        echo "<section id=\"photos\">
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("gallery2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("gallery"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/themes/archigallery/pages/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
