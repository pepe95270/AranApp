<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_dbc9f6bb81c116d7dd582ea4d11dfa369d665ef9cecfa2e71d88af18ddf2ba9c extends Twig_Template
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
        $__internal_0db3f458cce5f95a2a2783a1e96e813aa361f5ac707d745751586e64f642128d = $this->env->getExtension("native_profiler");
        $__internal_0db3f458cce5f95a2a2783a1e96e813aa361f5ac707d745751586e64f642128d->enter($__internal_0db3f458cce5f95a2a2783a1e96e813aa361f5ac707d745751586e64f642128d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_0db3f458cce5f95a2a2783a1e96e813aa361f5ac707d745751586e64f642128d->leave($__internal_0db3f458cce5f95a2a2783a1e96e813aa361f5ac707d745751586e64f642128d_prof);

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
