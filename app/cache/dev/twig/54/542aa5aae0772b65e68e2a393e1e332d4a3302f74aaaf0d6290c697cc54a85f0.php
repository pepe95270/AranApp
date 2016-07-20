<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_32d0e17496ddf67930e34bdad3c6f513c124f448af2ee3a20eac52cdc1bb7351 extends Twig_Template
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
        $__internal_0067663272e254772f0ea49b8e82ed8e8c2538300c57df6eda57af68f9c696e8 = $this->env->getExtension("native_profiler");
        $__internal_0067663272e254772f0ea49b8e82ed8e8c2538300c57df6eda57af68f9c696e8->enter($__internal_0067663272e254772f0ea49b8e82ed8e8c2538300c57df6eda57af68f9c696e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_0067663272e254772f0ea49b8e82ed8e8c2538300c57df6eda57af68f9c696e8->leave($__internal_0067663272e254772f0ea49b8e82ed8e8c2538300c57df6eda57af68f9c696e8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
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
