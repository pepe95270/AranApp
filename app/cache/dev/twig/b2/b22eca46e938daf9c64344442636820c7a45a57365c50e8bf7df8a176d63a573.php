<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_b4444251a1919756a4275c002381b2f19291c4fee124b9cdedb387234ba63395 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d619a6af903db58f875e41895d9dbc2f4c4001b570e89a29b9f6dbed30c9f36 = $this->env->getExtension("native_profiler");
        $__internal_1d619a6af903db58f875e41895d9dbc2f4c4001b570e89a29b9f6dbed30c9f36->enter($__internal_1d619a6af903db58f875e41895d9dbc2f4c4001b570e89a29b9f6dbed30c9f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())), "%entity_id%" => (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d619a6af903db58f875e41895d9dbc2f4c4001b570e89a29b9f6dbed30c9f36->leave($__internal_1d619a6af903db58f875e41895d9dbc2f4c4001b570e89a29b9f6dbed30c9f36_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3d1133baa676a629cf73a488eb9cbd5458981051365c28e8fbd689a358deea47 = $this->env->getExtension("native_profiler");
        $__internal_3d1133baa676a629cf73a488eb9cbd5458981051365c28e8fbd689a358deea47->enter($__internal_3d1133baa676a629cf73a488eb9cbd5458981051365c28e8fbd689a358deea47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_3d1133baa676a629cf73a488eb9cbd5458981051365c28e8fbd689a358deea47->leave($__internal_3d1133baa676a629cf73a488eb9cbd5458981051365c28e8fbd689a358deea47_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_1f0beaeee46aa7d559688e15d04987f66c980e4e8bdc0079f10135410e60a4e9 = $this->env->getExtension("native_profiler");
        $__internal_1f0beaeee46aa7d559688e15d04987f66c980e4e8bdc0079f10135410e60a4e9->enter($__internal_1f0beaeee46aa7d559688e15d04987f66c980e4e8bdc0079f10135410e60a4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_1f0beaeee46aa7d559688e15d04987f66c980e4e8bdc0079f10135410e60a4e9->leave($__internal_1f0beaeee46aa7d559688e15d04987f66c980e4e8bdc0079f10135410e60a4e9_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_80e404433fd841f7bb893e03d73c8b8a9a3577d35ef4f8763d8d28ffc5595df1 = $this->env->getExtension("native_profiler");
        $__internal_80e404433fd841f7bb893e03d73c8b8a9a3577d35ef4f8763d8d28ffc5595df1->enter($__internal_80e404433fd841f7bb893e03d73c8b8a9a3577d35ef4f8763d8d28ffc5595df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_80e404433fd841f7bb893e03d73c8b8a9a3577d35ef4f8763d8d28ffc5595df1->leave($__internal_80e404433fd841f7bb893e03d73c8b8a9a3577d35ef4f8763d8d28ffc5595df1_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_e9ed36a810135b3ebf23586a8973fd8f3a54f8b67a3b63f6fc89565bbf94e2b1 = $this->env->getExtension("native_profiler");
        $__internal_e9ed36a810135b3ebf23586a8973fd8f3a54f8b67a3b63f6fc89565bbf94e2b1->enter($__internal_e9ed36a810135b3ebf23586a8973fd8f3a54f8b67a3b63f6fc89565bbf94e2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_e9ed36a810135b3ebf23586a8973fd8f3a54f8b67a3b63f6fc89565bbf94e2b1->leave($__internal_e9ed36a810135b3ebf23586a8973fd8f3a54f8b67a3b63f6fc89565bbf94e2b1_prof);

    }

    // line 20
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_c9626ad8a73ffee218a34a10a790df4589737e91d123f2aca1b2dd445a1431b1 = $this->env->getExtension("native_profiler");
        $__internal_c9626ad8a73ffee218a34a10a790df4589737e91d123f2aca1b2dd445a1431b1->enter($__internal_c9626ad8a73ffee218a34a10a790df4589737e91d123f2aca1b2dd445a1431b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_c9626ad8a73ffee218a34a10a790df4589737e91d123f2aca1b2dd445a1431b1->leave($__internal_c9626ad8a73ffee218a34a10a790df4589737e91d123f2aca1b2dd445a1431b1_prof);

    }

    // line 24
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_dbb70134da1b232a1c7a83cd2eae55ffd3fcc381cbb61302ff5d106292dd5b1c = $this->env->getExtension("native_profiler");
        $__internal_dbb70134da1b232a1c7a83cd2eae55ffd3fcc381cbb61302ff5d106292dd5b1c->enter($__internal_dbb70134da1b232a1c7a83cd2eae55ffd3fcc381cbb61302ff5d106292dd5b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 25
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 28
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_trans_parameters" =>         // line 29
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 31
        echo "
    ";
        
        $__internal_dbb70134da1b232a1c7a83cd2eae55ffd3fcc381cbb61302ff5d106292dd5b1c->leave($__internal_dbb70134da1b232a1c7a83cd2eae55ffd3fcc381cbb61302ff5d106292dd5b1c_prof);

    }

    // line 35
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_f0336475ea29a443b27d663c1463572feafc284d5c5f8f34d681f43a10676014 = $this->env->getExtension("native_profiler");
        $__internal_f0336475ea29a443b27d663c1463572feafc284d5c5f8f34d681f43a10676014->enter($__internal_f0336475ea29a443b27d663c1463572feafc284d5c5f8f34d681f43a10676014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 36
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 40
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });

            // Select2 widget is only enabled for the <select> elements which explicitly ask for it
            \$('#main').find('form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap'
            });
        });
    </script>
";
        
        $__internal_f0336475ea29a443b27d663c1463572feafc284d5c5f8f34d681f43a10676014->leave($__internal_f0336475ea29a443b27d663c1463572feafc284d5c5f8f34d681f43a10676014_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 40,  156 => 36,  150 => 35,  142 => 31,  140 => 30,  139 => 29,  138 => 28,  137 => 27,  135 => 25,  129 => 24,  119 => 21,  113 => 20,  106 => 24,  103 => 23,  100 => 20,  94 => 19,  83 => 15,  80 => 14,  78 => 13,  72 => 12,  60 => 10,  48 => 9,  41 => 7,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 7,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'edit edit-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* */
/*     {% block delete_form %}*/
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'edit',*/
/*             referer: app.request.query.get('referer', ''),*/
/*             delete_form: delete_form,*/
/*             _trans_parameters: _trans_parameters,*/
/*             _entity_config: _entity_config,*/
/*         }, with_context = false) }}*/
/*     {% endblock delete_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/* */
/*             $('a.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function () {*/
/*                         $('#delete-form').trigger('submit');*/
/*                     });*/
/*             });*/
/* */
/*             // Select2 widget is only enabled for the <select> elements which explicitly ask for it*/
/*             $('#main').find('form select[data-widget="select2"]').select2({*/
/*                 theme: 'bootstrap'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
