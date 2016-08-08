<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_791be8bc4c3159a1c3386662e757e59e0fb6adcad46db6cc118fad0227fad273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87f27e291c6c3c122bf3db564251cbe17931e0d762966e9b6719d7d4536484b2 = $this->env->getExtension("native_profiler");
        $__internal_87f27e291c6c3c122bf3db564251cbe17931e0d762966e9b6719d7d4536484b2->enter($__internal_87f27e291c6c3c122bf3db564251cbe17931e0d762966e9b6719d7d4536484b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f27e291c6c3c122bf3db564251cbe17931e0d762966e9b6719d7d4536484b2->leave($__internal_87f27e291c6c3c122bf3db564251cbe17931e0d762966e9b6719d7d4536484b2_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c9099c221e0372f9f89b2816304e10a44b60ebf3b4ea36ed36892a4c23c8fdbc = $this->env->getExtension("native_profiler");
        $__internal_c9099c221e0372f9f89b2816304e10a44b60ebf3b4ea36ed36892a4c23c8fdbc->enter($__internal_c9099c221e0372f9f89b2816304e10a44b60ebf3b4ea36ed36892a4c23c8fdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_c9099c221e0372f9f89b2816304e10a44b60ebf3b4ea36ed36892a4c23c8fdbc->leave($__internal_c9099c221e0372f9f89b2816304e10a44b60ebf3b4ea36ed36892a4c23c8fdbc_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_81780dcaf12c7512c86a4756744a2974c47b7b7211cbfc6e3bd25d32b3ee376b = $this->env->getExtension("native_profiler");
        $__internal_81780dcaf12c7512c86a4756744a2974c47b7b7211cbfc6e3bd25d32b3ee376b->enter($__internal_81780dcaf12c7512c86a4756744a2974c47b7b7211cbfc6e3bd25d32b3ee376b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "ERROR";
        
        $__internal_81780dcaf12c7512c86a4756744a2974c47b7b7211cbfc6e3bd25d32b3ee376b->leave($__internal_81780dcaf12c7512c86a4756744a2974c47b7b7211cbfc6e3bd25d32b3ee376b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_89d02e07d0c82b1c6f316caade241636a82de18b0a69794ed2d6dc684d8d2d05 = $this->env->getExtension("native_profiler");
        $__internal_89d02e07d0c82b1c6f316caade241636a82de18b0a69794ed2d6dc684d8d2d05->enter($__internal_89d02e07d0c82b1c6f316caade241636a82de18b0a69794ed2d6dc684d8d2d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1>Error</h1>

            <div class=\"error-message\">
                <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "safeMessage", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </section>
";
        
        $__internal_89d02e07d0c82b1c6f316caade241636a82de18b0a69794ed2d6dc684d8d2d05->leave($__internal_89d02e07d0c82b1c6f316caade241636a82de18b0a69794ed2d6dc684d8d2d05_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  68 => 12,  62 => 11,  50 => 9,  38 => 8,  31 => 3,  29 => 1,  20 => 3,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% extends [*/
/*     _entity_config.templates.layout|default(''),*/
/*     easyadmin_config('design.templates.layout'),*/
/*     '@EasyAdmin/default/layout.html.twig'*/
/* ] %}*/
/* */
/* {% block body_class 'error' %}*/
/* {% block page_title 'ERROR' %}*/
/* */
/* {% block content %}*/
/*     <section id="main" class="content">*/
/*         <div class="error-description">*/
/*             <h1>Error</h1>*/
/* */
/*             <div class="error-message">*/
/*                 <p>{{ exception.safeMessage }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
