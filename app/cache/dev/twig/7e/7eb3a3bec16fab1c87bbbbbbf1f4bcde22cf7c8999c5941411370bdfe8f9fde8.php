<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8207c9ace0fb29e3b6819c830317daab1cd444d95cc6815250a214974be03d99 extends Twig_Template
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
        $__internal_51c062dece302f789972eff50c435fd5b05ff33e02aeef08cb796d604eaffad5 = $this->env->getExtension("native_profiler");
        $__internal_51c062dece302f789972eff50c435fd5b05ff33e02aeef08cb796d604eaffad5->enter($__internal_51c062dece302f789972eff50c435fd5b05ff33e02aeef08cb796d604eaffad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_51c062dece302f789972eff50c435fd5b05ff33e02aeef08cb796d604eaffad5->leave($__internal_51c062dece302f789972eff50c435fd5b05ff33e02aeef08cb796d604eaffad5_prof);

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
