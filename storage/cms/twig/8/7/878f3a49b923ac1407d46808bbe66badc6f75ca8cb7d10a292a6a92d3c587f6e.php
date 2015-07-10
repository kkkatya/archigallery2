<?php

/* C:\xampp\htdocs/plugins/raviraj/rjgallery/components/gallery/default.htm */
class __TwigTemplate_878f3a49b923ac1407d46808bbe66badc6f75ca8cb7d10a292a6a92d3c587f6e extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('styles'        );
        // line 2
        echo "    <style>
        #";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " {
            list-style: none outside none;
            padding-left: 0;
        }
        
        #";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " li a {
            height: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px;
            width: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px;
        }
        #";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " li a img {
            height: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px;
            width: ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px;
        }
    </style>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 18
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 19
        echo "    <script>
         \$(document).ready(function() {
            \$(\"#";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\").lightGallery({
                // Elements
                thumbnail   : ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["thumbnail"]) ? $context["thumbnail"] : null), "html", null, true);
        echo ",
                caption     : ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
        echo ",
                desc        : ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["desc"]) ? $context["desc"] : null), "html", null, true);
        echo ",
                counter     : ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
        echo ",
                controls    : ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["controls"]) ? $context["controls"] : null), "html", null, true);
        echo ", 
                preload     : ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["preload"]) ? $context["preload"] : null), "html", null, true);
        echo ",

                // Transitions
                mode   : '";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
        echo "',
                useCSS : true,
                easing : 'linear',
                speed  : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["speed"]) ? $context["speed"] : null), "html", null, true);
        echo ",

                // Navigation
                hideControlOnEnd : false,
                loop             : ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["loop"]) ? $context["loop"] : null), "html", null, true);
        echo ",
                auto             : ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["auto"]) ? $context["auto"] : null), "html", null, true);
        echo ",
                pause            : ";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["pause"]) ? $context["pause"] : null), "html", null, true);
        echo ",
                escKey           : ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["escKey"]) ? $context["escKey"] : null), "html", null, true);
        echo ",
                swipeThreshold    : 50,

                lang : { allPhotos: '";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "' },
            });
        });
    </script>
";
        // line 18
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 49
        echo "
<section id=\"photos\">
    <ul id=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\">
        ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 53
            echo "            <li data-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "\" data-desc=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
            echo "\">
                <a href=\"#\"><img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "\" /></a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </ul>
</style>


        ";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/plugins/raviraj/rjgallery/components/gallery/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 57,  161 => 54,  152 => 53,  148 => 52,  142 => 51,  138 => 49,  136 => 18,  129 => 44,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  104 => 34,  98 => 31,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  67 => 21,  63 => 19,  61 => 18,  59 => 1,  53 => 14,  49 => 13,  45 => 12,  40 => 10,  36 => 9,  32 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }
}
