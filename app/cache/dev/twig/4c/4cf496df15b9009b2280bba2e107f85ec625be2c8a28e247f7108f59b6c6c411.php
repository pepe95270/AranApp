<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_f2f694018c1b9b6d0ea6a0d6fa443da3afe614e7ff22cc083498b2fb9cef4e57 extends Twig_Template
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
        $__internal_0a66082acdaae1863e8f2ffa979a7c28db56180be9ba35cb630d3d825cd6a930 = $this->env->getExtension("native_profiler");
        $__internal_0a66082acdaae1863e8f2ffa979a7c28db56180be9ba35cb630d3d825cd6a930->enter($__internal_0a66082acdaae1863e8f2ffa979a7c28db56180be9ba35cb630d3d825cd6a930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_0a66082acdaae1863e8f2ffa979a7c28db56180be9ba35cb630d3d825cd6a930->leave($__internal_0a66082acdaae1863e8f2ffa979a7c28db56180be9ba35cb630d3d825cd6a930_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */
