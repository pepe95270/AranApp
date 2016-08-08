<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_44c400acd8a51681af7115fd5e031d3d8ff9b7bd8f07d7264d83a2f6b7d0f2d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_3dab700c704453757b57e270c2a797b48a0a3d8320ccf9ee331f73f5301d1fba = $this->env->getExtension("native_profiler");
        $__internal_3dab700c704453757b57e270c2a797b48a0a3d8320ccf9ee331f73f5301d1fba->enter($__internal_3dab700c704453757b57e270c2a797b48a0a3d8320ccf9ee331f73f5301d1fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dab700c704453757b57e270c2a797b48a0a3d8320ccf9ee331f73f5301d1fba->leave($__internal_3dab700c704453757b57e270c2a797b48a0a3d8320ccf9ee331f73f5301d1fba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_567da23b64c08230705d1ba66c56f8fe1b1e5b36d8e4da94a2ede5d6ed1cd51e = $this->env->getExtension("native_profiler");
        $__internal_567da23b64c08230705d1ba66c56f8fe1b1e5b36d8e4da94a2ede5d6ed1cd51e->enter($__internal_567da23b64c08230705d1ba66c56f8fe1b1e5b36d8e4da94a2ede5d6ed1cd51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_567da23b64c08230705d1ba66c56f8fe1b1e5b36d8e4da94a2ede5d6ed1cd51e->leave($__internal_567da23b64c08230705d1ba66c56f8fe1b1e5b36d8e4da94a2ede5d6ed1cd51e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
