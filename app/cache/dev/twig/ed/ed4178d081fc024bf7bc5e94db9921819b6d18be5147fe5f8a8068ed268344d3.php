<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_acf39bfcb0232f3b1b4297abfb2276ea3bf0eafb86af73f7f023bba242db09e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_09c99cee0ddcfaf481a86067e882ec1d4001e77ae6903f7e791151babcbf2adc = $this->env->getExtension("native_profiler");
        $__internal_09c99cee0ddcfaf481a86067e882ec1d4001e77ae6903f7e791151babcbf2adc->enter($__internal_09c99cee0ddcfaf481a86067e882ec1d4001e77ae6903f7e791151babcbf2adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09c99cee0ddcfaf481a86067e882ec1d4001e77ae6903f7e791151babcbf2adc->leave($__internal_09c99cee0ddcfaf481a86067e882ec1d4001e77ae6903f7e791151babcbf2adc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f4b6655922fbc594881a6bf2c072277bbe36e5ec1742afefa4dc6a09e639d04 = $this->env->getExtension("native_profiler");
        $__internal_9f4b6655922fbc594881a6bf2c072277bbe36e5ec1742afefa4dc6a09e639d04->enter($__internal_9f4b6655922fbc594881a6bf2c072277bbe36e5ec1742afefa4dc6a09e639d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9f4b6655922fbc594881a6bf2c072277bbe36e5ec1742afefa4dc6a09e639d04->leave($__internal_9f4b6655922fbc594881a6bf2c072277bbe36e5ec1742afefa4dc6a09e639d04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
