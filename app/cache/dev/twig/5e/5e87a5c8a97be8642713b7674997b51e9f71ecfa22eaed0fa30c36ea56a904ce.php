<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_00497eea30b6437c74afcb65f21c9c07dbf811eb9c181f61b26f48ef02fea141 extends Twig_Template
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
        $__internal_73d967fae299f101902d4c0d7ce2a160ba192c4758fbf6722114b2958095595c = $this->env->getExtension("native_profiler");
        $__internal_73d967fae299f101902d4c0d7ce2a160ba192c4758fbf6722114b2958095595c->enter($__internal_73d967fae299f101902d4c0d7ce2a160ba192c4758fbf6722114b2958095595c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_73d967fae299f101902d4c0d7ce2a160ba192c4758fbf6722114b2958095595c->leave($__internal_73d967fae299f101902d4c0d7ce2a160ba192c4758fbf6722114b2958095595c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
