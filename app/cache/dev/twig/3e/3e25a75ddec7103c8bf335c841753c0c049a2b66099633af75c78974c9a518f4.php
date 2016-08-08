<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7bbe2fec9e92b1237b31c57eb0e8df07d378a7fb47e62340d7cfd81776554421 extends Twig_Template
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
        $__internal_ad7362ef94df9f28bb4f395497046007cb22f9c587206d2651cb642bb61a763a = $this->env->getExtension("native_profiler");
        $__internal_ad7362ef94df9f28bb4f395497046007cb22f9c587206d2651cb642bb61a763a->enter($__internal_ad7362ef94df9f28bb4f395497046007cb22f9c587206d2651cb642bb61a763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ad7362ef94df9f28bb4f395497046007cb22f9c587206d2651cb642bb61a763a->leave($__internal_ad7362ef94df9f28bb4f395497046007cb22f9c587206d2651cb642bb61a763a_prof);

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
