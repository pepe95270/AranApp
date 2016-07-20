<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_ff9e2b9c0968b05fb3b8226eb4e5560b0b74ea3cffebf42873ed1c4de76cb5e1 extends Twig_Template
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
        $__internal_230d206d40123bf57a46e2cabe84086a76a374ce2243661407186547bbef91e8 = $this->env->getExtension("native_profiler");
        $__internal_230d206d40123bf57a46e2cabe84086a76a374ce2243661407186547bbef91e8->enter($__internal_230d206d40123bf57a46e2cabe84086a76a374ce2243661407186547bbef91e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_230d206d40123bf57a46e2cabe84086a76a374ce2243661407186547bbef91e8->leave($__internal_230d206d40123bf57a46e2cabe84086a76a374ce2243661407186547bbef91e8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */
