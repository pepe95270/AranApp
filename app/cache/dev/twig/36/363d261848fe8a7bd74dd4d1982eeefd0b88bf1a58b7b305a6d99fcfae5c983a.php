<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_263adc29ddf659b471840735faa9676ba145aeaea9ced674b70aa6f0899ad079 extends Twig_Template
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
        $__internal_f164b9c56f8510c8b2e46eaf586b618d4a8f267a108038123e0ea8ac1ff7f2bf = $this->env->getExtension("native_profiler");
        $__internal_f164b9c56f8510c8b2e46eaf586b618d4a8f267a108038123e0ea8ac1ff7f2bf->enter($__internal_f164b9c56f8510c8b2e46eaf586b618d4a8f267a108038123e0ea8ac1ff7f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f164b9c56f8510c8b2e46eaf586b618d4a8f267a108038123e0ea8ac1ff7f2bf->leave($__internal_f164b9c56f8510c8b2e46eaf586b618d4a8f267a108038123e0ea8ac1ff7f2bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35e3baf6901921860fc7ca952739f2c571b346f4365d1ba3b4a616014da7cd04 = $this->env->getExtension("native_profiler");
        $__internal_35e3baf6901921860fc7ca952739f2c571b346f4365d1ba3b4a616014da7cd04->enter($__internal_35e3baf6901921860fc7ca952739f2c571b346f4365d1ba3b4a616014da7cd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_35e3baf6901921860fc7ca952739f2c571b346f4365d1ba3b4a616014da7cd04->leave($__internal_35e3baf6901921860fc7ca952739f2c571b346f4365d1ba3b4a616014da7cd04_prof);

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
