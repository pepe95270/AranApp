<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_a317ab1377a14d64b7b8305f2282001497b47386b082bc44a3348b278f844566 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3a293936b60c87af82b768854af9e782060c619cf3560c3b098d98dba2a8237 = $this->env->getExtension("native_profiler");
        $__internal_f3a293936b60c87af82b768854af9e782060c619cf3560c3b098d98dba2a8237->enter($__internal_f3a293936b60c87af82b768854af9e782060c619cf3560c3b098d98dba2a8237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3a293936b60c87af82b768854af9e782060c619cf3560c3b098d98dba2a8237->leave($__internal_f3a293936b60c87af82b768854af9e782060c619cf3560c3b098d98dba2a8237_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6d006e98c3a7768c490c5bc13ac863a08b7a0568877114268b3c75b12e943ffd = $this->env->getExtension("native_profiler");
        $__internal_6d006e98c3a7768c490c5bc13ac863a08b7a0568877114268b3c75b12e943ffd->enter($__internal_6d006e98c3a7768c490c5bc13ac863a08b7a0568877114268b3c75b12e943ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_6d006e98c3a7768c490c5bc13ac863a08b7a0568877114268b3c75b12e943ffd->leave($__internal_6d006e98c3a7768c490c5bc13ac863a08b7a0568877114268b3c75b12e943ffd_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_85a6ad3f16e60ddfb06aa553ce5cc9b558e7285f4794e849e8000860d92e6b9e = $this->env->getExtension("native_profiler");
        $__internal_85a6ad3f16e60ddfb06aa553ce5cc9b558e7285f4794e849e8000860d92e6b9e->enter($__internal_85a6ad3f16e60ddfb06aa553ce5cc9b558e7285f4794e849e8000860d92e6b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_85a6ad3f16e60ddfb06aa553ce5cc9b558e7285f4794e849e8000860d92e6b9e->leave($__internal_85a6ad3f16e60ddfb06aa553ce5cc9b558e7285f4794e849e8000860d92e6b9e_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0b9f620687856c05996d29f95d9c2f94da5456d51ceeb4e3cd558c991fb4c61f = $this->env->getExtension("native_profiler");
        $__internal_0b9f620687856c05996d29f95d9c2f94da5456d51ceeb4e3cd558c991fb4c61f->enter($__internal_0b9f620687856c05996d29f95d9c2f94da5456d51ceeb4e3cd558c991fb4c61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

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
        
        $__internal_0b9f620687856c05996d29f95d9c2f94da5456d51ceeb4e3cd558c991fb4c61f->leave($__internal_0b9f620687856c05996d29f95d9c2f94da5456d51ceeb4e3cd558c991fb4c61f_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_c06f7259885555b153e814c90d4e8e74b4b1400818aef532c4b9474d430b49c1 = $this->env->getExtension("native_profiler");
        $__internal_c06f7259885555b153e814c90d4e8e74b4b1400818aef532c4b9474d430b49c1->enter($__internal_c06f7259885555b153e814c90d4e8e74b4b1400818aef532c4b9474d430b49c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_c06f7259885555b153e814c90d4e8e74b4b1400818aef532c4b9474d430b49c1->leave($__internal_c06f7259885555b153e814c90d4e8e74b4b1400818aef532c4b9474d430b49c1_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_044ac052e435e048fc927a01f920f105ff3027896c36901bbab6b98109bc393e = $this->env->getExtension("native_profiler");
        $__internal_044ac052e435e048fc927a01f920f105ff3027896c36901bbab6b98109bc393e->enter($__internal_044ac052e435e048fc927a01f920f105ff3027896c36901bbab6b98109bc393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 20
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_044ac052e435e048fc927a01f920f105ff3027896c36901bbab6b98109bc393e->leave($__internal_044ac052e435e048fc927a01f920f105ff3027896c36901bbab6b98109bc393e_prof);

    }

    // line 24
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_7999aea68995ce91e0018991f4e8080123ed251bf85d030292305ddbc0ec37f8 = $this->env->getExtension("native_profiler");
        $__internal_7999aea68995ce91e0018991f4e8080123ed251bf85d030292305ddbc0ec37f8->enter($__internal_7999aea68995ce91e0018991f4e8080123ed251bf85d030292305ddbc0ec37f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_7999aea68995ce91e0018991f4e8080123ed251bf85d030292305ddbc0ec37f8->leave($__internal_7999aea68995ce91e0018991f4e8080123ed251bf85d030292305ddbc0ec37f8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
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
