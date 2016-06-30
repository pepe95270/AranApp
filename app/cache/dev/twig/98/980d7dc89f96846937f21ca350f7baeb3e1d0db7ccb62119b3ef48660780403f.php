<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_3bfed3435c7b9391ec84eab928f9afd1bc569d869e87f741dcd1bb4531fc2e2c extends Twig_Template
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
        $__internal_9a7644b97aa949d541ba0c0bb8d6777bc341d8757834ce62194da5f53cd56fdb = $this->env->getExtension("native_profiler");
        $__internal_9a7644b97aa949d541ba0c0bb8d6777bc341d8757834ce62194da5f53cd56fdb->enter($__internal_9a7644b97aa949d541ba0c0bb8d6777bc341d8757834ce62194da5f53cd56fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_9a7644b97aa949d541ba0c0bb8d6777bc341d8757834ce62194da5f53cd56fdb->leave($__internal_9a7644b97aa949d541ba0c0bb8d6777bc341d8757834ce62194da5f53cd56fdb_prof);

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
