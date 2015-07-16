<?php

/* C:\xampp\htdocs/themes/archigallery/pages/contacts.htm */
class __TwigTemplate_9ec240a793e12926ed1754acd9ec9a7b7ed4185fecf752369db6f561d48339e5 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
        ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map(\"map\", {
                center: [43.235659, 76.961608],
                zoom: 17
            }); 
            
            myPlacemark = new ymaps.Placemark([43.235659, 76.961608], {
                hintContent: 'Архитектурная Галерея Ильдара Енилеева',
                balloonContent: 'Луганского 61А'
            });
            
            myMap.geoObjects.add(myPlacemark);
        }
    </script>
    
<!-- Contact Section -->
    <section class=\"container text-center white-text\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>Контакты</h2>
                <div>
                    <i class=\"fa fa-phone\"></i> 
                    +7 701 395 1486
                </div>
                <div>
                    <i class=\"fa fa-phone\"></i> 
                    +7 777 623 5252
                </div>
                <div>
                    <i class=\"fa fa-home\"></i> улица Луганского 61А, г. Алматы, Казахстан
                </div>
                <p><a href=\"mailto:ildar.enileyev@gmail.com\">ildar.enileyev@gmail.com</a>
                </p>
            </div>
        </div>
    </section>

<!-- Map Section -->
    <div id=\"map\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs/themes/archigallery/pages/contacts.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
