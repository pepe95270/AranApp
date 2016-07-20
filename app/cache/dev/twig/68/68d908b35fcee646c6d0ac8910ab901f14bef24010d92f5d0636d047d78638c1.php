<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_36e84c5f131e290f5ea106c94045c019bb43636d75216ae71a2cb96c2a3e4f35 extends Twig_Template
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
        $__internal_07b3633d079181b702c05087ff7396253bf39d6f1b5d6aab908f102db79d0906 = $this->env->getExtension("native_profiler");
        $__internal_07b3633d079181b702c05087ff7396253bf39d6f1b5d6aab908f102db79d0906->enter($__internal_07b3633d079181b702c05087ff7396253bf39d6f1b5d6aab908f102db79d0906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_07b3633d079181b702c05087ff7396253bf39d6f1b5d6aab908f102db79d0906->leave($__internal_07b3633d079181b702c05087ff7396253bf39d6f1b5d6aab908f102db79d0906_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
