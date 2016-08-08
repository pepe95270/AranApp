<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_df0761bae8d1c2fac1b601d5b1ef18c3d2165ada9929359f60937a9149746fa2 extends Twig_Template
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
        $__internal_1a46a9d01a59a6e13652e2f570b319ac813dd1d546f13ba7cd29940248940f08 = $this->env->getExtension("native_profiler");
        $__internal_1a46a9d01a59a6e13652e2f570b319ac813dd1d546f13ba7cd29940248940f08->enter($__internal_1a46a9d01a59a6e13652e2f570b319ac813dd1d546f13ba7cd29940248940f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_1a46a9d01a59a6e13652e2f570b319ac813dd1d546f13ba7cd29940248940f08->leave($__internal_1a46a9d01a59a6e13652e2f570b319ac813dd1d546f13ba7cd29940248940f08_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     <a href="mailto:{{ value }}">{{ value }}</a>*/
/* {% else %}*/
/*     <a href="mailto:{{ value }}">{{ value|easyadmin_truncate }}</a>*/
/* {% endif %}*/
/* */
