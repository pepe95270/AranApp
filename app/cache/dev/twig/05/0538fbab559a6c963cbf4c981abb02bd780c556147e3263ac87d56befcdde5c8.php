<?php

/* @EasyAdmin/default/field_boolean.html.twig */
class __TwigTemplate_f2c87bb5103f1585415d62318dc005ef3da2e4fd85f2cd0cb483ef93ace67940 extends Twig_Template
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
        $__internal_2b3c3b1db904f528dfe095562bb5af022ef6562fd156841ba1b7525851a322f7 = $this->env->getExtension("native_profiler");
        $__internal_2b3c3b1db904f528dfe095562bb5af022ef6562fd156841ba1b7525851a322f7->enter($__internal_2b3c3b1db904f528dfe095562bb5af022ef6562fd156841ba1b7525851a322f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_2b3c3b1db904f528dfe095562bb5af022ef6562fd156841ba1b7525851a322f7->leave($__internal_2b3c3b1db904f528dfe095562bb5af022ef6562fd156841ba1b7525851a322f7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* {% if value == true %}*/
/*     <span class="label label-success">{{ 'label.true'|trans }}</span>*/
/* {% else %}*/
/*     <span class="label label-danger">{{ 'label.false'|trans }}</span>*/
/* {% endif %}*/
/* */
