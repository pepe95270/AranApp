<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_de82f909cf6d241f2fcc72f1796977b2466d2b28693becb8eee6b7de66038886 extends Twig_Template
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
        $__internal_32416040add2d0ce7a21b1c04b8f204421965eee5d497680d8196fa9c4ad9b54 = $this->env->getExtension("native_profiler");
        $__internal_32416040add2d0ce7a21b1c04b8f204421965eee5d497680d8196fa9c4ad9b54->enter($__internal_32416040add2d0ce7a21b1c04b8f204421965eee5d497680d8196fa9c4ad9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_32416040add2d0ce7a21b1c04b8f204421965eee5d497680d8196fa9c4ad9b54->leave($__internal_32416040add2d0ce7a21b1c04b8f204421965eee5d497680d8196fa9c4ad9b54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
