<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a3bf582221ec73d9444282804531362546e25236bfeea368c7ccfe32c3c317df extends Twig_Template
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
        $__internal_4533434fc4096c71d98b0f16cdeefa0b3f5d087be14824a5d52fb00aade2fb3e = $this->env->getExtension("native_profiler");
        $__internal_4533434fc4096c71d98b0f16cdeefa0b3f5d087be14824a5d52fb00aade2fb3e->enter($__internal_4533434fc4096c71d98b0f16cdeefa0b3f5d087be14824a5d52fb00aade2fb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4533434fc4096c71d98b0f16cdeefa0b3f5d087be14824a5d52fb00aade2fb3e->leave($__internal_4533434fc4096c71d98b0f16cdeefa0b3f5d087be14824a5d52fb00aade2fb3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
