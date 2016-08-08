<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e8960c4194171bbdba3bada403b4e6fe11a5ad97f22fc43c809b80a8bcbb175b extends Twig_Template
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
        $__internal_61d1d29c9c9122d1d0734ed722f78fad9b4814147ff37ba1afc58635945650ac = $this->env->getExtension("native_profiler");
        $__internal_61d1d29c9c9122d1d0734ed722f78fad9b4814147ff37ba1afc58635945650ac->enter($__internal_61d1d29c9c9122d1d0734ed722f78fad9b4814147ff37ba1afc58635945650ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_61d1d29c9c9122d1d0734ed722f78fad9b4814147ff37ba1afc58635945650ac->leave($__internal_61d1d29c9c9122d1d0734ed722f78fad9b4814147ff37ba1afc58635945650ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
