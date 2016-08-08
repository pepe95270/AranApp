<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_3fe422dd1d226810ce0c0783e018c2a0d327f55fc520de447e9d4560b159b0e7 extends Twig_Template
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
        $__internal_5f09dc5b4eccc02629a7d744f05a6dcac67f795e0606e0da58ae5c4bc577d744 = $this->env->getExtension("native_profiler");
        $__internal_5f09dc5b4eccc02629a7d744f05a6dcac67f795e0606e0da58ae5c4bc577d744->enter($__internal_5f09dc5b4eccc02629a7d744f05a6dcac67f795e0606e0da58ae5c4bc577d744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_5f09dc5b4eccc02629a7d744f05a6dcac67f795e0606e0da58ae5c4bc577d744->leave($__internal_5f09dc5b4eccc02629a7d744f05a6dcac67f795e0606e0da58ae5c4bc577d744_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
