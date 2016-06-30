<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_529b54136c16d40c180dea72ae566fdc11773a4340278ca67ea1c9c82656d78b extends Twig_Template
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
        $__internal_995a1f723c9c7beca43a3f501bc1e5af3fa23fcc18231cef0f2d07ddbe006e5f = $this->env->getExtension("native_profiler");
        $__internal_995a1f723c9c7beca43a3f501bc1e5af3fa23fcc18231cef0f2d07ddbe006e5f->enter($__internal_995a1f723c9c7beca43a3f501bc1e5af3fa23fcc18231cef0f2d07ddbe006e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_995a1f723c9c7beca43a3f501bc1e5af3fa23fcc18231cef0f2d07ddbe006e5f->leave($__internal_995a1f723c9c7beca43a3f501bc1e5af3fa23fcc18231cef0f2d07ddbe006e5f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
