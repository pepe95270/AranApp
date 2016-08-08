<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_8283205dbb254b5315a13236421b057d01d3f5f39e11a3535ad717d8a8c07ce1 extends Twig_Template
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
        $__internal_57994d9956704056ed637f2e837f1488442d39d5c0392eba17b16d770cad7acf = $this->env->getExtension("native_profiler");
        $__internal_57994d9956704056ed637f2e837f1488442d39d5c0392eba17b16d770cad7acf->enter($__internal_57994d9956704056ed637f2e837f1488442d39d5c0392eba17b16d770cad7acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57994d9956704056ed637f2e837f1488442d39d5c0392eba17b16d770cad7acf->leave($__internal_57994d9956704056ed637f2e837f1488442d39d5c0392eba17b16d770cad7acf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f51fd2014dc7714b7ed02b72fee7542e4b843f0df81c17ac25017a5400cc9e26 = $this->env->getExtension("native_profiler");
        $__internal_f51fd2014dc7714b7ed02b72fee7542e4b843f0df81c17ac25017a5400cc9e26->enter($__internal_f51fd2014dc7714b7ed02b72fee7542e4b843f0df81c17ac25017a5400cc9e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f51fd2014dc7714b7ed02b72fee7542e4b843f0df81c17ac25017a5400cc9e26->leave($__internal_f51fd2014dc7714b7ed02b72fee7542e4b843f0df81c17ac25017a5400cc9e26_prof);

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
