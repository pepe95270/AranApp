<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_6b3b97316527ae81f577dbef06007134493dd0bfdae8d538c33c9198f68c53ab extends Twig_Template
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
        $__internal_de6c7dad33e2a64ae816da80d04b5c29da6e806dcebfee54104bd7e5d616fe5f = $this->env->getExtension("native_profiler");
        $__internal_de6c7dad33e2a64ae816da80d04b5c29da6e806dcebfee54104bd7e5d616fe5f->enter($__internal_de6c7dad33e2a64ae816da80d04b5c29da6e806dcebfee54104bd7e5d616fe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_de6c7dad33e2a64ae816da80d04b5c29da6e806dcebfee54104bd7e5d616fe5f->leave($__internal_de6c7dad33e2a64ae816da80d04b5c29da6e806dcebfee54104bd7e5d616fe5f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
/* {{ value|date(field_options.format) }}*/
/* */
