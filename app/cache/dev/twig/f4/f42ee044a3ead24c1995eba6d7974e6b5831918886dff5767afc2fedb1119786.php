<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_bf79c50a4d6460ca2be3fc819878d0646c0f675f38e7eb1b31d8326551019503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_3874b9a236fdc4beac91f33b87577adda4549c6084e876cb3225b4134eaae7e4 = $this->env->getExtension("native_profiler");
        $__internal_3874b9a236fdc4beac91f33b87577adda4549c6084e876cb3225b4134eaae7e4->enter($__internal_3874b9a236fdc4beac91f33b87577adda4549c6084e876cb3225b4134eaae7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3874b9a236fdc4beac91f33b87577adda4549c6084e876cb3225b4134eaae7e4->leave($__internal_3874b9a236fdc4beac91f33b87577adda4549c6084e876cb3225b4134eaae7e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa53f8f5c8ec957c2ef1625a0e1be8568ee043e17beb6a17e3e5b302e60c1d9a = $this->env->getExtension("native_profiler");
        $__internal_fa53f8f5c8ec957c2ef1625a0e1be8568ee043e17beb6a17e3e5b302e60c1d9a->enter($__internal_fa53f8f5c8ec957c2ef1625a0e1be8568ee043e17beb6a17e3e5b302e60c1d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_fa53f8f5c8ec957c2ef1625a0e1be8568ee043e17beb6a17e3e5b302e60c1d9a->leave($__internal_fa53f8f5c8ec957c2ef1625a0e1be8568ee043e17beb6a17e3e5b302e60c1d9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
