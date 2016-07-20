<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_af3f032e1440a893cfa0a69adaff68cbff363c1001538f6b7e3c36ab0ab6ff78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_10e65fe604d23b44d5697c85b5787fb2f00aff8559f1f103e8177f58451e8fa8 = $this->env->getExtension("native_profiler");
        $__internal_10e65fe604d23b44d5697c85b5787fb2f00aff8559f1f103e8177f58451e8fa8->enter($__internal_10e65fe604d23b44d5697c85b5787fb2f00aff8559f1f103e8177f58451e8fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e65fe604d23b44d5697c85b5787fb2f00aff8559f1f103e8177f58451e8fa8->leave($__internal_10e65fe604d23b44d5697c85b5787fb2f00aff8559f1f103e8177f58451e8fa8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adb271c2edf88700136e5f7678a108c5a60d6bac357888ac950d8ed7f96b76b8 = $this->env->getExtension("native_profiler");
        $__internal_adb271c2edf88700136e5f7678a108c5a60d6bac357888ac950d8ed7f96b76b8->enter($__internal_adb271c2edf88700136e5f7678a108c5a60d6bac357888ac950d8ed7f96b76b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_adb271c2edf88700136e5f7678a108c5a60d6bac357888ac950d8ed7f96b76b8->leave($__internal_adb271c2edf88700136e5f7678a108c5a60d6bac357888ac950d8ed7f96b76b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
