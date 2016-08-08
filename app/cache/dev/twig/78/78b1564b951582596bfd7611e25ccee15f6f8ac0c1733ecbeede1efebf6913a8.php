<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_78507a629487960df6e21fd22c625a6ae34e668146aac9bdbe33d29e91258748 extends Twig_Template
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
        $__internal_fa54f38f73aac9c431ba3615fc87c2d53bdcb658aae930ab322eaf858f315a7d = $this->env->getExtension("native_profiler");
        $__internal_fa54f38f73aac9c431ba3615fc87c2d53bdcb658aae930ab322eaf858f315a7d->enter($__internal_fa54f38f73aac9c431ba3615fc87c2d53bdcb658aae930ab322eaf858f315a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fa54f38f73aac9c431ba3615fc87c2d53bdcb658aae930ab322eaf858f315a7d->leave($__internal_fa54f38f73aac9c431ba3615fc87c2d53bdcb658aae930ab322eaf858f315a7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
