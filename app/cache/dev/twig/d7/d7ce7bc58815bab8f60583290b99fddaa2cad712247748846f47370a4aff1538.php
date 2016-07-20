<?php

/* @EasyAdmin/default/label_empty.html.twig */
class __TwigTemplate_c4c9a56bfb0b87d2b19f886b1df651cb919d853f3a648e8bf020b876d1e79102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e4888e7e0cf163b7a66afc392334506117fb6f11b64add6314f7a5754ec38bb = $this->env->getExtension("native_profiler");
        $__internal_5e4888e7e0cf163b7a66afc392334506117fb6f11b64add6314f7a5754ec38bb->enter($__internal_5e4888e7e0cf163b7a66afc392334506117fb6f11b64add6314f7a5754ec38bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_5e4888e7e0cf163b7a66afc392334506117fb6f11b64add6314f7a5754ec38bb->leave($__internal_5e4888e7e0cf163b7a66afc392334506117fb6f11b64add6314f7a5754ec38bb_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <span class="label label-empty">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
