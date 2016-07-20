<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_84b94515d2300af4b044c28e74a080893c652fd98c6badd90b930292799cfb2b extends Twig_Template
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
        $__internal_ae5b60679c991aff9fb77d662be04a15f1fe926470e619ea347fed019cdd71b7 = $this->env->getExtension("native_profiler");
        $__internal_ae5b60679c991aff9fb77d662be04a15f1fe926470e619ea347fed019cdd71b7->enter($__internal_ae5b60679c991aff9fb77d662be04a15f1fe926470e619ea347fed019cdd71b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_ae5b60679c991aff9fb77d662be04a15f1fe926470e619ea347fed019cdd71b7->leave($__internal_ae5b60679c991aff9fb77d662be04a15f1fe926470e619ea347fed019cdd71b7_prof);

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
