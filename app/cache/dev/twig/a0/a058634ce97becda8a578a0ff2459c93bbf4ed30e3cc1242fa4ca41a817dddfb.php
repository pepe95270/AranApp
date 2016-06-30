<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e804b747f3d0b50459babd8be2c0166b27d8d3e7ccc68c7c4b7fa42a08af2430 extends Twig_Template
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
        $__internal_6d2e04cc730da39792b256a2272efe8af69987426894a42145384cb04b600650 = $this->env->getExtension("native_profiler");
        $__internal_6d2e04cc730da39792b256a2272efe8af69987426894a42145384cb04b600650->enter($__internal_6d2e04cc730da39792b256a2272efe8af69987426894a42145384cb04b600650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2e04cc730da39792b256a2272efe8af69987426894a42145384cb04b600650->leave($__internal_6d2e04cc730da39792b256a2272efe8af69987426894a42145384cb04b600650_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d50df0a25ffb3a7f00109330abc714c81c5efc336a2131e8956b1b1cac7220c3 = $this->env->getExtension("native_profiler");
        $__internal_d50df0a25ffb3a7f00109330abc714c81c5efc336a2131e8956b1b1cac7220c3->enter($__internal_d50df0a25ffb3a7f00109330abc714c81c5efc336a2131e8956b1b1cac7220c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d50df0a25ffb3a7f00109330abc714c81c5efc336a2131e8956b1b1cac7220c3->leave($__internal_d50df0a25ffb3a7f00109330abc714c81c5efc336a2131e8956b1b1cac7220c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_98729309fa4b7e920f589fbc7ce86510b52043de40e693be9009d1d76a5acdd5 = $this->env->getExtension("native_profiler");
        $__internal_98729309fa4b7e920f589fbc7ce86510b52043de40e693be9009d1d76a5acdd5->enter($__internal_98729309fa4b7e920f589fbc7ce86510b52043de40e693be9009d1d76a5acdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_98729309fa4b7e920f589fbc7ce86510b52043de40e693be9009d1d76a5acdd5->leave($__internal_98729309fa4b7e920f589fbc7ce86510b52043de40e693be9009d1d76a5acdd5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_203445c631f0359cc436a254416cc97f696194bbe7a79cf44344d8cea199853e = $this->env->getExtension("native_profiler");
        $__internal_203445c631f0359cc436a254416cc97f696194bbe7a79cf44344d8cea199853e->enter($__internal_203445c631f0359cc436a254416cc97f696194bbe7a79cf44344d8cea199853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_203445c631f0359cc436a254416cc97f696194bbe7a79cf44344d8cea199853e->leave($__internal_203445c631f0359cc436a254416cc97f696194bbe7a79cf44344d8cea199853e_prof);

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
