<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d86e2dcc41f39fbae54b0e43b632813909bbdc5c0ca32f4f61e2727c07d9f507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9d2b419537504d8b008d4df2cab407f8c82b2ae3b6b70d612aec1de0f109d886 = $this->env->getExtension("native_profiler");
        $__internal_9d2b419537504d8b008d4df2cab407f8c82b2ae3b6b70d612aec1de0f109d886->enter($__internal_9d2b419537504d8b008d4df2cab407f8c82b2ae3b6b70d612aec1de0f109d886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2b419537504d8b008d4df2cab407f8c82b2ae3b6b70d612aec1de0f109d886->leave($__internal_9d2b419537504d8b008d4df2cab407f8c82b2ae3b6b70d612aec1de0f109d886_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b632f9fb237aa072d5ed6d249c1ddf19fed427333f48d8ba595149610ffc078e = $this->env->getExtension("native_profiler");
        $__internal_b632f9fb237aa072d5ed6d249c1ddf19fed427333f48d8ba595149610ffc078e->enter($__internal_b632f9fb237aa072d5ed6d249c1ddf19fed427333f48d8ba595149610ffc078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b632f9fb237aa072d5ed6d249c1ddf19fed427333f48d8ba595149610ffc078e->leave($__internal_b632f9fb237aa072d5ed6d249c1ddf19fed427333f48d8ba595149610ffc078e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
