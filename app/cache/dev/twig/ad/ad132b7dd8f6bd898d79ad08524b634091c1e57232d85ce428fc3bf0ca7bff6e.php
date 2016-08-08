<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_13ae88a381501a269a88af548e8718902431bd4954d78613c7af27b99721a402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8558d0317f046b99541f9de5df5ecfed1fce34a63985da154d70e2f64797725e = $this->env->getExtension("native_profiler");
        $__internal_8558d0317f046b99541f9de5df5ecfed1fce34a63985da154d70e2f64797725e->enter($__internal_8558d0317f046b99541f9de5df5ecfed1fce34a63985da154d70e2f64797725e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8558d0317f046b99541f9de5df5ecfed1fce34a63985da154d70e2f64797725e->leave($__internal_8558d0317f046b99541f9de5df5ecfed1fce34a63985da154d70e2f64797725e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5853d1b1165bc6ee75a271b883cae41af4752ca0bb8c4bfd3cdca799154ffcf3 = $this->env->getExtension("native_profiler");
        $__internal_5853d1b1165bc6ee75a271b883cae41af4752ca0bb8c4bfd3cdca799154ffcf3->enter($__internal_5853d1b1165bc6ee75a271b883cae41af4752ca0bb8c4bfd3cdca799154ffcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5853d1b1165bc6ee75a271b883cae41af4752ca0bb8c4bfd3cdca799154ffcf3->leave($__internal_5853d1b1165bc6ee75a271b883cae41af4752ca0bb8c4bfd3cdca799154ffcf3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
