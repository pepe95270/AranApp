<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e9db178f426f3c0264667ccbf06891d1c610a575375ce393b9386927a5705ec5 extends Twig_Template
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
        $__internal_15143f5287b810df0475f08c163d3cf6486ec1a40250ede50cc3ee5761b8516a = $this->env->getExtension("native_profiler");
        $__internal_15143f5287b810df0475f08c163d3cf6486ec1a40250ede50cc3ee5761b8516a->enter($__internal_15143f5287b810df0475f08c163d3cf6486ec1a40250ede50cc3ee5761b8516a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15143f5287b810df0475f08c163d3cf6486ec1a40250ede50cc3ee5761b8516a->leave($__internal_15143f5287b810df0475f08c163d3cf6486ec1a40250ede50cc3ee5761b8516a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d665c17857228d1d583f96ccf21675291493b782d3e925e1b5b117ae1515bbf = $this->env->getExtension("native_profiler");
        $__internal_9d665c17857228d1d583f96ccf21675291493b782d3e925e1b5b117ae1515bbf->enter($__internal_9d665c17857228d1d583f96ccf21675291493b782d3e925e1b5b117ae1515bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d665c17857228d1d583f96ccf21675291493b782d3e925e1b5b117ae1515bbf->leave($__internal_9d665c17857228d1d583f96ccf21675291493b782d3e925e1b5b117ae1515bbf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfe01d149da6796828455f1d1028b62a910866525dcaf778640182e6c0e485da = $this->env->getExtension("native_profiler");
        $__internal_cfe01d149da6796828455f1d1028b62a910866525dcaf778640182e6c0e485da->enter($__internal_cfe01d149da6796828455f1d1028b62a910866525dcaf778640182e6c0e485da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfe01d149da6796828455f1d1028b62a910866525dcaf778640182e6c0e485da->leave($__internal_cfe01d149da6796828455f1d1028b62a910866525dcaf778640182e6c0e485da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_59165c33a49ea4cb6a3ab778de6c2346df902a5100e11f3485453252fdef2b71 = $this->env->getExtension("native_profiler");
        $__internal_59165c33a49ea4cb6a3ab778de6c2346df902a5100e11f3485453252fdef2b71->enter($__internal_59165c33a49ea4cb6a3ab778de6c2346df902a5100e11f3485453252fdef2b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_59165c33a49ea4cb6a3ab778de6c2346df902a5100e11f3485453252fdef2b71->leave($__internal_59165c33a49ea4cb6a3ab778de6c2346df902a5100e11f3485453252fdef2b71_prof);

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
