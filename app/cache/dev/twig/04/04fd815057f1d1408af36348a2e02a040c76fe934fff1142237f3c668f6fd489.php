<?php

/* EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_9a2390ca51a24a08ff22b99df9e2519f46de262da3c82a3de3ce62dfb89a127e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", 1);
        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_label' => array($this, 'block_form_label'),
            'form_label_class' => array($this, 'block_form_label_class'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
            'submit_row' => array($this, 'block_submit_row'),
            'reset_row' => array($this, 'block_reset_row'),
            'form_group_class' => array($this, 'block_form_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e5918501188675367e96478ab61a477d74b8e8f74b7324aec991fe3d2373454 = $this->env->getExtension("native_profiler");
        $__internal_0e5918501188675367e96478ab61a477d74b8e8f74b7324aec991fe3d2373454->enter($__internal_0e5918501188675367e96478ab61a477d74b8e8f74b7324aec991fe3d2373454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e5918501188675367e96478ab61a477d74b8e8f74b7324aec991fe3d2373454->leave($__internal_0e5918501188675367e96478ab61a477d74b8e8f74b7324aec991fe3d2373454_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1e2791e9947c8365b7bc0e61f26932d93acf09b82fd053c885e8025af6ee8b85 = $this->env->getExtension("native_profiler");
        $__internal_1e2791e9947c8365b7bc0e61f26932d93acf09b82fd053c885e8025af6ee8b85->enter($__internal_1e2791e9947c8365b7bc0e61f26932d93acf09b82fd053c885e8025af6ee8b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_1e2791e9947c8365b7bc0e61f26932d93acf09b82fd053c885e8025af6ee8b85->leave($__internal_1e2791e9947c8365b7bc0e61f26932d93acf09b82fd053c885e8025af6ee8b85_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a5cffae0768fc0333b83a8a46c7f0c45ae9f76b9e0383ff79c0fbfe0d2eca40a = $this->env->getExtension("native_profiler");
        $__internal_a5cffae0768fc0333b83a8a46c7f0c45ae9f76b9e0383ff79c0fbfe0d2eca40a->enter($__internal_a5cffae0768fc0333b83a8a46c7f0c45ae9f76b9e0383ff79c0fbfe0d2eca40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a5cffae0768fc0333b83a8a46c7f0c45ae9f76b9e0383ff79c0fbfe0d2eca40a->leave($__internal_a5cffae0768fc0333b83a8a46c7f0c45ae9f76b9e0383ff79c0fbfe0d2eca40a_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_5ab12e7640069b010ee29ef81ad4e27569f24df40a316bd8f45e4b6cb248f794 = $this->env->getExtension("native_profiler");
        $__internal_5ab12e7640069b010ee29ef81ad4e27569f24df40a316bd8f45e4b6cb248f794->enter($__internal_5ab12e7640069b010ee29ef81ad4e27569f24df40a316bd8f45e4b6cb248f794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_5ab12e7640069b010ee29ef81ad4e27569f24df40a316bd8f45e4b6cb248f794->leave($__internal_5ab12e7640069b010ee29ef81ad4e27569f24df40a316bd8f45e4b6cb248f794_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ae23060bf984dd40d24f9aa5ff7cd3844ef0d2e3db0b302073ccdc125a2e6e62 = $this->env->getExtension("native_profiler");
        $__internal_ae23060bf984dd40d24f9aa5ff7cd3844ef0d2e3db0b302073ccdc125a2e6e62->enter($__internal_ae23060bf984dd40d24f9aa5ff7cd3844ef0d2e3db0b302073ccdc125a2e6e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 30
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => "messages") + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"";
        // line 31
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 34
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 35
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 37
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 42
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 45
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 46
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()));
            echo "</span>
            ";
        }
        // line 48
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ae23060bf984dd40d24f9aa5ff7cd3844ef0d2e3db0b302073ccdc125a2e6e62->leave($__internal_ae23060bf984dd40d24f9aa5ff7cd3844ef0d2e3db0b302073ccdc125a2e6e62_prof);

    }

    // line 53
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0a2594a8b4ab5252027c9c6bf2aee9c844453a085c238478caa1ee9162e9feef = $this->env->getExtension("native_profiler");
        $__internal_0a2594a8b4ab5252027c9c6bf2aee9c844453a085c238478caa1ee9162e9feef->enter($__internal_0a2594a8b4ab5252027c9c6bf2aee9c844453a085c238478caa1ee9162e9feef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 54
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0a2594a8b4ab5252027c9c6bf2aee9c844453a085c238478caa1ee9162e9feef->leave($__internal_0a2594a8b4ab5252027c9c6bf2aee9c844453a085c238478caa1ee9162e9feef_prof);

    }

    // line 57
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2703c5e864035176a9e07eb1329c47be02034c2377d9c6fc6343b6b35cf861ad = $this->env->getExtension("native_profiler");
        $__internal_2703c5e864035176a9e07eb1329c47be02034c2377d9c6fc6343b6b35cf861ad->enter($__internal_2703c5e864035176a9e07eb1329c47be02034c2377d9c6fc6343b6b35cf861ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 58
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_2703c5e864035176a9e07eb1329c47be02034c2377d9c6fc6343b6b35cf861ad->leave($__internal_2703c5e864035176a9e07eb1329c47be02034c2377d9c6fc6343b6b35cf861ad_prof);

    }

    // line 61
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_0e8cd07104979721a54a25a918d63860b0a433494cd622454d0bebc952ac9c69 = $this->env->getExtension("native_profiler");
        $__internal_0e8cd07104979721a54a25a918d63860b0a433494cd622454d0bebc952ac9c69->enter($__internal_0e8cd07104979721a54a25a918d63860b0a433494cd622454d0bebc952ac9c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 62
        ob_start();
        // line 63
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 64
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 65
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0e8cd07104979721a54a25a918d63860b0a433494cd622454d0bebc952ac9c69->leave($__internal_0e8cd07104979721a54a25a918d63860b0a433494cd622454d0bebc952ac9c69_prof);

    }

    // line 73
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_527054650321e3c2bcf67c23b0952e5d7c952768a7bd988237de15120bdc229e = $this->env->getExtension("native_profiler");
        $__internal_527054650321e3c2bcf67c23b0952e5d7c952768a7bd988237de15120bdc229e->enter($__internal_527054650321e3c2bcf67c23b0952e5d7c952768a7bd988237de15120bdc229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 74
        ob_start();
        // line 75
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 76
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 77
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_527054650321e3c2bcf67c23b0952e5d7c952768a7bd988237de15120bdc229e->leave($__internal_527054650321e3c2bcf67c23b0952e5d7c952768a7bd988237de15120bdc229e_prof);

    }

    // line 84
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e4a9e0170e3a0b6b2ee2a19816ea77d8a17688dafc8695b45eb3b52e2fcd2633 = $this->env->getExtension("native_profiler");
        $__internal_e4a9e0170e3a0b6b2ee2a19816ea77d8a17688dafc8695b45eb3b52e2fcd2633->enter($__internal_e4a9e0170e3a0b6b2ee2a19816ea77d8a17688dafc8695b45eb3b52e2fcd2633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 85
        ob_start();
        // line 86
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 87
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 88
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e4a9e0170e3a0b6b2ee2a19816ea77d8a17688dafc8695b45eb3b52e2fcd2633->leave($__internal_e4a9e0170e3a0b6b2ee2a19816ea77d8a17688dafc8695b45eb3b52e2fcd2633_prof);

    }

    // line 95
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_0d5c95078134218e9dd57c6917c2199e9bb033790176ee95b5319b5eeea2924d = $this->env->getExtension("native_profiler");
        $__internal_0d5c95078134218e9dd57c6917c2199e9bb033790176ee95b5319b5eeea2924d->enter($__internal_0d5c95078134218e9dd57c6917c2199e9bb033790176ee95b5319b5eeea2924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_0d5c95078134218e9dd57c6917c2199e9bb033790176ee95b5319b5eeea2924d->leave($__internal_0d5c95078134218e9dd57c6917c2199e9bb033790176ee95b5319b5eeea2924d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 95,  299 => 89,  295 => 88,  291 => 87,  288 => 86,  286 => 85,  280 => 84,  268 => 78,  264 => 77,  260 => 76,  255 => 75,  253 => 74,  247 => 73,  235 => 67,  231 => 66,  227 => 65,  223 => 64,  214 => 63,  212 => 62,  206 => 61,  199 => 58,  193 => 57,  186 => 54,  180 => 53,  170 => 48,  164 => 46,  162 => 45,  157 => 43,  154 => 42,  147 => 38,  141 => 37,  137 => 35,  135 => 34,  130 => 32,  126 => 31,  121 => 30,  119 => 29,  110 => 28,  107 => 27,  105 => 26,  99 => 25,  87 => 21,  78 => 16,  75 => 15,  69 => 13,  66 => 12,  64 => 11,  58 => 10,  51 => 5,  49 => 4,  43 => 3,  11 => 1,);
    }
}
/* {% extends "@EasyAdmin/form/bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class 'col-sm-2' %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/* {% spaceless %}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {% set _field_label = easyadmin.field['label']|default(null) %}*/
/*         {{ form_label(form, _field_label, { translation_domain: 'messages' }) }}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/* */
/*             {% if _field_type in ['datetime', 'datetimetz', 'date', 'time'] and easyadmin.field.nullable|default(false) %}*/
/*                 <div class="nullable-control">*/
/*                     <label>*/
/*                         <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                         {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                     </label>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {{ form_errors(form) }}*/
/* */
/*             {% if easyadmin.field.help|default('') != '' %}*/
/*                 <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans|raw }}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group field-{{ block_prefixes|slice(-2)|first }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block reset_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock reset_row %}*/
/* */
/* {% block form_group_class 'col-sm-10' %}*/
/* */
