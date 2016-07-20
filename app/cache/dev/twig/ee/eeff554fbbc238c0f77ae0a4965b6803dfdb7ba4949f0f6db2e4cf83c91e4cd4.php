<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_5869413bf57dff8fe56f3033542927de6b4845d301eb7c596661dc0cdcbe7352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f4919838bece1a207304ba76a121b7f7e9d0a76fc546c11625d83e58d1b04f46 = $this->env->getExtension("native_profiler");
        $__internal_f4919838bece1a207304ba76a121b7f7e9d0a76fc546c11625d83e58d1b04f46->enter($__internal_f4919838bece1a207304ba76a121b7f7e9d0a76fc546c11625d83e58d1b04f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4919838bece1a207304ba76a121b7f7e9d0a76fc546c11625d83e58d1b04f46->leave($__internal_f4919838bece1a207304ba76a121b7f7e9d0a76fc546c11625d83e58d1b04f46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d83ef383772451912e19eedcbb08e06f07328a749cf581c43e0cedfc18a8e0a5 = $this->env->getExtension("native_profiler");
        $__internal_d83ef383772451912e19eedcbb08e06f07328a749cf581c43e0cedfc18a8e0a5->enter($__internal_d83ef383772451912e19eedcbb08e06f07328a749cf581c43e0cedfc18a8e0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d83ef383772451912e19eedcbb08e06f07328a749cf581c43e0cedfc18a8e0a5->leave($__internal_d83ef383772451912e19eedcbb08e06f07328a749cf581c43e0cedfc18a8e0a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
