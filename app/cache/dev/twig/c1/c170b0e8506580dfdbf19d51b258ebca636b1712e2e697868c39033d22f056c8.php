<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_620b1223d5ab0867ccb8eee11f1698dfac3f3aca2568c4879466c75bfb97f598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e39fd13ed51420279ccacbf4bc60a4316d35096d7b7ed9df137f575ea390baba = $this->env->getExtension("native_profiler");
        $__internal_e39fd13ed51420279ccacbf4bc60a4316d35096d7b7ed9df137f575ea390baba->enter($__internal_e39fd13ed51420279ccacbf4bc60a4316d35096d7b7ed9df137f575ea390baba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e39fd13ed51420279ccacbf4bc60a4316d35096d7b7ed9df137f575ea390baba->leave($__internal_e39fd13ed51420279ccacbf4bc60a4316d35096d7b7ed9df137f575ea390baba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_641f3cfefe4d2e8db6a8c85807b276c8431d3803fabf3bf6104eb69416285c69 = $this->env->getExtension("native_profiler");
        $__internal_641f3cfefe4d2e8db6a8c85807b276c8431d3803fabf3bf6104eb69416285c69->enter($__internal_641f3cfefe4d2e8db6a8c85807b276c8431d3803fabf3bf6104eb69416285c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_641f3cfefe4d2e8db6a8c85807b276c8431d3803fabf3bf6104eb69416285c69->leave($__internal_641f3cfefe4d2e8db6a8c85807b276c8431d3803fabf3bf6104eb69416285c69_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
