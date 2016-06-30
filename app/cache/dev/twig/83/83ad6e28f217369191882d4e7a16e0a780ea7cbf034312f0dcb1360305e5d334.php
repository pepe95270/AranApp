<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_63067f2ca52bc30993b22f4097736dc6e439b087a64123fc0ed4559acad647e0 extends Twig_Template
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
        $__internal_f27e77a6acbb4043f004a75f8ce4b2c9c38a494e4ed66c7ee94934a675b704e0 = $this->env->getExtension("native_profiler");
        $__internal_f27e77a6acbb4043f004a75f8ce4b2c9c38a494e4ed66c7ee94934a675b704e0->enter($__internal_f27e77a6acbb4043f004a75f8ce4b2c9c38a494e4ed66c7ee94934a675b704e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_f27e77a6acbb4043f004a75f8ce4b2c9c38a494e4ed66c7ee94934a675b704e0->leave($__internal_f27e77a6acbb4043f004a75f8ce4b2c9c38a494e4ed66c7ee94934a675b704e0_prof);

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
