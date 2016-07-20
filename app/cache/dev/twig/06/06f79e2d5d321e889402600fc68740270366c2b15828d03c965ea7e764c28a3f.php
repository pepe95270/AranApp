<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_5e81503e03c39722a38be92ce188bec8d084559fd29b536de822a4dbc6adfba8 extends Twig_Template
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
        $__internal_8fef7d9dd97b06e78a1cab95c87b3570913839cd83cf9cbab12198aa7daf7ea0 = $this->env->getExtension("native_profiler");
        $__internal_8fef7d9dd97b06e78a1cab95c87b3570913839cd83cf9cbab12198aa7daf7ea0->enter($__internal_8fef7d9dd97b06e78a1cab95c87b3570913839cd83cf9cbab12198aa7daf7ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_8fef7d9dd97b06e78a1cab95c87b3570913839cd83cf9cbab12198aa7daf7ea0->leave($__internal_8fef7d9dd97b06e78a1cab95c87b3570913839cd83cf9cbab12198aa7daf7ea0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
