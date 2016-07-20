<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_58202de714811866431c65d9192a4a88ef98de7d3bb270e587cc4806c8924db8 extends Twig_Template
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
        $__internal_15f8f41fc3d06e50ce826c755d1c0decd4d708dc594dae360fe487ee8e71b7b2 = $this->env->getExtension("native_profiler");
        $__internal_15f8f41fc3d06e50ce826c755d1c0decd4d708dc594dae360fe487ee8e71b7b2->enter($__internal_15f8f41fc3d06e50ce826c755d1c0decd4d708dc594dae360fe487ee8e71b7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_15f8f41fc3d06e50ce826c755d1c0decd4d708dc594dae360fe487ee8e71b7b2->leave($__internal_15f8f41fc3d06e50ce826c755d1c0decd4d708dc594dae360fe487ee8e71b7b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
