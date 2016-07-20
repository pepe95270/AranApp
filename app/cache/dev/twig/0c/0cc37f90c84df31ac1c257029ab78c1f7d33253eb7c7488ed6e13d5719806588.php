<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_0ab800ddf732747bb6b6bf8a188824ffcb2cb03ecd1d0d99d63b98f01179a280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9a44b2ced8b792d46c332394846cc98af0aa4b7d773d7b5c0d78c49e12eca2bc = $this->env->getExtension("native_profiler");
        $__internal_9a44b2ced8b792d46c332394846cc98af0aa4b7d773d7b5c0d78c49e12eca2bc->enter($__internal_9a44b2ced8b792d46c332394846cc98af0aa4b7d773d7b5c0d78c49e12eca2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a44b2ced8b792d46c332394846cc98af0aa4b7d773d7b5c0d78c49e12eca2bc->leave($__internal_9a44b2ced8b792d46c332394846cc98af0aa4b7d773d7b5c0d78c49e12eca2bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84338622b2e1bc3eea27346392e12044ecf269387f83a7a1ee447e3d54f20dd1 = $this->env->getExtension("native_profiler");
        $__internal_84338622b2e1bc3eea27346392e12044ecf269387f83a7a1ee447e3d54f20dd1->enter($__internal_84338622b2e1bc3eea27346392e12044ecf269387f83a7a1ee447e3d54f20dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_84338622b2e1bc3eea27346392e12044ecf269387f83a7a1ee447e3d54f20dd1->leave($__internal_84338622b2e1bc3eea27346392e12044ecf269387f83a7a1ee447e3d54f20dd1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
