<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_00ed4079892bd80f8216c13c62720763c467b937a8626e0263d1868390984465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c6d0814c97d05b2448a1575a78c79b84a05f7c565784c37276d241977d63c58d = $this->env->getExtension("native_profiler");
        $__internal_c6d0814c97d05b2448a1575a78c79b84a05f7c565784c37276d241977d63c58d->enter($__internal_c6d0814c97d05b2448a1575a78c79b84a05f7c565784c37276d241977d63c58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d0814c97d05b2448a1575a78c79b84a05f7c565784c37276d241977d63c58d->leave($__internal_c6d0814c97d05b2448a1575a78c79b84a05f7c565784c37276d241977d63c58d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ddac2f981eec3223d9b5e587a26e09d45cd0a93cabf001a806c1e8a0b2e482b = $this->env->getExtension("native_profiler");
        $__internal_4ddac2f981eec3223d9b5e587a26e09d45cd0a93cabf001a806c1e8a0b2e482b->enter($__internal_4ddac2f981eec3223d9b5e587a26e09d45cd0a93cabf001a806c1e8a0b2e482b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4ddac2f981eec3223d9b5e587a26e09d45cd0a93cabf001a806c1e8a0b2e482b->leave($__internal_4ddac2f981eec3223d9b5e587a26e09d45cd0a93cabf001a806c1e8a0b2e482b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
