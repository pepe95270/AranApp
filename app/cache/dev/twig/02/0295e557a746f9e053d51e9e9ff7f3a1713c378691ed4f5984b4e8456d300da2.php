<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_98c9588cdcd558da74a47975b433051c64b02eaea7034aca4d4aa04af92afbd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_805199d7fa0c33c213efbf76feed98db7493bfb4e27cbba644366a9a33c0d644 = $this->env->getExtension("native_profiler");
        $__internal_805199d7fa0c33c213efbf76feed98db7493bfb4e27cbba644366a9a33c0d644->enter($__internal_805199d7fa0c33c213efbf76feed98db7493bfb4e27cbba644366a9a33c0d644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_805199d7fa0c33c213efbf76feed98db7493bfb4e27cbba644366a9a33c0d644->leave($__internal_805199d7fa0c33c213efbf76feed98db7493bfb4e27cbba644366a9a33c0d644_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9f1624c2269b874ec3a01d058247f60ab777dff22483728e3ccebcd20da2e31f = $this->env->getExtension("native_profiler");
        $__internal_9f1624c2269b874ec3a01d058247f60ab777dff22483728e3ccebcd20da2e31f->enter($__internal_9f1624c2269b874ec3a01d058247f60ab777dff22483728e3ccebcd20da2e31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9f1624c2269b874ec3a01d058247f60ab777dff22483728e3ccebcd20da2e31f->leave($__internal_9f1624c2269b874ec3a01d058247f60ab777dff22483728e3ccebcd20da2e31f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4b87558bd0e0c4ae28e2041b1f5fc27100b96d06be92e3fa7bc6a13057cc4e1f = $this->env->getExtension("native_profiler");
        $__internal_4b87558bd0e0c4ae28e2041b1f5fc27100b96d06be92e3fa7bc6a13057cc4e1f->enter($__internal_4b87558bd0e0c4ae28e2041b1f5fc27100b96d06be92e3fa7bc6a13057cc4e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4b87558bd0e0c4ae28e2041b1f5fc27100b96d06be92e3fa7bc6a13057cc4e1f->leave($__internal_4b87558bd0e0c4ae28e2041b1f5fc27100b96d06be92e3fa7bc6a13057cc4e1f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3ee676a322c7badb0fab5ce59225ab7f14313113302e0fae8feabad04931ba96 = $this->env->getExtension("native_profiler");
        $__internal_3ee676a322c7badb0fab5ce59225ab7f14313113302e0fae8feabad04931ba96->enter($__internal_3ee676a322c7badb0fab5ce59225ab7f14313113302e0fae8feabad04931ba96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3ee676a322c7badb0fab5ce59225ab7f14313113302e0fae8feabad04931ba96->leave($__internal_3ee676a322c7badb0fab5ce59225ab7f14313113302e0fae8feabad04931ba96_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
