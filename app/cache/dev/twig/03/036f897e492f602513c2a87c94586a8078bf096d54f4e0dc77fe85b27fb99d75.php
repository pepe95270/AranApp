<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_036538707a71174179e075550967d34995cfefea71908df6c7e6b565d0aa5722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8d1c2a5211f10b559ea46e133151df581ec83028937500880d7800c33596e735 = $this->env->getExtension("native_profiler");
        $__internal_8d1c2a5211f10b559ea46e133151df581ec83028937500880d7800c33596e735->enter($__internal_8d1c2a5211f10b559ea46e133151df581ec83028937500880d7800c33596e735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1c2a5211f10b559ea46e133151df581ec83028937500880d7800c33596e735->leave($__internal_8d1c2a5211f10b559ea46e133151df581ec83028937500880d7800c33596e735_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68af13022f96cf49b732298baba84a48ed80727f110ee32c59f441fe7a679aa4 = $this->env->getExtension("native_profiler");
        $__internal_68af13022f96cf49b732298baba84a48ed80727f110ee32c59f441fe7a679aa4->enter($__internal_68af13022f96cf49b732298baba84a48ed80727f110ee32c59f441fe7a679aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_68af13022f96cf49b732298baba84a48ed80727f110ee32c59f441fe7a679aa4->leave($__internal_68af13022f96cf49b732298baba84a48ed80727f110ee32c59f441fe7a679aa4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
