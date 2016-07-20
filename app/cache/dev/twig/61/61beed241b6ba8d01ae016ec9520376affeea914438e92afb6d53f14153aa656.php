<?php

/* @EasyAdmin/default/field_bigint.html.twig */
class __TwigTemplate_288760ea3ceed5dd387dfde2f413cfd70b8ebe907d5a4c55cfdb85af37e5cd21 extends Twig_Template
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
        $__internal_fa2fd94f2a54d68848f122031e9b8c215ab862a55f61de32965c2ae57129aa94 = $this->env->getExtension("native_profiler");
        $__internal_fa2fd94f2a54d68848f122031e9b8c215ab862a55f61de32965c2ae57129aa94->enter($__internal_fa2fd94f2a54d68848f122031e9b8c215ab862a55f61de32965c2ae57129aa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_bigint.html.twig"));

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
        
        $__internal_fa2fd94f2a54d68848f122031e9b8c215ab862a55f61de32965c2ae57129aa94->leave($__internal_fa2fd94f2a54d68848f122031e9b8c215ab862a55f61de32965c2ae57129aa94_prof);

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
