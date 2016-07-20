<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f50b186027e028f3dec42d03eca62a5de45d4e98ffc3852ea66827f677224353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efaf1789bcd1f4444f77f66cd07a4b49d805b43c24354ff81cc5879f62e71d99 = $this->env->getExtension("native_profiler");
        $__internal_efaf1789bcd1f4444f77f66cd07a4b49d805b43c24354ff81cc5879f62e71d99->enter($__internal_efaf1789bcd1f4444f77f66cd07a4b49d805b43c24354ff81cc5879f62e71d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_efaf1789bcd1f4444f77f66cd07a4b49d805b43c24354ff81cc5879f62e71d99->leave($__internal_efaf1789bcd1f4444f77f66cd07a4b49d805b43c24354ff81cc5879f62e71d99_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ddfe53df6f2f117ea532ae8918b1ee3b1503bb49fc817854c1432864e0f5cbc = $this->env->getExtension("native_profiler");
        $__internal_2ddfe53df6f2f117ea532ae8918b1ee3b1503bb49fc817854c1432864e0f5cbc->enter($__internal_2ddfe53df6f2f117ea532ae8918b1ee3b1503bb49fc817854c1432864e0f5cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2ddfe53df6f2f117ea532ae8918b1ee3b1503bb49fc817854c1432864e0f5cbc->leave($__internal_2ddfe53df6f2f117ea532ae8918b1ee3b1503bb49fc817854c1432864e0f5cbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
