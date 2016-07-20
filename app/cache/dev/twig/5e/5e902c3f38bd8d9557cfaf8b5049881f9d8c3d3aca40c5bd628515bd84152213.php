<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_d05a2b1d7ce7524cb18d2e6ff5a85e378713977dfa8532059fa9196768408863 extends Twig_Template
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
        $__internal_70715b2ed9496a62b65fd2b1550bb595cd2ee2daf8b0363e69f6677edcb48510 = $this->env->getExtension("native_profiler");
        $__internal_70715b2ed9496a62b65fd2b1550bb595cd2ee2daf8b0363e69f6677edcb48510->enter($__internal_70715b2ed9496a62b65fd2b1550bb595cd2ee2daf8b0363e69f6677edcb48510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_70715b2ed9496a62b65fd2b1550bb595cd2ee2daf8b0363e69f6677edcb48510->leave($__internal_70715b2ed9496a62b65fd2b1550bb595cd2ee2daf8b0363e69f6677edcb48510_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
/*     {{ value }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate(7) }}*/
/* {% endif %}*/
/* */
