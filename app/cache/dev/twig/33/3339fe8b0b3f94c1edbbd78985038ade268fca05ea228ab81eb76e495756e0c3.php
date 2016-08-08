<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_24f157c519f333fcabaa9b67dfdf01c28586d28b35f8dbbe86fdfac978763924 extends Twig_Template
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
        $__internal_a6d74b59562969cbe12a77dab9ed08f444abb2efc7ecb784215dcf4f2701abb8 = $this->env->getExtension("native_profiler");
        $__internal_a6d74b59562969cbe12a77dab9ed08f444abb2efc7ecb784215dcf4f2701abb8->enter($__internal_a6d74b59562969cbe12a77dab9ed08f444abb2efc7ecb784215dcf4f2701abb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

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
        
        $__internal_a6d74b59562969cbe12a77dab9ed08f444abb2efc7ecb784215dcf4f2701abb8->leave($__internal_a6d74b59562969cbe12a77dab9ed08f444abb2efc7ecb784215dcf4f2701abb8_prof);

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
