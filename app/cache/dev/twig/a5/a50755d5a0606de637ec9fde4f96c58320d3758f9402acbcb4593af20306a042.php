<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9d090d41dc870da08048a2d4dfca9e57d15437c270675b48e68cb95233e995a4 extends Twig_Template
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
        $__internal_406c541d0d82262bb3448c05962f5b547c0991c2de285b4d097b6ab16c141205 = $this->env->getExtension("native_profiler");
        $__internal_406c541d0d82262bb3448c05962f5b547c0991c2de285b4d097b6ab16c141205->enter($__internal_406c541d0d82262bb3448c05962f5b547c0991c2de285b4d097b6ab16c141205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406c541d0d82262bb3448c05962f5b547c0991c2de285b4d097b6ab16c141205->leave($__internal_406c541d0d82262bb3448c05962f5b547c0991c2de285b4d097b6ab16c141205_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f696082d2dab653d049687fc35f0b2322463a386aab21eee47d1ba5b39416bf = $this->env->getExtension("native_profiler");
        $__internal_0f696082d2dab653d049687fc35f0b2322463a386aab21eee47d1ba5b39416bf->enter($__internal_0f696082d2dab653d049687fc35f0b2322463a386aab21eee47d1ba5b39416bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f696082d2dab653d049687fc35f0b2322463a386aab21eee47d1ba5b39416bf->leave($__internal_0f696082d2dab653d049687fc35f0b2322463a386aab21eee47d1ba5b39416bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_baed3f8152577df480fb900afb82a73adaaa3d05b17cfe56669f5471929dbfff = $this->env->getExtension("native_profiler");
        $__internal_baed3f8152577df480fb900afb82a73adaaa3d05b17cfe56669f5471929dbfff->enter($__internal_baed3f8152577df480fb900afb82a73adaaa3d05b17cfe56669f5471929dbfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_baed3f8152577df480fb900afb82a73adaaa3d05b17cfe56669f5471929dbfff->leave($__internal_baed3f8152577df480fb900afb82a73adaaa3d05b17cfe56669f5471929dbfff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_132c8914a2ca9ed889ab72540204e08feca519c2f08f38924d456a40ff070e41 = $this->env->getExtension("native_profiler");
        $__internal_132c8914a2ca9ed889ab72540204e08feca519c2f08f38924d456a40ff070e41->enter($__internal_132c8914a2ca9ed889ab72540204e08feca519c2f08f38924d456a40ff070e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_132c8914a2ca9ed889ab72540204e08feca519c2f08f38924d456a40ff070e41->leave($__internal_132c8914a2ca9ed889ab72540204e08feca519c2f08f38924d456a40ff070e41_prof);

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
