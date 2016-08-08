<?php

/* FOSUserBundle:views:base.html.twig */
class __TwigTemplate_f2c3b3c146df63a7e410550fd1290df48cb48639387b26dcbfe449c83f6ffa83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f263bcf28ff095c169c762363eb2f9ea9271d38a86ab3f96fb4bd8208977da6 = $this->env->getExtension("native_profiler");
        $__internal_1f263bcf28ff095c169c762363eb2f9ea9271d38a86ab3f96fb4bd8208977da6->enter($__internal_1f263bcf28ff095c169c762363eb2f9ea9271d38a86ab3f96fb4bd8208977da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:views:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1f263bcf28ff095c169c762363eb2f9ea9271d38a86ab3f96fb4bd8208977da6->leave($__internal_1f263bcf28ff095c169c762363eb2f9ea9271d38a86ab3f96fb4bd8208977da6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5387297d98ee36184151b9e26fbd276603fc8ddc09d8e63fa823345b5f8e330 = $this->env->getExtension("native_profiler");
        $__internal_d5387297d98ee36184151b9e26fbd276603fc8ddc09d8e63fa823345b5f8e330->enter($__internal_d5387297d98ee36184151b9e26fbd276603fc8ddc09d8e63fa823345b5f8e330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d5387297d98ee36184151b9e26fbd276603fc8ddc09d8e63fa823345b5f8e330->leave($__internal_d5387297d98ee36184151b9e26fbd276603fc8ddc09d8e63fa823345b5f8e330_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_713eb7af046a650266bddcbbb69d38eb80ef599cd442fc8da6c7e7a517a3f73a = $this->env->getExtension("native_profiler");
        $__internal_713eb7af046a650266bddcbbb69d38eb80ef599cd442fc8da6c7e7a517a3f73a->enter($__internal_713eb7af046a650266bddcbbb69d38eb80ef599cd442fc8da6c7e7a517a3f73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_713eb7af046a650266bddcbbb69d38eb80ef599cd442fc8da6c7e7a517a3f73a->leave($__internal_713eb7af046a650266bddcbbb69d38eb80ef599cd442fc8da6c7e7a517a3f73a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77db6a75b524035510e2125aee2eb00d9c63f9f62e6be68756f0e1f0e7d298b = $this->env->getExtension("native_profiler");
        $__internal_f77db6a75b524035510e2125aee2eb00d9c63f9f62e6be68756f0e1f0e7d298b->enter($__internal_f77db6a75b524035510e2125aee2eb00d9c63f9f62e6be68756f0e1f0e7d298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f77db6a75b524035510e2125aee2eb00d9c63f9f62e6be68756f0e1f0e7d298b->leave($__internal_f77db6a75b524035510e2125aee2eb00d9c63f9f62e6be68756f0e1f0e7d298b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad975f91c6623bb9854a3bbb6788206e99915b8ab196b4a653acaeb00f644be5 = $this->env->getExtension("native_profiler");
        $__internal_ad975f91c6623bb9854a3bbb6788206e99915b8ab196b4a653acaeb00f644be5->enter($__internal_ad975f91c6623bb9854a3bbb6788206e99915b8ab196b4a653acaeb00f644be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ad975f91c6623bb9854a3bbb6788206e99915b8ab196b4a653acaeb00f644be5->leave($__internal_ad975f91c6623bb9854a3bbb6788206e99915b8ab196b4a653acaeb00f644be5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:views:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
