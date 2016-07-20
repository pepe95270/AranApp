<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_21592045e7344f5c962bbe02c6704babd1339382636b9ed2ad0e4c5849994d47 extends Twig_Template
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
        $__internal_f30353a3d28bb6f4817295ffc0f3c6f1eba7c5c7d5885e2642d5d8176e6965cd = $this->env->getExtension("native_profiler");
        $__internal_f30353a3d28bb6f4817295ffc0f3c6f1eba7c5c7d5885e2642d5d8176e6965cd->enter($__internal_f30353a3d28bb6f4817295ffc0f3c6f1eba7c5c7d5885e2642d5d8176e6965cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_f30353a3d28bb6f4817295ffc0f3c6f1eba7c5c7d5885e2642d5d8176e6965cd->leave($__internal_f30353a3d28bb6f4817295ffc0f3c6f1eba7c5c7d5885e2642d5d8176e6965cd_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
/* <span class="label">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
