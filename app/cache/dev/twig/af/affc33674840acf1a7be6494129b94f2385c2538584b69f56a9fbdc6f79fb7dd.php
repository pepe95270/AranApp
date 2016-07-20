<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_818100a27b26f5d9c58d76629c937f1f46969d3450d18908e4f555efe14af4e1 extends Twig_Template
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
        $__internal_65b071cea973784a970bb4bd646c85cf115ec926bf82a7aeb2852bb9522b745d = $this->env->getExtension("native_profiler");
        $__internal_65b071cea973784a970bb4bd646c85cf115ec926bf82a7aeb2852bb9522b745d->enter($__internal_65b071cea973784a970bb4bd646c85cf115ec926bf82a7aeb2852bb9522b745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65b071cea973784a970bb4bd646c85cf115ec926bf82a7aeb2852bb9522b745d->leave($__internal_65b071cea973784a970bb4bd646c85cf115ec926bf82a7aeb2852bb9522b745d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03813b5ef12faad956006fb3c3cd0d955eba3bc03db4f2c3daa8232337c04782 = $this->env->getExtension("native_profiler");
        $__internal_03813b5ef12faad956006fb3c3cd0d955eba3bc03db4f2c3daa8232337c04782->enter($__internal_03813b5ef12faad956006fb3c3cd0d955eba3bc03db4f2c3daa8232337c04782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_03813b5ef12faad956006fb3c3cd0d955eba3bc03db4f2c3daa8232337c04782->leave($__internal_03813b5ef12faad956006fb3c3cd0d955eba3bc03db4f2c3daa8232337c04782_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed30b012a4bac12f28450626f0036fd3ea75560b91d684e4798bd30aadc7c413 = $this->env->getExtension("native_profiler");
        $__internal_ed30b012a4bac12f28450626f0036fd3ea75560b91d684e4798bd30aadc7c413->enter($__internal_ed30b012a4bac12f28450626f0036fd3ea75560b91d684e4798bd30aadc7c413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed30b012a4bac12f28450626f0036fd3ea75560b91d684e4798bd30aadc7c413->leave($__internal_ed30b012a4bac12f28450626f0036fd3ea75560b91d684e4798bd30aadc7c413_prof);

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
