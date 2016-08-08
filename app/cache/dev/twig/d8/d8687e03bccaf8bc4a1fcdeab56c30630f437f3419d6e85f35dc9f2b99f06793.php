<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_2e16fb5da9393502bf677eb2f4341cea03dd48a693dc473ef633b3e43fd77bf1 extends Twig_Template
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
        $__internal_32aa8f3f3090ed67078b9a75e50ae34cfd0a6e57920900b3f9867b313e345dcf = $this->env->getExtension("native_profiler");
        $__internal_32aa8f3f3090ed67078b9a75e50ae34cfd0a6e57920900b3f9867b313e345dcf->enter($__internal_32aa8f3f3090ed67078b9a75e50ae34cfd0a6e57920900b3f9867b313e345dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_32aa8f3f3090ed67078b9a75e50ae34cfd0a6e57920900b3f9867b313e345dcf->leave($__internal_32aa8f3f3090ed67078b9a75e50ae34cfd0a6e57920900b3f9867b313e345dcf_prof);

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
