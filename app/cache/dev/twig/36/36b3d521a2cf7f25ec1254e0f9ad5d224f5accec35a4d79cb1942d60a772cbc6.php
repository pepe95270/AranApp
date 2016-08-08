<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_90d7c15c2898f842567c7cf3c1f10e4a230be8ad43e11cd3c4f0012cb0162a98 extends Twig_Template
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
        $__internal_d9c453e553e73e897d7164afeaa53fbe4df55d505db4ff556a90f8d4759af910 = $this->env->getExtension("native_profiler");
        $__internal_d9c453e553e73e897d7164afeaa53fbe4df55d505db4ff556a90f8d4759af910->enter($__internal_d9c453e553e73e897d7164afeaa53fbe4df55d505db4ff556a90f8d4759af910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_d9c453e553e73e897d7164afeaa53fbe4df55d505db4ff556a90f8d4759af910->leave($__internal_d9c453e553e73e897d7164afeaa53fbe4df55d505db4ff556a90f8d4759af910_prof);

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
