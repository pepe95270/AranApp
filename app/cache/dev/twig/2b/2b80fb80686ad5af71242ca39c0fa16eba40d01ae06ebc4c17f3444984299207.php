<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bb1031729368808f2577cee7559468a949ea9ba927e97a412a380409703672a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_f35267db9e2b0c1811fffa8dbb0ee6e0160848409f0a6c9bb30916edbcb44b0b = $this->env->getExtension("native_profiler");
        $__internal_f35267db9e2b0c1811fffa8dbb0ee6e0160848409f0a6c9bb30916edbcb44b0b->enter($__internal_f35267db9e2b0c1811fffa8dbb0ee6e0160848409f0a6c9bb30916edbcb44b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f35267db9e2b0c1811fffa8dbb0ee6e0160848409f0a6c9bb30916edbcb44b0b->leave($__internal_f35267db9e2b0c1811fffa8dbb0ee6e0160848409f0a6c9bb30916edbcb44b0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f0d7c3a963369a15c9ef497aa4f2383ea2fffce58edce48ff2576382d205bf3 = $this->env->getExtension("native_profiler");
        $__internal_1f0d7c3a963369a15c9ef497aa4f2383ea2fffce58edce48ff2576382d205bf3->enter($__internal_1f0d7c3a963369a15c9ef497aa4f2383ea2fffce58edce48ff2576382d205bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1f0d7c3a963369a15c9ef497aa4f2383ea2fffce58edce48ff2576382d205bf3->leave($__internal_1f0d7c3a963369a15c9ef497aa4f2383ea2fffce58edce48ff2576382d205bf3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
