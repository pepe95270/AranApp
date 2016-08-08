<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_4de921f5cdab256ebe395af7ab172706f9447ee543f845247d939084cb96a55c extends Twig_Template
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
        $__internal_773387e6f721b427aa2a22ad4dcde6e24741d10fe15735df6e1487079eb16a88 = $this->env->getExtension("native_profiler");
        $__internal_773387e6f721b427aa2a22ad4dcde6e24741d10fe15735df6e1487079eb16a88->enter($__internal_773387e6f721b427aa2a22ad4dcde6e24741d10fe15735df6e1487079eb16a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_773387e6f721b427aa2a22ad4dcde6e24741d10fe15735df6e1487079eb16a88->leave($__internal_773387e6f721b427aa2a22ad4dcde6e24741d10fe15735df6e1487079eb16a88_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
/*     {{ value|number_format(2) }}*/
/* {% endif %}*/
/* */
