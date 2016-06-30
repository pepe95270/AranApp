<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4675600f18b17e36ecdb6a884c965678ff6003d8974a3506230854260c3ab95b extends Twig_Template
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
        $__internal_b6b0858d4d5156a3a278dedb07b2a239141de97d63eca55b0ca7f778ed464493 = $this->env->getExtension("native_profiler");
        $__internal_b6b0858d4d5156a3a278dedb07b2a239141de97d63eca55b0ca7f778ed464493->enter($__internal_b6b0858d4d5156a3a278dedb07b2a239141de97d63eca55b0ca7f778ed464493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6b0858d4d5156a3a278dedb07b2a239141de97d63eca55b0ca7f778ed464493->leave($__internal_b6b0858d4d5156a3a278dedb07b2a239141de97d63eca55b0ca7f778ed464493_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_098f07db419161ed2b61b8c731b081f791b04f634913a9e81653393a356e591d = $this->env->getExtension("native_profiler");
        $__internal_098f07db419161ed2b61b8c731b081f791b04f634913a9e81653393a356e591d->enter($__internal_098f07db419161ed2b61b8c731b081f791b04f634913a9e81653393a356e591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_098f07db419161ed2b61b8c731b081f791b04f634913a9e81653393a356e591d->leave($__internal_098f07db419161ed2b61b8c731b081f791b04f634913a9e81653393a356e591d_prof);

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
