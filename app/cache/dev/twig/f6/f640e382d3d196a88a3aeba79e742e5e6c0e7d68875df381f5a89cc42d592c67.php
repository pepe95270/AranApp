<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_340847d0c308992311ac514b0a0cca5b162475754079912e42a966e3c979a131 extends Twig_Template
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
        $__internal_a161cf599e4b286abeaa1bf4bbbe8e4eae7eedf56bd539e71557c2741f39e397 = $this->env->getExtension("native_profiler");
        $__internal_a161cf599e4b286abeaa1bf4bbbe8e4eae7eedf56bd539e71557c2741f39e397->enter($__internal_a161cf599e4b286abeaa1bf4bbbe8e4eae7eedf56bd539e71557c2741f39e397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

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
        
        $__internal_a161cf599e4b286abeaa1bf4bbbe8e4eae7eedf56bd539e71557c2741f39e397->leave($__internal_a161cf599e4b286abeaa1bf4bbbe8e4eae7eedf56bd539e71557c2741f39e397_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
