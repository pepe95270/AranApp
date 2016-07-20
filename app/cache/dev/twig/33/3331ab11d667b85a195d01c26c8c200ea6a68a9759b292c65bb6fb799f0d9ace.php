<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b4897f47951161a1baf0cd19c56f3d8b0f462cb3f68cc1ffb1e64687b0aec08f extends Twig_Template
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
        $__internal_7feb779ba3045d71c08945191612ca8ef28f87b0e14072fa5e4f4389d59de8aa = $this->env->getExtension("native_profiler");
        $__internal_7feb779ba3045d71c08945191612ca8ef28f87b0e14072fa5e4f4389d59de8aa->enter($__internal_7feb779ba3045d71c08945191612ca8ef28f87b0e14072fa5e4f4389d59de8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7feb779ba3045d71c08945191612ca8ef28f87b0e14072fa5e4f4389d59de8aa->leave($__internal_7feb779ba3045d71c08945191612ca8ef28f87b0e14072fa5e4f4389d59de8aa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4ac40b179661d31abc88e2f48923fea920fced00cafef1572bf65744ddc700b5 = $this->env->getExtension("native_profiler");
        $__internal_4ac40b179661d31abc88e2f48923fea920fced00cafef1572bf65744ddc700b5->enter($__internal_4ac40b179661d31abc88e2f48923fea920fced00cafef1572bf65744ddc700b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4ac40b179661d31abc88e2f48923fea920fced00cafef1572bf65744ddc700b5->leave($__internal_4ac40b179661d31abc88e2f48923fea920fced00cafef1572bf65744ddc700b5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b39998420bc6d2d1bb0e8c9ef5391212fa95d55d87148644cc1082dcf3d0fc3e = $this->env->getExtension("native_profiler");
        $__internal_b39998420bc6d2d1bb0e8c9ef5391212fa95d55d87148644cc1082dcf3d0fc3e->enter($__internal_b39998420bc6d2d1bb0e8c9ef5391212fa95d55d87148644cc1082dcf3d0fc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b39998420bc6d2d1bb0e8c9ef5391212fa95d55d87148644cc1082dcf3d0fc3e->leave($__internal_b39998420bc6d2d1bb0e8c9ef5391212fa95d55d87148644cc1082dcf3d0fc3e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e5d06a7e6692dd4077288985856f6c5cba08a4b307ba7c9c219efd90882bcd26 = $this->env->getExtension("native_profiler");
        $__internal_e5d06a7e6692dd4077288985856f6c5cba08a4b307ba7c9c219efd90882bcd26->enter($__internal_e5d06a7e6692dd4077288985856f6c5cba08a4b307ba7c9c219efd90882bcd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e5d06a7e6692dd4077288985856f6c5cba08a4b307ba7c9c219efd90882bcd26->leave($__internal_e5d06a7e6692dd4077288985856f6c5cba08a4b307ba7c9c219efd90882bcd26_prof);

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
