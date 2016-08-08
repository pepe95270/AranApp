<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_04d8d193554d7c7cdc5a2d63de30f76a476ebfb66130b7686b89c1a73b3f10a8 extends Twig_Template
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
        $__internal_0662a6f06678cbf6dd350b1cee9c85ac55c0442a9e68e7d6da187b1ad8b3d137 = $this->env->getExtension("native_profiler");
        $__internal_0662a6f06678cbf6dd350b1cee9c85ac55c0442a9e68e7d6da187b1ad8b3d137->enter($__internal_0662a6f06678cbf6dd350b1cee9c85ac55c0442a9e68e7d6da187b1ad8b3d137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_0662a6f06678cbf6dd350b1cee9c85ac55c0442a9e68e7d6da187b1ad8b3d137->leave($__internal_0662a6f06678cbf6dd350b1cee9c85ac55c0442a9e68e7d6da187b1ad8b3d137_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
/* <a href="tel:{{ value }}">{{ value }}</a>*/
/* */
