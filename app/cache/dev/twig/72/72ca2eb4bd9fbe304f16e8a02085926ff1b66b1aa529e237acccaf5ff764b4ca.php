<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_ef81c1c9b95752c83223b5d93e75b2f8605190adc039e53223807cd1257ec380 extends Twig_Template
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
        $__internal_fcc09e7115c556487f5ec3a7029cbd6a7d5b2e827fa56d5aa40860b006f186aa = $this->env->getExtension("native_profiler");
        $__internal_fcc09e7115c556487f5ec3a7029cbd6a7d5b2e827fa56d5aa40860b006f186aa->enter($__internal_fcc09e7115c556487f5ec3a7029cbd6a7d5b2e827fa56d5aa40860b006f186aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_fcc09e7115c556487f5ec3a7029cbd6a7d5b2e827fa56d5aa40860b006f186aa->leave($__internal_fcc09e7115c556487f5ec3a7029cbd6a7d5b2e827fa56d5aa40860b006f186aa_prof);

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
