<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a48416d69175c466980bab569d40a7a4bd19874d575cc6ff564634273f705fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_72446b901880df6f511932ab72a714c32ee68ebbcbb064c2dc98e5b89596c8a6 = $this->env->getExtension("native_profiler");
        $__internal_72446b901880df6f511932ab72a714c32ee68ebbcbb064c2dc98e5b89596c8a6->enter($__internal_72446b901880df6f511932ab72a714c32ee68ebbcbb064c2dc98e5b89596c8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72446b901880df6f511932ab72a714c32ee68ebbcbb064c2dc98e5b89596c8a6->leave($__internal_72446b901880df6f511932ab72a714c32ee68ebbcbb064c2dc98e5b89596c8a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_894e8b2b6cbed8ea49cbcd23d9676fda078c28349f53c2c96a0c16fd55a6f0e5 = $this->env->getExtension("native_profiler");
        $__internal_894e8b2b6cbed8ea49cbcd23d9676fda078c28349f53c2c96a0c16fd55a6f0e5->enter($__internal_894e8b2b6cbed8ea49cbcd23d9676fda078c28349f53c2c96a0c16fd55a6f0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_894e8b2b6cbed8ea49cbcd23d9676fda078c28349f53c2c96a0c16fd55a6f0e5->leave($__internal_894e8b2b6cbed8ea49cbcd23d9676fda078c28349f53c2c96a0c16fd55a6f0e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
