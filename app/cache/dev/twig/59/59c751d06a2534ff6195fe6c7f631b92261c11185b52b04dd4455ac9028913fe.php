<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_8d0217f04e817019561c0e979d2d294359d322319b35d012c29ced9479a069c7 extends Twig_Template
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
        $__internal_f02083922a3d5f70bd182103f076f85a1ed15017a62056d5dd529967806dd146 = $this->env->getExtension("native_profiler");
        $__internal_f02083922a3d5f70bd182103f076f85a1ed15017a62056d5dd529967806dd146->enter($__internal_f02083922a3d5f70bd182103f076f85a1ed15017a62056d5dd529967806dd146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_f02083922a3d5f70bd182103f076f85a1ed15017a62056d5dd529967806dd146->leave($__internal_f02083922a3d5f70bd182103f076f85a1ed15017a62056d5dd529967806dd146_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
/* <span class="label">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
