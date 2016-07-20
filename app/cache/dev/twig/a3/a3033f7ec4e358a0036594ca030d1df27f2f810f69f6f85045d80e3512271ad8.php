<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_ef833d3585cfcdae1eba16e582a393e74c1c5c4c8f0038d920bb403be74d6a94 extends Twig_Template
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
        $__internal_c12e9cdf933624d8f64ac1e6044a405bba8fd8c22176a0b9f4b79fc7d1d6ff0e = $this->env->getExtension("native_profiler");
        $__internal_c12e9cdf933624d8f64ac1e6044a405bba8fd8c22176a0b9f4b79fc7d1d6ff0e->enter($__internal_c12e9cdf933624d8f64ac1e6044a405bba8fd8c22176a0b9f4b79fc7d1d6ff0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_c12e9cdf933624d8f64ac1e6044a405bba8fd8c22176a0b9f4b79fc7d1d6ff0e->leave($__internal_c12e9cdf933624d8f64ac1e6044a405bba8fd8c22176a0b9f4b79fc7d1d6ff0e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
/* <a href="tel:{{ value }}">{{ value }}</a>*/
/* */
