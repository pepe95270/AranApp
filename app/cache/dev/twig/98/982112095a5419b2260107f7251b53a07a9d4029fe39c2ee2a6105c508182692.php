<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5e7c6907a70d8a5b93a1ab5e6fb32e8c36ee208aa3009e35b2b9a2d2e41298bd extends Twig_Template
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
        $__internal_e1336a706062d61540151c07f6cc489932b7ab7d251c7533f41eb0f9ffe2b007 = $this->env->getExtension("native_profiler");
        $__internal_e1336a706062d61540151c07f6cc489932b7ab7d251c7533f41eb0f9ffe2b007->enter($__internal_e1336a706062d61540151c07f6cc489932b7ab7d251c7533f41eb0f9ffe2b007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e1336a706062d61540151c07f6cc489932b7ab7d251c7533f41eb0f9ffe2b007->leave($__internal_e1336a706062d61540151c07f6cc489932b7ab7d251c7533f41eb0f9ffe2b007_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5e1d899a6c8369c61cfd5076ed5f68596a595b80d58084d2a6bf7e0854435c98 = $this->env->getExtension("native_profiler");
        $__internal_5e1d899a6c8369c61cfd5076ed5f68596a595b80d58084d2a6bf7e0854435c98->enter($__internal_5e1d899a6c8369c61cfd5076ed5f68596a595b80d58084d2a6bf7e0854435c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5e1d899a6c8369c61cfd5076ed5f68596a595b80d58084d2a6bf7e0854435c98->leave($__internal_5e1d899a6c8369c61cfd5076ed5f68596a595b80d58084d2a6bf7e0854435c98_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_829804422a9fd672c5501a3e7f0f88f3c6cee8afb3b9db18ec85c39ad1e01d4d = $this->env->getExtension("native_profiler");
        $__internal_829804422a9fd672c5501a3e7f0f88f3c6cee8afb3b9db18ec85c39ad1e01d4d->enter($__internal_829804422a9fd672c5501a3e7f0f88f3c6cee8afb3b9db18ec85c39ad1e01d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_829804422a9fd672c5501a3e7f0f88f3c6cee8afb3b9db18ec85c39ad1e01d4d->leave($__internal_829804422a9fd672c5501a3e7f0f88f3c6cee8afb3b9db18ec85c39ad1e01d4d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e3b9b5a6428d57dd247c7a51500295443397870d942a32eaf7206c8024e86f0 = $this->env->getExtension("native_profiler");
        $__internal_5e3b9b5a6428d57dd247c7a51500295443397870d942a32eaf7206c8024e86f0->enter($__internal_5e3b9b5a6428d57dd247c7a51500295443397870d942a32eaf7206c8024e86f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5e3b9b5a6428d57dd247c7a51500295443397870d942a32eaf7206c8024e86f0->leave($__internal_5e3b9b5a6428d57dd247c7a51500295443397870d942a32eaf7206c8024e86f0_prof);

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
