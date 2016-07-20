<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e6d749d96eb7b847c173c49bb3fc5c979ad62010097f0645a2dae12926a021a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_7c50c827225570993f79dcf73619f01abbc7b9b6a06148e00d7d778d38ced0ef = $this->env->getExtension("native_profiler");
        $__internal_7c50c827225570993f79dcf73619f01abbc7b9b6a06148e00d7d778d38ced0ef->enter($__internal_7c50c827225570993f79dcf73619f01abbc7b9b6a06148e00d7d778d38ced0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c50c827225570993f79dcf73619f01abbc7b9b6a06148e00d7d778d38ced0ef->leave($__internal_7c50c827225570993f79dcf73619f01abbc7b9b6a06148e00d7d778d38ced0ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a14e55b50c89b7476c01d77ba5ad4523271d0e52cf46fc16d6bf9efa40a409e4 = $this->env->getExtension("native_profiler");
        $__internal_a14e55b50c89b7476c01d77ba5ad4523271d0e52cf46fc16d6bf9efa40a409e4->enter($__internal_a14e55b50c89b7476c01d77ba5ad4523271d0e52cf46fc16d6bf9efa40a409e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_a14e55b50c89b7476c01d77ba5ad4523271d0e52cf46fc16d6bf9efa40a409e4->leave($__internal_a14e55b50c89b7476c01d77ba5ad4523271d0e52cf46fc16d6bf9efa40a409e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
