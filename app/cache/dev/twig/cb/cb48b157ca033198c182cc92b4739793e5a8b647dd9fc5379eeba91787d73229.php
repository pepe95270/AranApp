<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d869ede556e67bead14966b59edd95681475a975e59f02dd2fbc47453d3f6cac extends Twig_Template
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
        $__internal_31e1e3838bc6ad11fc7a7b4376998662d58f9a813a65b2d08d6c5b4ca23dc5c9 = $this->env->getExtension("native_profiler");
        $__internal_31e1e3838bc6ad11fc7a7b4376998662d58f9a813a65b2d08d6c5b4ca23dc5c9->enter($__internal_31e1e3838bc6ad11fc7a7b4376998662d58f9a813a65b2d08d6c5b4ca23dc5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_31e1e3838bc6ad11fc7a7b4376998662d58f9a813a65b2d08d6c5b4ca23dc5c9->leave($__internal_31e1e3838bc6ad11fc7a7b4376998662d58f9a813a65b2d08d6c5b4ca23dc5c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
