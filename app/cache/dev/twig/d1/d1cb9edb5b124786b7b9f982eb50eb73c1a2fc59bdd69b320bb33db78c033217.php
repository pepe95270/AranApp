<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5546e519ce09754adaab1e797febf1dba3cc3b649e0a4d238efbe385f18621ba extends Twig_Template
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
        $__internal_9dbb3e1558b53bbb37a1960e17e609ed919853328c68fc511ebf2d12f4f41d77 = $this->env->getExtension("native_profiler");
        $__internal_9dbb3e1558b53bbb37a1960e17e609ed919853328c68fc511ebf2d12f4f41d77->enter($__internal_9dbb3e1558b53bbb37a1960e17e609ed919853328c68fc511ebf2d12f4f41d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9dbb3e1558b53bbb37a1960e17e609ed919853328c68fc511ebf2d12f4f41d77->leave($__internal_9dbb3e1558b53bbb37a1960e17e609ed919853328c68fc511ebf2d12f4f41d77_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f4b71c9f4d4fcf984c6e4d1646f4fe4a36cee3acec30a6c1f8b32883b6321e2 = $this->env->getExtension("native_profiler");
        $__internal_2f4b71c9f4d4fcf984c6e4d1646f4fe4a36cee3acec30a6c1f8b32883b6321e2->enter($__internal_2f4b71c9f4d4fcf984c6e4d1646f4fe4a36cee3acec30a6c1f8b32883b6321e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2f4b71c9f4d4fcf984c6e4d1646f4fe4a36cee3acec30a6c1f8b32883b6321e2->leave($__internal_2f4b71c9f4d4fcf984c6e4d1646f4fe4a36cee3acec30a6c1f8b32883b6321e2_prof);

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
