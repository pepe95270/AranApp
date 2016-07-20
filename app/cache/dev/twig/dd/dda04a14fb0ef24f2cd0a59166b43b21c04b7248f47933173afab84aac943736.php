<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_d0f62a05a966102f1b04503c0501f4ebbe94fcc7dae98a7055fee77dd2b330ac extends Twig_Template
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
        $__internal_b409123611dbce8b4ba421d9c1015021e09a93eb80097b670b526b5577601b7c = $this->env->getExtension("native_profiler");
        $__internal_b409123611dbce8b4ba421d9c1015021e09a93eb80097b670b526b5577601b7c->enter($__internal_b409123611dbce8b4ba421d9c1015021e09a93eb80097b670b526b5577601b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b409123611dbce8b4ba421d9c1015021e09a93eb80097b670b526b5577601b7c->leave($__internal_b409123611dbce8b4ba421d9c1015021e09a93eb80097b670b526b5577601b7c_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_22034e6ea1c905613c7140383ebd161dd7667219426b546bab7cc6e63c23bcea = $this->env->getExtension("native_profiler");
        $__internal_22034e6ea1c905613c7140383ebd161dd7667219426b546bab7cc6e63c23bcea->enter($__internal_22034e6ea1c905613c7140383ebd161dd7667219426b546bab7cc6e63c23bcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_22034e6ea1c905613c7140383ebd161dd7667219426b546bab7cc6e63c23bcea->leave($__internal_22034e6ea1c905613c7140383ebd161dd7667219426b546bab7cc6e63c23bcea_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_05d466c6662e5917a601ce2b0417303e1c6fdc58e681724199fafe35b806713c = $this->env->getExtension("native_profiler");
        $__internal_05d466c6662e5917a601ce2b0417303e1c6fdc58e681724199fafe35b806713c->enter($__internal_05d466c6662e5917a601ce2b0417303e1c6fdc58e681724199fafe35b806713c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "ERROR";
        
        $__internal_05d466c6662e5917a601ce2b0417303e1c6fdc58e681724199fafe35b806713c->leave($__internal_05d466c6662e5917a601ce2b0417303e1c6fdc58e681724199fafe35b806713c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_550e5dac27964054786577d0b45e9941b65700c04fbf201515f9e7035fcc4f1b = $this->env->getExtension("native_profiler");
        $__internal_550e5dac27964054786577d0b45e9941b65700c04fbf201515f9e7035fcc4f1b->enter($__internal_550e5dac27964054786577d0b45e9941b65700c04fbf201515f9e7035fcc4f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_550e5dac27964054786577d0b45e9941b65700c04fbf201515f9e7035fcc4f1b->leave($__internal_550e5dac27964054786577d0b45e9941b65700c04fbf201515f9e7035fcc4f1b_prof);

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
