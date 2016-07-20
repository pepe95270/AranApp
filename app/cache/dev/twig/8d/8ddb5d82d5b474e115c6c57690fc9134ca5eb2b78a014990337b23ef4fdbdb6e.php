<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a7be8e628bd6699b634a7582a89dc83ec65c7732d1c80344256148df897559c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d5016d13bd884b6451a21610e9b13d6a4297c2677b5223d28abe1a0daa53442 = $this->env->getExtension("native_profiler");
        $__internal_1d5016d13bd884b6451a21610e9b13d6a4297c2677b5223d28abe1a0daa53442->enter($__internal_1d5016d13bd884b6451a21610e9b13d6a4297c2677b5223d28abe1a0daa53442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5016d13bd884b6451a21610e9b13d6a4297c2677b5223d28abe1a0daa53442->leave($__internal_1d5016d13bd884b6451a21610e9b13d6a4297c2677b5223d28abe1a0daa53442_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44a92925514429d2295b6edd09f5468c19bb043cf25ff144dd4986a38fdc5137 = $this->env->getExtension("native_profiler");
        $__internal_44a92925514429d2295b6edd09f5468c19bb043cf25ff144dd4986a38fdc5137->enter($__internal_44a92925514429d2295b6edd09f5468c19bb043cf25ff144dd4986a38fdc5137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_44a92925514429d2295b6edd09f5468c19bb043cf25ff144dd4986a38fdc5137->leave($__internal_44a92925514429d2295b6edd09f5468c19bb043cf25ff144dd4986a38fdc5137_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
