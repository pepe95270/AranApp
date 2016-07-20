<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_02c525c4b830dc25b390f91fd187d670e682ea09450397d306f84641bceda0fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ec126e9e960262e3db9b74f12de17e0f5490b3ce8d58e2090776039466ca90d6 = $this->env->getExtension("native_profiler");
        $__internal_ec126e9e960262e3db9b74f12de17e0f5490b3ce8d58e2090776039466ca90d6->enter($__internal_ec126e9e960262e3db9b74f12de17e0f5490b3ce8d58e2090776039466ca90d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec126e9e960262e3db9b74f12de17e0f5490b3ce8d58e2090776039466ca90d6->leave($__internal_ec126e9e960262e3db9b74f12de17e0f5490b3ce8d58e2090776039466ca90d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8eb5ace5e60af682ca75d82a9bd78bd451db456b55248d66a863860575f25318 = $this->env->getExtension("native_profiler");
        $__internal_8eb5ace5e60af682ca75d82a9bd78bd451db456b55248d66a863860575f25318->enter($__internal_8eb5ace5e60af682ca75d82a9bd78bd451db456b55248d66a863860575f25318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8eb5ace5e60af682ca75d82a9bd78bd451db456b55248d66a863860575f25318->leave($__internal_8eb5ace5e60af682ca75d82a9bd78bd451db456b55248d66a863860575f25318_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90dac71f7cd7073ae9a33ca9fa2a7a10a7c0492acb0ea33313bff69f08bc4dad = $this->env->getExtension("native_profiler");
        $__internal_90dac71f7cd7073ae9a33ca9fa2a7a10a7c0492acb0ea33313bff69f08bc4dad->enter($__internal_90dac71f7cd7073ae9a33ca9fa2a7a10a7c0492acb0ea33313bff69f08bc4dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90dac71f7cd7073ae9a33ca9fa2a7a10a7c0492acb0ea33313bff69f08bc4dad->leave($__internal_90dac71f7cd7073ae9a33ca9fa2a7a10a7c0492acb0ea33313bff69f08bc4dad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae2521ce21d7e051667eef6ab724e5f8e0ff3d2437fcb90ad70fa08ee556fc2d = $this->env->getExtension("native_profiler");
        $__internal_ae2521ce21d7e051667eef6ab724e5f8e0ff3d2437fcb90ad70fa08ee556fc2d->enter($__internal_ae2521ce21d7e051667eef6ab724e5f8e0ff3d2437fcb90ad70fa08ee556fc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ae2521ce21d7e051667eef6ab724e5f8e0ff3d2437fcb90ad70fa08ee556fc2d->leave($__internal_ae2521ce21d7e051667eef6ab724e5f8e0ff3d2437fcb90ad70fa08ee556fc2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
