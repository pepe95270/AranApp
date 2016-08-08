<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_84f8479308130a3385677b690d24a0193e79d5abe5a073c22bb3b9af6d47597c extends Twig_Template
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
        $__internal_0d9ee8edea7fe61c506b017195081d24874cecf282a392b1922ec46071b39f39 = $this->env->getExtension("native_profiler");
        $__internal_0d9ee8edea7fe61c506b017195081d24874cecf282a392b1922ec46071b39f39->enter($__internal_0d9ee8edea7fe61c506b017195081d24874cecf282a392b1922ec46071b39f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_0d9ee8edea7fe61c506b017195081d24874cecf282a392b1922ec46071b39f39->leave($__internal_0d9ee8edea7fe61c506b017195081d24874cecf282a392b1922ec46071b39f39_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
