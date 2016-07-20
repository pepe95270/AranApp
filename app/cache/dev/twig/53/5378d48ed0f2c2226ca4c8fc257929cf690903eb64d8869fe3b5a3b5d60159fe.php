<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_a50978a1884ed744d84245b3598fe3fe86e72217590f4a3fe48580d122f238b9 extends Twig_Template
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
        $__internal_d2867fb773110df5822bb21099216e2fa71af74f2cc3571c78aee72c68250b4a = $this->env->getExtension("native_profiler");
        $__internal_d2867fb773110df5822bb21099216e2fa71af74f2cc3571c78aee72c68250b4a->enter($__internal_d2867fb773110df5822bb21099216e2fa71af74f2cc3571c78aee72c68250b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_d2867fb773110df5822bb21099216e2fa71af74f2cc3571c78aee72c68250b4a->leave($__internal_d2867fb773110df5822bb21099216e2fa71af74f2cc3571c78aee72c68250b4a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
