<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d22f9baf19a8570e38a39de54c4aa1e2224e1f9951ad4b36a1b34154c4349959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ca869e30359d6def48772948f118ac791739ad2f890d86ea5d6cbd7dfc0fc650 = $this->env->getExtension("native_profiler");
        $__internal_ca869e30359d6def48772948f118ac791739ad2f890d86ea5d6cbd7dfc0fc650->enter($__internal_ca869e30359d6def48772948f118ac791739ad2f890d86ea5d6cbd7dfc0fc650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca869e30359d6def48772948f118ac791739ad2f890d86ea5d6cbd7dfc0fc650->leave($__internal_ca869e30359d6def48772948f118ac791739ad2f890d86ea5d6cbd7dfc0fc650_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9c707eb881a637b6e6acf2b7e24958991cf6e49c695757df31b8372ac487c4e = $this->env->getExtension("native_profiler");
        $__internal_a9c707eb881a637b6e6acf2b7e24958991cf6e49c695757df31b8372ac487c4e->enter($__internal_a9c707eb881a637b6e6acf2b7e24958991cf6e49c695757df31b8372ac487c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a9c707eb881a637b6e6acf2b7e24958991cf6e49c695757df31b8372ac487c4e->leave($__internal_a9c707eb881a637b6e6acf2b7e24958991cf6e49c695757df31b8372ac487c4e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
