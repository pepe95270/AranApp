<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7720e1f3a3a41e9cba5bbd4dc6e0e6835a2b4559344dc4506c324544b5d0a4e5 extends Twig_Template
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
        $__internal_041580371af1a265eedd5eeb61efdf50d84b7818030e2c99aac0d712f03cd0d0 = $this->env->getExtension("native_profiler");
        $__internal_041580371af1a265eedd5eeb61efdf50d84b7818030e2c99aac0d712f03cd0d0->enter($__internal_041580371af1a265eedd5eeb61efdf50d84b7818030e2c99aac0d712f03cd0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_041580371af1a265eedd5eeb61efdf50d84b7818030e2c99aac0d712f03cd0d0->leave($__internal_041580371af1a265eedd5eeb61efdf50d84b7818030e2c99aac0d712f03cd0d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
