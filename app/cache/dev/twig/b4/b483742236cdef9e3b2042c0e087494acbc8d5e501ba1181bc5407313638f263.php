<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_86e30450676ca43a487b9f9c268c0b4c7d4e0b61f3cc153379e60ab1089d7ee3 extends Twig_Template
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
        $__internal_3746ab0f5dde53f96a7c889c9293e6a94dfe8db5e85bad0e3fc994201f2b6c87 = $this->env->getExtension("native_profiler");
        $__internal_3746ab0f5dde53f96a7c889c9293e6a94dfe8db5e85bad0e3fc994201f2b6c87->enter($__internal_3746ab0f5dde53f96a7c889c9293e6a94dfe8db5e85bad0e3fc994201f2b6c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_3746ab0f5dde53f96a7c889c9293e6a94dfe8db5e85bad0e3fc994201f2b6c87->leave($__internal_3746ab0f5dde53f96a7c889c9293e6a94dfe8db5e85bad0e3fc994201f2b6c87_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
