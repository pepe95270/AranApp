<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_10d5955e0ffa576c0ac69f4516990b934cbd51b1749ea86b503df7adddd17915 extends Twig_Template
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
        $__internal_8c92f4d776b8adc39f4b28792b967f8552310d1e8230c0767588d3c320b9afe7 = $this->env->getExtension("native_profiler");
        $__internal_8c92f4d776b8adc39f4b28792b967f8552310d1e8230c0767588d3c320b9afe7->enter($__internal_8c92f4d776b8adc39f4b28792b967f8552310d1e8230c0767588d3c320b9afe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8c92f4d776b8adc39f4b28792b967f8552310d1e8230c0767588d3c320b9afe7->leave($__internal_8c92f4d776b8adc39f4b28792b967f8552310d1e8230c0767588d3c320b9afe7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
