<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5ba47da4a5089628bf0ce03dca71155abb125908aa0dbfc4d9b0422b0ee3b960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aab169952b26331c1a6da3647cf4a9461da175dc9cb99625f4bbce9eb9cc1f88 = $this->env->getExtension("native_profiler");
        $__internal_aab169952b26331c1a6da3647cf4a9461da175dc9cb99625f4bbce9eb9cc1f88->enter($__internal_aab169952b26331c1a6da3647cf4a9461da175dc9cb99625f4bbce9eb9cc1f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aab169952b26331c1a6da3647cf4a9461da175dc9cb99625f4bbce9eb9cc1f88->leave($__internal_aab169952b26331c1a6da3647cf4a9461da175dc9cb99625f4bbce9eb9cc1f88_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f944bfc3a0ccc702d3f19f44b0c16130f35b8821abd01d4ea7c569caf2a2c2f = $this->env->getExtension("native_profiler");
        $__internal_1f944bfc3a0ccc702d3f19f44b0c16130f35b8821abd01d4ea7c569caf2a2c2f->enter($__internal_1f944bfc3a0ccc702d3f19f44b0c16130f35b8821abd01d4ea7c569caf2a2c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f944bfc3a0ccc702d3f19f44b0c16130f35b8821abd01d4ea7c569caf2a2c2f->leave($__internal_1f944bfc3a0ccc702d3f19f44b0c16130f35b8821abd01d4ea7c569caf2a2c2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb598d365def65dedd26c139e9d7c5074473875a906eea41d7e6f103e9703f0d = $this->env->getExtension("native_profiler");
        $__internal_bb598d365def65dedd26c139e9d7c5074473875a906eea41d7e6f103e9703f0d->enter($__internal_bb598d365def65dedd26c139e9d7c5074473875a906eea41d7e6f103e9703f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb598d365def65dedd26c139e9d7c5074473875a906eea41d7e6f103e9703f0d->leave($__internal_bb598d365def65dedd26c139e9d7c5074473875a906eea41d7e6f103e9703f0d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2520f097204463ff62cf3ac2d23c886414517ac4eb2c3206b34897c10fb72eb5 = $this->env->getExtension("native_profiler");
        $__internal_2520f097204463ff62cf3ac2d23c886414517ac4eb2c3206b34897c10fb72eb5->enter($__internal_2520f097204463ff62cf3ac2d23c886414517ac4eb2c3206b34897c10fb72eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2520f097204463ff62cf3ac2d23c886414517ac4eb2c3206b34897c10fb72eb5->leave($__internal_2520f097204463ff62cf3ac2d23c886414517ac4eb2c3206b34897c10fb72eb5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
