<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7d3201ebf4cec620bd8975cf8c6bf6f5a5ea1da593c765d5a8cccf2955b4caa9 extends Twig_Template
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
        $__internal_4b377305352abc7210fe792ebc503156579dd83b470117709fb6f9405b046afc = $this->env->getExtension("native_profiler");
        $__internal_4b377305352abc7210fe792ebc503156579dd83b470117709fb6f9405b046afc->enter($__internal_4b377305352abc7210fe792ebc503156579dd83b470117709fb6f9405b046afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b377305352abc7210fe792ebc503156579dd83b470117709fb6f9405b046afc->leave($__internal_4b377305352abc7210fe792ebc503156579dd83b470117709fb6f9405b046afc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a77eda192e3b02a6850be560fa911c5fc2acaae0dca5f2d933277786c09c7b6 = $this->env->getExtension("native_profiler");
        $__internal_2a77eda192e3b02a6850be560fa911c5fc2acaae0dca5f2d933277786c09c7b6->enter($__internal_2a77eda192e3b02a6850be560fa911c5fc2acaae0dca5f2d933277786c09c7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2a77eda192e3b02a6850be560fa911c5fc2acaae0dca5f2d933277786c09c7b6->leave($__internal_2a77eda192e3b02a6850be560fa911c5fc2acaae0dca5f2d933277786c09c7b6_prof);

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
