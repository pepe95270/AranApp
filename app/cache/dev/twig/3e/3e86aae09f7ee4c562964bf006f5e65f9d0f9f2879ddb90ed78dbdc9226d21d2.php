<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_2204fcb657d8c7bf71633b480fbcbc8d1bdfea21a683315633f9956e40075477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a748590c2889a6e87e05fb27ede50f1a5e54d2ffa69a40326eefb862ca1a12ac = $this->env->getExtension("native_profiler");
        $__internal_a748590c2889a6e87e05fb27ede50f1a5e54d2ffa69a40326eefb862ca1a12ac->enter($__internal_a748590c2889a6e87e05fb27ede50f1a5e54d2ffa69a40326eefb862ca1a12ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a748590c2889a6e87e05fb27ede50f1a5e54d2ffa69a40326eefb862ca1a12ac->leave($__internal_a748590c2889a6e87e05fb27ede50f1a5e54d2ffa69a40326eefb862ca1a12ac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2622037124de621ffb675119abb11935c6adf6562fd012d573c9ac05fe09b99d = $this->env->getExtension("native_profiler");
        $__internal_2622037124de621ffb675119abb11935c6adf6562fd012d573c9ac05fe09b99d->enter($__internal_2622037124de621ffb675119abb11935c6adf6562fd012d573c9ac05fe09b99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2622037124de621ffb675119abb11935c6adf6562fd012d573c9ac05fe09b99d->leave($__internal_2622037124de621ffb675119abb11935c6adf6562fd012d573c9ac05fe09b99d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
