<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2e15db90c1a51762ef1b63a64d2c1ef9418687edb455918ff16e6a77ddb0195b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52883771311a0961727bd20d82cc7665a8b45a4e5299dffcc4ca437e5e45129a = $this->env->getExtension("native_profiler");
        $__internal_52883771311a0961727bd20d82cc7665a8b45a4e5299dffcc4ca437e5e45129a->enter($__internal_52883771311a0961727bd20d82cc7665a8b45a4e5299dffcc4ca437e5e45129a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52883771311a0961727bd20d82cc7665a8b45a4e5299dffcc4ca437e5e45129a->leave($__internal_52883771311a0961727bd20d82cc7665a8b45a4e5299dffcc4ca437e5e45129a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6713efe480cd796e5cd71c0aeb4b0d1280d60cf56825bc817b1d0b9e76d694b9 = $this->env->getExtension("native_profiler");
        $__internal_6713efe480cd796e5cd71c0aeb4b0d1280d60cf56825bc817b1d0b9e76d694b9->enter($__internal_6713efe480cd796e5cd71c0aeb4b0d1280d60cf56825bc817b1d0b9e76d694b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6713efe480cd796e5cd71c0aeb4b0d1280d60cf56825bc817b1d0b9e76d694b9->leave($__internal_6713efe480cd796e5cd71c0aeb4b0d1280d60cf56825bc817b1d0b9e76d694b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd6b301a40506d58187d828e76708fa475e5c939e38a2cc6779757a53f590571 = $this->env->getExtension("native_profiler");
        $__internal_cd6b301a40506d58187d828e76708fa475e5c939e38a2cc6779757a53f590571->enter($__internal_cd6b301a40506d58187d828e76708fa475e5c939e38a2cc6779757a53f590571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cd6b301a40506d58187d828e76708fa475e5c939e38a2cc6779757a53f590571->leave($__internal_cd6b301a40506d58187d828e76708fa475e5c939e38a2cc6779757a53f590571_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
