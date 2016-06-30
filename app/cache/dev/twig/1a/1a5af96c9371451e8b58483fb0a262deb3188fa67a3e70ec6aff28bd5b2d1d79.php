<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3fd105e705031664919bcb643f0a053895081cec3bdfba5c88fd6ac636bb0534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_026c38afc3c47603f33656e9f938de160602d3d666c2e635d9d801817383151b = $this->env->getExtension("native_profiler");
        $__internal_026c38afc3c47603f33656e9f938de160602d3d666c2e635d9d801817383151b->enter($__internal_026c38afc3c47603f33656e9f938de160602d3d666c2e635d9d801817383151b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_026c38afc3c47603f33656e9f938de160602d3d666c2e635d9d801817383151b->leave($__internal_026c38afc3c47603f33656e9f938de160602d3d666c2e635d9d801817383151b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_855fab1c1c16a8b40fa1bd96ab1d124a4053894954e36825efcd10f34a22fd1f = $this->env->getExtension("native_profiler");
        $__internal_855fab1c1c16a8b40fa1bd96ab1d124a4053894954e36825efcd10f34a22fd1f->enter($__internal_855fab1c1c16a8b40fa1bd96ab1d124a4053894954e36825efcd10f34a22fd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_855fab1c1c16a8b40fa1bd96ab1d124a4053894954e36825efcd10f34a22fd1f->leave($__internal_855fab1c1c16a8b40fa1bd96ab1d124a4053894954e36825efcd10f34a22fd1f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
