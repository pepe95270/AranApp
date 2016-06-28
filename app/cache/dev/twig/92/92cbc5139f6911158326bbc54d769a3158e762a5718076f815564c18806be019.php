<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f8e60dae3454ec938cb15b581dd6cc5bf23ba43d390b46d7588fba02b9c8b9fa extends Twig_Template
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
        $__internal_14b88baac988991c6bda1aab6423266da3b76a0804a36e9d1e2f0c9d7df333ef = $this->env->getExtension("native_profiler");
        $__internal_14b88baac988991c6bda1aab6423266da3b76a0804a36e9d1e2f0c9d7df333ef->enter($__internal_14b88baac988991c6bda1aab6423266da3b76a0804a36e9d1e2f0c9d7df333ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b88baac988991c6bda1aab6423266da3b76a0804a36e9d1e2f0c9d7df333ef->leave($__internal_14b88baac988991c6bda1aab6423266da3b76a0804a36e9d1e2f0c9d7df333ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f983ab35ed0f89780ca8705f52fbff339f30a9e603069e13705f0a7934e44a2 = $this->env->getExtension("native_profiler");
        $__internal_9f983ab35ed0f89780ca8705f52fbff339f30a9e603069e13705f0a7934e44a2->enter($__internal_9f983ab35ed0f89780ca8705f52fbff339f30a9e603069e13705f0a7934e44a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9f983ab35ed0f89780ca8705f52fbff339f30a9e603069e13705f0a7934e44a2->leave($__internal_9f983ab35ed0f89780ca8705f52fbff339f30a9e603069e13705f0a7934e44a2_prof);

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
