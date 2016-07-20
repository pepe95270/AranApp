<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ef8d9f21744513b8dee092ab3f9f81b9c22662ff5c6e14b1b2040194957a737d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_06bb9c3cb2bf915176a1261e5bd705ea8d113738c5945059d29a25c5f3c260e2 = $this->env->getExtension("native_profiler");
        $__internal_06bb9c3cb2bf915176a1261e5bd705ea8d113738c5945059d29a25c5f3c260e2->enter($__internal_06bb9c3cb2bf915176a1261e5bd705ea8d113738c5945059d29a25c5f3c260e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06bb9c3cb2bf915176a1261e5bd705ea8d113738c5945059d29a25c5f3c260e2->leave($__internal_06bb9c3cb2bf915176a1261e5bd705ea8d113738c5945059d29a25c5f3c260e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa459393704081aff7d60a3ad613e75826233050a39ff103c7688c90ebdcf966 = $this->env->getExtension("native_profiler");
        $__internal_fa459393704081aff7d60a3ad613e75826233050a39ff103c7688c90ebdcf966->enter($__internal_fa459393704081aff7d60a3ad613e75826233050a39ff103c7688c90ebdcf966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fa459393704081aff7d60a3ad613e75826233050a39ff103c7688c90ebdcf966->leave($__internal_fa459393704081aff7d60a3ad613e75826233050a39ff103c7688c90ebdcf966_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
