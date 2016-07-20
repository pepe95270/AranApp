<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_ec23ef3be1b8fea932b0d9387aaa1321d3424c2c47b46047cfa3e2f9cc39abaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_989a3b8510473e9402e878e5955dbec027155c8780e73a5fcdd3f0b67276b77e = $this->env->getExtension("native_profiler");
        $__internal_989a3b8510473e9402e878e5955dbec027155c8780e73a5fcdd3f0b67276b77e->enter($__internal_989a3b8510473e9402e878e5955dbec027155c8780e73a5fcdd3f0b67276b77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_989a3b8510473e9402e878e5955dbec027155c8780e73a5fcdd3f0b67276b77e->leave($__internal_989a3b8510473e9402e878e5955dbec027155c8780e73a5fcdd3f0b67276b77e_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e2691c9f2c984402695e24ae9a7143a2312f9bf5f7338125e22a67e936a50a01 = $this->env->getExtension("native_profiler");
        $__internal_e2691c9f2c984402695e24ae9a7143a2312f9bf5f7338125e22a67e936a50a01->enter($__internal_e2691c9f2c984402695e24ae9a7143a2312f9bf5f7338125e22a67e936a50a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_e2691c9f2c984402695e24ae9a7143a2312f9bf5f7338125e22a67e936a50a01->leave($__internal_e2691c9f2c984402695e24ae9a7143a2312f9bf5f7338125e22a67e936a50a01_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d388ff078de052d79099c4c7b49844acebb0b381ecf3bbf8bc693e59ac545325 = $this->env->getExtension("native_profiler");
        $__internal_d388ff078de052d79099c4c7b49844acebb0b381ecf3bbf8bc693e59ac545325->enter($__internal_d388ff078de052d79099c4c7b49844acebb0b381ecf3bbf8bc693e59ac545325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_d388ff078de052d79099c4c7b49844acebb0b381ecf3bbf8bc693e59ac545325->leave($__internal_d388ff078de052d79099c4c7b49844acebb0b381ecf3bbf8bc693e59ac545325_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_3a7d69c80353a4fb1eb89b59a0dd0584f2bc0d09f5e9dc0870471ec1a606515e = $this->env->getExtension("native_profiler");
        $__internal_3a7d69c80353a4fb1eb89b59a0dd0584f2bc0d09f5e9dc0870471ec1a606515e->enter($__internal_3a7d69c80353a4fb1eb89b59a0dd0584f2bc0d09f5e9dc0870471ec1a606515e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3a7d69c80353a4fb1eb89b59a0dd0584f2bc0d09f5e9dc0870471ec1a606515e->leave($__internal_3a7d69c80353a4fb1eb89b59a0dd0584f2bc0d09f5e9dc0870471ec1a606515e_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_d171f6cabc09e0673bb863dfff030828eb57a751cafbba0887a0cc3b19ff7b2e = $this->env->getExtension("native_profiler");
        $__internal_d171f6cabc09e0673bb863dfff030828eb57a751cafbba0887a0cc3b19ff7b2e->enter($__internal_d171f6cabc09e0673bb863dfff030828eb57a751cafbba0887a0cc3b19ff7b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_d171f6cabc09e0673bb863dfff030828eb57a751cafbba0887a0cc3b19ff7b2e->leave($__internal_d171f6cabc09e0673bb863dfff030828eb57a751cafbba0887a0cc3b19ff7b2e_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_de4694ea12445f39c27bb3373e87fed5690550b4929db029e6068d2b60eb7e62 = $this->env->getExtension("native_profiler");
        $__internal_de4694ea12445f39c27bb3373e87fed5690550b4929db029e6068d2b60eb7e62->enter($__internal_de4694ea12445f39c27bb3373e87fed5690550b4929db029e6068d2b60eb7e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 20
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_de4694ea12445f39c27bb3373e87fed5690550b4929db029e6068d2b60eb7e62->leave($__internal_de4694ea12445f39c27bb3373e87fed5690550b4929db029e6068d2b60eb7e62_prof);

    }

    // line 24
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_d4f47e1665d3e4a22d046aa664ef30139b23b6acd351278e4958207bd3d22327 = $this->env->getExtension("native_profiler");
        $__internal_d4f47e1665d3e4a22d046aa664ef30139b23b6acd351278e4958207bd3d22327->enter($__internal_d4f47e1665d3e4a22d046aa664ef30139b23b6acd351278e4958207bd3d22327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 25
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            // Select2 widget is only enabled for the <select> elements which explicitly ask for it
            \$('#main').find('form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap'
            });
        });
    </script>
";
        
        $__internal_d4f47e1665d3e4a22d046aa664ef30139b23b6acd351278e4958207bd3d22327->leave($__internal_d4f47e1665d3e4a22d046aa664ef30139b23b6acd351278e4958207bd3d22327_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 29,  126 => 25,  120 => 24,  110 => 20,  97 => 19,  91 => 18,  80 => 14,  77 => 13,  75 => 12,  69 => 11,  57 => 9,  45 => 8,  38 => 6,  36 => 4,  34 => 3,  32 => 1,  23 => 6,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-new-' ~ _entity_config.name %}*/
/* {% block body_class 'new new-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/* */
/*             // Select2 widget is only enabled for the <select> elements which explicitly ask for it*/
/*             $('#main').find('form select[data-widget="select2"]').select2({*/
/*                 theme: 'bootstrap'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
