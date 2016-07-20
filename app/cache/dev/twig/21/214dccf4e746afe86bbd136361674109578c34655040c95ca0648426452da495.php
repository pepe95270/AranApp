<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c2d201f6fe4690cb63df4153fd508b1cdd905fa18c616cef93a482d076336043 extends Twig_Template
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
        $__internal_d41318b302f42f944dee762758d6fcadc93f86b02f5485e93972feba7dc881e1 = $this->env->getExtension("native_profiler");
        $__internal_d41318b302f42f944dee762758d6fcadc93f86b02f5485e93972feba7dc881e1->enter($__internal_d41318b302f42f944dee762758d6fcadc93f86b02f5485e93972feba7dc881e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d41318b302f42f944dee762758d6fcadc93f86b02f5485e93972feba7dc881e1->leave($__internal_d41318b302f42f944dee762758d6fcadc93f86b02f5485e93972feba7dc881e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
