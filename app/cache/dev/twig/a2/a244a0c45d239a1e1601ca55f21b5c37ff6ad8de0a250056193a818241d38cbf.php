<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_42fd781d5954c107074e887acb097276f08de69ed209b1c09de9dba22eae3219 extends Twig_Template
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
        $__internal_e341e2e09c69eb61b69e3ec1944f42cc02edbf65f03ee50bc64d1b7e27e602e1 = $this->env->getExtension("native_profiler");
        $__internal_e341e2e09c69eb61b69e3ec1944f42cc02edbf65f03ee50bc64d1b7e27e602e1->enter($__internal_e341e2e09c69eb61b69e3ec1944f42cc02edbf65f03ee50bc64d1b7e27e602e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_e341e2e09c69eb61b69e3ec1944f42cc02edbf65f03ee50bc64d1b7e27e602e1->leave($__internal_e341e2e09c69eb61b69e3ec1944f42cc02edbf65f03ee50bc64d1b7e27e602e1_prof);

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
