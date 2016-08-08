<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_e8b8a958a88fa201f7d502d71a899d3534df6a338b35cf805425c3d723e9c7a7 extends Twig_Template
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
        $__internal_11dbb7aa278b86573bc11f5049d0fbd62af3d650b2b7c1e7d58b42e9265aae53 = $this->env->getExtension("native_profiler");
        $__internal_11dbb7aa278b86573bc11f5049d0fbd62af3d650b2b7c1e7d58b42e9265aae53->enter($__internal_11dbb7aa278b86573bc11f5049d0fbd62af3d650b2b7c1e7d58b42e9265aae53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_11dbb7aa278b86573bc11f5049d0fbd62af3d650b2b7c1e7d58b42e9265aae53->leave($__internal_11dbb7aa278b86573bc11f5049d0fbd62af3d650b2b7c1e7d58b42e9265aae53_prof);

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
