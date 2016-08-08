<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5c8be578fb951f452304f8a32466b1a16bd741e693662d06f3eb00f6c9184e12 extends Twig_Template
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
        $__internal_0c87b8304e8ddf5fe6c89bd9561d945358d7cf769e69686fe9159230ed559342 = $this->env->getExtension("native_profiler");
        $__internal_0c87b8304e8ddf5fe6c89bd9561d945358d7cf769e69686fe9159230ed559342->enter($__internal_0c87b8304e8ddf5fe6c89bd9561d945358d7cf769e69686fe9159230ed559342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c87b8304e8ddf5fe6c89bd9561d945358d7cf769e69686fe9159230ed559342->leave($__internal_0c87b8304e8ddf5fe6c89bd9561d945358d7cf769e69686fe9159230ed559342_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b76f1bac582c3b66e3794f09ca80eba8f1518b1d26784cc13d43fdb7920d58ee = $this->env->getExtension("native_profiler");
        $__internal_b76f1bac582c3b66e3794f09ca80eba8f1518b1d26784cc13d43fdb7920d58ee->enter($__internal_b76f1bac582c3b66e3794f09ca80eba8f1518b1d26784cc13d43fdb7920d58ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b76f1bac582c3b66e3794f09ca80eba8f1518b1d26784cc13d43fdb7920d58ee->leave($__internal_b76f1bac582c3b66e3794f09ca80eba8f1518b1d26784cc13d43fdb7920d58ee_prof);

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
