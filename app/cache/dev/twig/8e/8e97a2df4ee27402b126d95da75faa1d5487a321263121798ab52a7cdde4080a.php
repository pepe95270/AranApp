<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a743e3fe474c29bb0ad2d1ab7a9254bbf79236acceac49d0900c5666e5bbe9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_49d5b0b50c3a0585139c5aaeae0d7ba2b7b1d590391b1fe7a2a98eb2b85cba53 = $this->env->getExtension("native_profiler");
        $__internal_49d5b0b50c3a0585139c5aaeae0d7ba2b7b1d590391b1fe7a2a98eb2b85cba53->enter($__internal_49d5b0b50c3a0585139c5aaeae0d7ba2b7b1d590391b1fe7a2a98eb2b85cba53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d5b0b50c3a0585139c5aaeae0d7ba2b7b1d590391b1fe7a2a98eb2b85cba53->leave($__internal_49d5b0b50c3a0585139c5aaeae0d7ba2b7b1d590391b1fe7a2a98eb2b85cba53_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a318043f0e8502acee3756c1d8272865e1f831298305f5f231b122ebd6d7cec5 = $this->env->getExtension("native_profiler");
        $__internal_a318043f0e8502acee3756c1d8272865e1f831298305f5f231b122ebd6d7cec5->enter($__internal_a318043f0e8502acee3756c1d8272865e1f831298305f5f231b122ebd6d7cec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_a318043f0e8502acee3756c1d8272865e1f831298305f5f231b122ebd6d7cec5->leave($__internal_a318043f0e8502acee3756c1d8272865e1f831298305f5f231b122ebd6d7cec5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
