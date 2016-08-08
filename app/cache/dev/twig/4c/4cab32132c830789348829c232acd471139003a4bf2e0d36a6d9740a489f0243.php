<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_f5c256a5794ba8fdce72cb95f4f165d0746dbd244f4f90ba5265757deb12e998 extends Twig_Template
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
        $__internal_999400826619b8c7dd2f871f542a5d55f5460cd191bd2b738af5ddb43426abad = $this->env->getExtension("native_profiler");
        $__internal_999400826619b8c7dd2f871f542a5d55f5460cd191bd2b738af5ddb43426abad->enter($__internal_999400826619b8c7dd2f871f542a5d55f5460cd191bd2b738af5ddb43426abad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

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
        
        $__internal_999400826619b8c7dd2f871f542a5d55f5460cd191bd2b738af5ddb43426abad->leave($__internal_999400826619b8c7dd2f871f542a5d55f5460cd191bd2b738af5ddb43426abad_prof);

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
