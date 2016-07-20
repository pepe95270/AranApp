<?php

/* @EasyAdmin/default/field_boolean.html.twig */
class __TwigTemplate_b0c5ab656803ddc0287bb03f99a477a783a4bc4b386e6d76bd854c20f288cb59 extends Twig_Template
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
        $__internal_75f4e84d132b113dd6c5f2b2f7f753ce55c7396798b3a228e5fdf19c2751a5ba = $this->env->getExtension("native_profiler");
        $__internal_75f4e84d132b113dd6c5f2b2f7f753ce55c7396798b3a228e5fdf19c2751a5ba->enter($__internal_75f4e84d132b113dd6c5f2b2f7f753ce55c7396798b3a228e5fdf19c2751a5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_boolean.html.twig"));

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
        
        $__internal_75f4e84d132b113dd6c5f2b2f7f753ce55c7396798b3a228e5fdf19c2751a5ba->leave($__internal_75f4e84d132b113dd6c5f2b2f7f753ce55c7396798b3a228e5fdf19c2751a5ba_prof);

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
