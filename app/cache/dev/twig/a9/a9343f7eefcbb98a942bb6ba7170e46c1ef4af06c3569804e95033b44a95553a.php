<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6011ce8a630c7162c88941bb1b53e126f25c57c178578925d09037f639815bc6 extends Twig_Template
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
        $__internal_6855724fcdfbd9eed57aa70ed96d41f2c12daed5c0a76cc90d07b621a8ced2d5 = $this->env->getExtension("native_profiler");
        $__internal_6855724fcdfbd9eed57aa70ed96d41f2c12daed5c0a76cc90d07b621a8ced2d5->enter($__internal_6855724fcdfbd9eed57aa70ed96d41f2c12daed5c0a76cc90d07b621a8ced2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6855724fcdfbd9eed57aa70ed96d41f2c12daed5c0a76cc90d07b621a8ced2d5->leave($__internal_6855724fcdfbd9eed57aa70ed96d41f2c12daed5c0a76cc90d07b621a8ced2d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
