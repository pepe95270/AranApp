<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7d95e79f784ee4c05f1a7aeb4e43cb86addcd3e8d4e379205230a2e80ac38725 extends Twig_Template
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
        $__internal_0a64c2ce0ec9a72dbaa913b395733ea4563976e049210c1fc329a568736a9206 = $this->env->getExtension("native_profiler");
        $__internal_0a64c2ce0ec9a72dbaa913b395733ea4563976e049210c1fc329a568736a9206->enter($__internal_0a64c2ce0ec9a72dbaa913b395733ea4563976e049210c1fc329a568736a9206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0a64c2ce0ec9a72dbaa913b395733ea4563976e049210c1fc329a568736a9206->leave($__internal_0a64c2ce0ec9a72dbaa913b395733ea4563976e049210c1fc329a568736a9206_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
