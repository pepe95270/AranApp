<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_280bef26306c7a898b7a6ebcb2484146a4ed147f7a97fbd8b507a0a309b60a4b extends Twig_Template
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
        $__internal_0a3da20229b454c569edb04f094e39ea0fa7656b31cc1934e86788390b9e1688 = $this->env->getExtension("native_profiler");
        $__internal_0a3da20229b454c569edb04f094e39ea0fa7656b31cc1934e86788390b9e1688->enter($__internal_0a3da20229b454c569edb04f094e39ea0fa7656b31cc1934e86788390b9e1688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        echo "
";
        
        $__internal_0a3da20229b454c569edb04f094e39ea0fa7656b31cc1934e86788390b9e1688->leave($__internal_0a3da20229b454c569edb04f094e39ea0fa7656b31cc1934e86788390b9e1688_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ value|raw }}*/
/* */
