<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e5942fedb95dcb46eff5e5e7fa9adc6e4c7832d353a91ec9da30507cc6f58272 extends Twig_Template
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
        $__internal_2a82f5bb5ad4cfa28c85b64d6a57d4408a55e339115d285c9436fdfc96f19912 = $this->env->getExtension("native_profiler");
        $__internal_2a82f5bb5ad4cfa28c85b64d6a57d4408a55e339115d285c9436fdfc96f19912->enter($__internal_2a82f5bb5ad4cfa28c85b64d6a57d4408a55e339115d285c9436fdfc96f19912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a82f5bb5ad4cfa28c85b64d6a57d4408a55e339115d285c9436fdfc96f19912->leave($__internal_2a82f5bb5ad4cfa28c85b64d6a57d4408a55e339115d285c9436fdfc96f19912_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06232c8a27e1ff592f0da78960ef0102056d1966d28c2220b805ea60f02ce23d = $this->env->getExtension("native_profiler");
        $__internal_06232c8a27e1ff592f0da78960ef0102056d1966d28c2220b805ea60f02ce23d->enter($__internal_06232c8a27e1ff592f0da78960ef0102056d1966d28c2220b805ea60f02ce23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06232c8a27e1ff592f0da78960ef0102056d1966d28c2220b805ea60f02ce23d->leave($__internal_06232c8a27e1ff592f0da78960ef0102056d1966d28c2220b805ea60f02ce23d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0986194df5a073bf9e6d6fb0d0faf18624976c75a9c587fdb5a73c87d2142b6e = $this->env->getExtension("native_profiler");
        $__internal_0986194df5a073bf9e6d6fb0d0faf18624976c75a9c587fdb5a73c87d2142b6e->enter($__internal_0986194df5a073bf9e6d6fb0d0faf18624976c75a9c587fdb5a73c87d2142b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0986194df5a073bf9e6d6fb0d0faf18624976c75a9c587fdb5a73c87d2142b6e->leave($__internal_0986194df5a073bf9e6d6fb0d0faf18624976c75a9c587fdb5a73c87d2142b6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9ea42fd9b2b0c16637b9a3a7ff51a0600ecc595eed5c25c7206502a637d0dfb = $this->env->getExtension("native_profiler");
        $__internal_a9ea42fd9b2b0c16637b9a3a7ff51a0600ecc595eed5c25c7206502a637d0dfb->enter($__internal_a9ea42fd9b2b0c16637b9a3a7ff51a0600ecc595eed5c25c7206502a637d0dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9ea42fd9b2b0c16637b9a3a7ff51a0600ecc595eed5c25c7206502a637d0dfb->leave($__internal_a9ea42fd9b2b0c16637b9a3a7ff51a0600ecc595eed5c25c7206502a637d0dfb_prof);

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
