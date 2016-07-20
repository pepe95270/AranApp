<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_15dbbc14faf23d413108cdd44140a0e3b11a23d71f962628b0855e12d0150cb9 extends Twig_Template
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
        $__internal_0151f67c82ccc951b24b49cddd0d2f58e5675549b5e7fe0d86be08c24b95183c = $this->env->getExtension("native_profiler");
        $__internal_0151f67c82ccc951b24b49cddd0d2f58e5675549b5e7fe0d86be08c24b95183c->enter($__internal_0151f67c82ccc951b24b49cddd0d2f58e5675549b5e7fe0d86be08c24b95183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0151f67c82ccc951b24b49cddd0d2f58e5675549b5e7fe0d86be08c24b95183c->leave($__internal_0151f67c82ccc951b24b49cddd0d2f58e5675549b5e7fe0d86be08c24b95183c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
