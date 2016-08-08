<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_bdbb2b78ca90da24fe8e49d5a0db94921fe8164d5cc92bb51e2f3d5fc4a0b7cc extends Twig_Template
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
        $__internal_acf182773574f1b45ff2e283fd3a1086e527610c9d4011439191bf98d3b2070e = $this->env->getExtension("native_profiler");
        $__internal_acf182773574f1b45ff2e283fd3a1086e527610c9d4011439191bf98d3b2070e->enter($__internal_acf182773574f1b45ff2e283fd3a1086e527610c9d4011439191bf98d3b2070e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_acf182773574f1b45ff2e283fd3a1086e527610c9d4011439191bf98d3b2070e->leave($__internal_acf182773574f1b45ff2e283fd3a1086e527610c9d4011439191bf98d3b2070e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
