<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_45a4e01a77d272e8ca79268704e35376fc2717fa394310e48601028f16ddc5c9 extends Twig_Template
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
        $__internal_41f9b85bcd1b479186886243dd837ca333037e8008deb2931621487e66096e85 = $this->env->getExtension("native_profiler");
        $__internal_41f9b85bcd1b479186886243dd837ca333037e8008deb2931621487e66096e85->enter($__internal_41f9b85bcd1b479186886243dd837ca333037e8008deb2931621487e66096e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_41f9b85bcd1b479186886243dd837ca333037e8008deb2931621487e66096e85->leave($__internal_41f9b85bcd1b479186886243dd837ca333037e8008deb2931621487e66096e85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
