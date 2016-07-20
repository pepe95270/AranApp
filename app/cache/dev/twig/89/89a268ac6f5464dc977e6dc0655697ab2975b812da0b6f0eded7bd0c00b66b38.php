<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7201cbc517b1fb6f00fadc879e01076374f046555a03f0c4eeb2634c667cc73b extends Twig_Template
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
        $__internal_cc1b930f028d681ff61e0fc0361726cd9091fbe8c6feb3aabdfb6d6fe8cbd119 = $this->env->getExtension("native_profiler");
        $__internal_cc1b930f028d681ff61e0fc0361726cd9091fbe8c6feb3aabdfb6d6fe8cbd119->enter($__internal_cc1b930f028d681ff61e0fc0361726cd9091fbe8c6feb3aabdfb6d6fe8cbd119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_cc1b930f028d681ff61e0fc0361726cd9091fbe8c6feb3aabdfb6d6fe8cbd119->leave($__internal_cc1b930f028d681ff61e0fc0361726cd9091fbe8c6feb3aabdfb6d6fe8cbd119_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
