<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_e69f2faad09d36578a3a8aa69ab94e17ef0b768c8eaf9cad166798c725c97aa3 extends Twig_Template
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
        $__internal_a37b7c30cb4e6931f6ad6bb31a43b9ee310f8a4c8811dabf733517c80e92dfcc = $this->env->getExtension("native_profiler");
        $__internal_a37b7c30cb4e6931f6ad6bb31a43b9ee310f8a4c8811dabf733517c80e92dfcc->enter($__internal_a37b7c30cb4e6931f6ad6bb31a43b9ee310f8a4c8811dabf733517c80e92dfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_a37b7c30cb4e6931f6ad6bb31a43b9ee310f8a4c8811dabf733517c80e92dfcc->leave($__internal_a37b7c30cb4e6931f6ad6bb31a43b9ee310f8a4c8811dabf733517c80e92dfcc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
