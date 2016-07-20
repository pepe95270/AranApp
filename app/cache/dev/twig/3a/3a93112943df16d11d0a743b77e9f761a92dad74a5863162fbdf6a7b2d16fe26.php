<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_01cfb341667f9c4acf7aeeb458672b9fc7c72191a2582ec7bf4696da3afd1252 extends Twig_Template
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
        $__internal_5295d4e5b596791c0bc04dbca589a2120f9731ebb755f3da6e5b1f37831668f8 = $this->env->getExtension("native_profiler");
        $__internal_5295d4e5b596791c0bc04dbca589a2120f9731ebb755f3da6e5b1f37831668f8->enter($__internal_5295d4e5b596791c0bc04dbca589a2120f9731ebb755f3da6e5b1f37831668f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_5295d4e5b596791c0bc04dbca589a2120f9731ebb755f3da6e5b1f37831668f8->leave($__internal_5295d4e5b596791c0bc04dbca589a2120f9731ebb755f3da6e5b1f37831668f8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
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
/* {{ value|date(field_options.format) }}*/
/* */
