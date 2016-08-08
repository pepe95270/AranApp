<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_4b2fb9a0275e7c553056726c43a3773b3987671a032bc52b6370f8d4bc31c174 extends Twig_Template
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
        $__internal_ae49955bbad49189302b97cedc06046041d03c38bd0b127635009a6f89afe502 = $this->env->getExtension("native_profiler");
        $__internal_ae49955bbad49189302b97cedc06046041d03c38bd0b127635009a6f89afe502->enter($__internal_ae49955bbad49189302b97cedc06046041d03c38bd0b127635009a6f89afe502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ae49955bbad49189302b97cedc06046041d03c38bd0b127635009a6f89afe502->leave($__internal_ae49955bbad49189302b97cedc06046041d03c38bd0b127635009a6f89afe502_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
