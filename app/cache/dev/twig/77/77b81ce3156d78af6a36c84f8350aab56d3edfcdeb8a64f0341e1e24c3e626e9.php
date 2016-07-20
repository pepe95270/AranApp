<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_03e8e1b3f58a7509a8d4e9ea207d1266abcd24af1a67529f493d956fcc638c26 extends Twig_Template
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
        $__internal_0a7486432c8f307db03f56f030623dd4fca3d26371e933fe64d57d460cf62d84 = $this->env->getExtension("native_profiler");
        $__internal_0a7486432c8f307db03f56f030623dd4fca3d26371e933fe64d57d460cf62d84->enter($__internal_0a7486432c8f307db03f56f030623dd4fca3d26371e933fe64d57d460cf62d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_0a7486432c8f307db03f56f030623dd4fca3d26371e933fe64d57d460cf62d84->leave($__internal_0a7486432c8f307db03f56f030623dd4fca3d26371e933fe64d57d460cf62d84_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
