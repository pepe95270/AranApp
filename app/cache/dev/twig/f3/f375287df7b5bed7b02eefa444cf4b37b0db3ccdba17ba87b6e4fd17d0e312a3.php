<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_f7bebae57af685f001c247f4fd951e6e5aa0a3f6fb0f9537b54fcdde43309e47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_4d477e94e160f216036ea1576751a7e4a99efb5b997d0c69208ba82194539343 = $this->env->getExtension("native_profiler");
        $__internal_4d477e94e160f216036ea1576751a7e4a99efb5b997d0c69208ba82194539343->enter($__internal_4d477e94e160f216036ea1576751a7e4a99efb5b997d0c69208ba82194539343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d477e94e160f216036ea1576751a7e4a99efb5b997d0c69208ba82194539343->leave($__internal_4d477e94e160f216036ea1576751a7e4a99efb5b997d0c69208ba82194539343_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0fc82b72e8428dab98ac21ce487fff0176b5e4dab319ead65e6b37b707765419 = $this->env->getExtension("native_profiler");
        $__internal_0fc82b72e8428dab98ac21ce487fff0176b5e4dab319ead65e6b37b707765419->enter($__internal_0fc82b72e8428dab98ac21ce487fff0176b5e4dab319ead65e6b37b707765419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0fc82b72e8428dab98ac21ce487fff0176b5e4dab319ead65e6b37b707765419->leave($__internal_0fc82b72e8428dab98ac21ce487fff0176b5e4dab319ead65e6b37b707765419_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
