<?php

/* @EasyAdmin/default/field_bigint.html.twig */
class __TwigTemplate_dbf75f1d79c832ffcb8c0823e3f9228fb099d8dbf656fac582668c9e13941f36 extends Twig_Template
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
        $__internal_90e231b07cbdcb0ba2664ece1dbc2b237558ad8db3e60504c489862af4f8d9c2 = $this->env->getExtension("native_profiler");
        $__internal_90e231b07cbdcb0ba2664ece1dbc2b237558ad8db3e60504c489862af4f8d9c2->enter($__internal_90e231b07cbdcb0ba2664ece1dbc2b237558ad8db3e60504c489862af4f8d9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_90e231b07cbdcb0ba2664ece1dbc2b237558ad8db3e60504c489862af4f8d9c2->leave($__internal_90e231b07cbdcb0ba2664ece1dbc2b237558ad8db3e60504c489862af4f8d9c2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_bigint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
