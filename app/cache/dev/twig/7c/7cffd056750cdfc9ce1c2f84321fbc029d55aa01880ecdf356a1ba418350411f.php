<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_85b6ed2a4d7c2c17e36ba3d19ef2de7b4716f3495c92fe2901cb41abb8e6f202 extends Twig_Template
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
        $__internal_5f84bcf03bc99c26acce16c20348bdabccbfa494c2761c47d7a2624197424ab8 = $this->env->getExtension("native_profiler");
        $__internal_5f84bcf03bc99c26acce16c20348bdabccbfa494c2761c47d7a2624197424ab8->enter($__internal_5f84bcf03bc99c26acce16c20348bdabccbfa494c2761c47d7a2624197424ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_5f84bcf03bc99c26acce16c20348bdabccbfa494c2761c47d7a2624197424ab8->leave($__internal_5f84bcf03bc99c26acce16c20348bdabccbfa494c2761c47d7a2624197424ab8_prof);

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
