<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_fefada3b1db574fc4cab100206c147070cf8e6b7e784e1574de52f7c94edf938 extends Twig_Template
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
        $__internal_5dfa1264de33f598c11b19aa071b4136ff67d005cbd7fd71adc514113e8764d9 = $this->env->getExtension("native_profiler");
        $__internal_5dfa1264de33f598c11b19aa071b4136ff67d005cbd7fd71adc514113e8764d9->enter($__internal_5dfa1264de33f598c11b19aa071b4136ff67d005cbd7fd71adc514113e8764d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5dfa1264de33f598c11b19aa071b4136ff67d005cbd7fd71adc514113e8764d9->leave($__internal_5dfa1264de33f598c11b19aa071b4136ff67d005cbd7fd71adc514113e8764d9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_950fa5d2f5553b6db75c9e89c30d412681ea12e55d8e37bbb41a3326d8d094c5 = $this->env->getExtension("native_profiler");
        $__internal_950fa5d2f5553b6db75c9e89c30d412681ea12e55d8e37bbb41a3326d8d094c5->enter($__internal_950fa5d2f5553b6db75c9e89c30d412681ea12e55d8e37bbb41a3326d8d094c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_950fa5d2f5553b6db75c9e89c30d412681ea12e55d8e37bbb41a3326d8d094c5->leave($__internal_950fa5d2f5553b6db75c9e89c30d412681ea12e55d8e37bbb41a3326d8d094c5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4413e877f11555aaa840704868bb0e779e26e1cee470a85ee63f2e034a4cfd31 = $this->env->getExtension("native_profiler");
        $__internal_4413e877f11555aaa840704868bb0e779e26e1cee470a85ee63f2e034a4cfd31->enter($__internal_4413e877f11555aaa840704868bb0e779e26e1cee470a85ee63f2e034a4cfd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4413e877f11555aaa840704868bb0e779e26e1cee470a85ee63f2e034a4cfd31->leave($__internal_4413e877f11555aaa840704868bb0e779e26e1cee470a85ee63f2e034a4cfd31_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aecb57ae91b850082df646dc12486004523149bfbc52c6bf0b74aeb22d8f5f89 = $this->env->getExtension("native_profiler");
        $__internal_aecb57ae91b850082df646dc12486004523149bfbc52c6bf0b74aeb22d8f5f89->enter($__internal_aecb57ae91b850082df646dc12486004523149bfbc52c6bf0b74aeb22d8f5f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aecb57ae91b850082df646dc12486004523149bfbc52c6bf0b74aeb22d8f5f89->leave($__internal_aecb57ae91b850082df646dc12486004523149bfbc52c6bf0b74aeb22d8f5f89_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
