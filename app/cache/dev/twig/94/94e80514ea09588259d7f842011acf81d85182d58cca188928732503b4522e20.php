<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_4c4cc6ce47e62435cf19e9930ebda3095fcf318a99eb27d93e4c78e35263efb2 extends Twig_Template
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
        $__internal_79817fe97975e7e944fe26b5fccbf9fafa755e3c039435cd3a556f20be067e13 = $this->env->getExtension("native_profiler");
        $__internal_79817fe97975e7e944fe26b5fccbf9fafa755e3c039435cd3a556f20be067e13->enter($__internal_79817fe97975e7e944fe26b5fccbf9fafa755e3c039435cd3a556f20be067e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79817fe97975e7e944fe26b5fccbf9fafa755e3c039435cd3a556f20be067e13->leave($__internal_79817fe97975e7e944fe26b5fccbf9fafa755e3c039435cd3a556f20be067e13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82a79dcc9eb2cd02656e5c68c9e0c4b2ddc28109c880a1f6ae33a196d8a8e873 = $this->env->getExtension("native_profiler");
        $__internal_82a79dcc9eb2cd02656e5c68c9e0c4b2ddc28109c880a1f6ae33a196d8a8e873->enter($__internal_82a79dcc9eb2cd02656e5c68c9e0c4b2ddc28109c880a1f6ae33a196d8a8e873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_82a79dcc9eb2cd02656e5c68c9e0c4b2ddc28109c880a1f6ae33a196d8a8e873->leave($__internal_82a79dcc9eb2cd02656e5c68c9e0c4b2ddc28109c880a1f6ae33a196d8a8e873_prof);

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
