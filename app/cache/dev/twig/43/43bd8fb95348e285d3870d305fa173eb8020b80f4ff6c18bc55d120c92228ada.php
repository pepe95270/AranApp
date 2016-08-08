<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_350d2b0306362670b4a3ff7167387300c0477af7477c4272fa85fccebff4541a extends Twig_Template
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
        $__internal_40b4faa190863f9ea6478099574a88c0b149827946df388e15b52b7d99c57fdc = $this->env->getExtension("native_profiler");
        $__internal_40b4faa190863f9ea6478099574a88c0b149827946df388e15b52b7d99c57fdc->enter($__internal_40b4faa190863f9ea6478099574a88c0b149827946df388e15b52b7d99c57fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b4faa190863f9ea6478099574a88c0b149827946df388e15b52b7d99c57fdc->leave($__internal_40b4faa190863f9ea6478099574a88c0b149827946df388e15b52b7d99c57fdc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9dacc0d44158924c9b288680841e0f1f37e8ee45c0d983dc11f8eb6116245ce = $this->env->getExtension("native_profiler");
        $__internal_d9dacc0d44158924c9b288680841e0f1f37e8ee45c0d983dc11f8eb6116245ce->enter($__internal_d9dacc0d44158924c9b288680841e0f1f37e8ee45c0d983dc11f8eb6116245ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d9dacc0d44158924c9b288680841e0f1f37e8ee45c0d983dc11f8eb6116245ce->leave($__internal_d9dacc0d44158924c9b288680841e0f1f37e8ee45c0d983dc11f8eb6116245ce_prof);

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
