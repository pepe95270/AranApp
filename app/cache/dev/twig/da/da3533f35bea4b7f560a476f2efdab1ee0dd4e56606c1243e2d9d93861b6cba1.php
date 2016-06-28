<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_36047fc85d5a369e551caa17e358b8d02cbc4349f8c852f519f3feaac56b248b extends Twig_Template
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
        $__internal_5d355dacd3e326c1d4103e6fd874acf625ceb5ed6d6ed68484c7d9426984bfcf = $this->env->getExtension("native_profiler");
        $__internal_5d355dacd3e326c1d4103e6fd874acf625ceb5ed6d6ed68484c7d9426984bfcf->enter($__internal_5d355dacd3e326c1d4103e6fd874acf625ceb5ed6d6ed68484c7d9426984bfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d355dacd3e326c1d4103e6fd874acf625ceb5ed6d6ed68484c7d9426984bfcf->leave($__internal_5d355dacd3e326c1d4103e6fd874acf625ceb5ed6d6ed68484c7d9426984bfcf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_019f85d57b3b6d0ee00c11af318228b7c955889f62e0cdda16503a58b3ba4362 = $this->env->getExtension("native_profiler");
        $__internal_019f85d57b3b6d0ee00c11af318228b7c955889f62e0cdda16503a58b3ba4362->enter($__internal_019f85d57b3b6d0ee00c11af318228b7c955889f62e0cdda16503a58b3ba4362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_019f85d57b3b6d0ee00c11af318228b7c955889f62e0cdda16503a58b3ba4362->leave($__internal_019f85d57b3b6d0ee00c11af318228b7c955889f62e0cdda16503a58b3ba4362_prof);

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
