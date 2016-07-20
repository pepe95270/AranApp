<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_546a952a7335af54fd892b5220de45eb1a3a4b5996ba60e96624d4687d962881 extends Twig_Template
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
        $__internal_9f51a1258f52a4bebbea8c469a440016752ef8ba3641ac1e745c7ef030b0a61f = $this->env->getExtension("native_profiler");
        $__internal_9f51a1258f52a4bebbea8c469a440016752ef8ba3641ac1e745c7ef030b0a61f->enter($__internal_9f51a1258f52a4bebbea8c469a440016752ef8ba3641ac1e745c7ef030b0a61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_9f51a1258f52a4bebbea8c469a440016752ef8ba3641ac1e745c7ef030b0a61f->leave($__internal_9f51a1258f52a4bebbea8c469a440016752ef8ba3641ac1e745c7ef030b0a61f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
