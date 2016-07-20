<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b03d98d47a9a7b67e3fdb8303911751d0ed64b0f3e8033632c66577652df4d1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_dc6545038e6b73a7bbb2b7d1049f7600561408ea1951d36d8eaa8b3f21490352 = $this->env->getExtension("native_profiler");
        $__internal_dc6545038e6b73a7bbb2b7d1049f7600561408ea1951d36d8eaa8b3f21490352->enter($__internal_dc6545038e6b73a7bbb2b7d1049f7600561408ea1951d36d8eaa8b3f21490352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc6545038e6b73a7bbb2b7d1049f7600561408ea1951d36d8eaa8b3f21490352->leave($__internal_dc6545038e6b73a7bbb2b7d1049f7600561408ea1951d36d8eaa8b3f21490352_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_097c8eda4b7a7681240a6f6b51c458ec1df6bf85c48d738c421f2a6e30e780cd = $this->env->getExtension("native_profiler");
        $__internal_097c8eda4b7a7681240a6f6b51c458ec1df6bf85c48d738c421f2a6e30e780cd->enter($__internal_097c8eda4b7a7681240a6f6b51c458ec1df6bf85c48d738c421f2a6e30e780cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_097c8eda4b7a7681240a6f6b51c458ec1df6bf85c48d738c421f2a6e30e780cd->leave($__internal_097c8eda4b7a7681240a6f6b51c458ec1df6bf85c48d738c421f2a6e30e780cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
