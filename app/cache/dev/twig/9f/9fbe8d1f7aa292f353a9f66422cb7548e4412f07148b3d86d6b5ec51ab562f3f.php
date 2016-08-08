<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c804b405f9ed48345ca21002e30c06688e24898a1bc5fa6d475ef0b449b55743 extends Twig_Template
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
        $__internal_0afb5935745c4853d88a497f600e29084d02e6a1f41f215868d649bf0ff02f45 = $this->env->getExtension("native_profiler");
        $__internal_0afb5935745c4853d88a497f600e29084d02e6a1f41f215868d649bf0ff02f45->enter($__internal_0afb5935745c4853d88a497f600e29084d02e6a1f41f215868d649bf0ff02f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0afb5935745c4853d88a497f600e29084d02e6a1f41f215868d649bf0ff02f45->leave($__internal_0afb5935745c4853d88a497f600e29084d02e6a1f41f215868d649bf0ff02f45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
