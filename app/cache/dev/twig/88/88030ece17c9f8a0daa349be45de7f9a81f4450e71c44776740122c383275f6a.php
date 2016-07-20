<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6827c792dc7ef3a7e10c90ca1f6a25f40b3b1c190e2844b3f929e0e03a169fe2 extends Twig_Template
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
        $__internal_334488399a0718c1f21cd145f9cde8ec679e11da62ce52ae4bfcca698b627b9b = $this->env->getExtension("native_profiler");
        $__internal_334488399a0718c1f21cd145f9cde8ec679e11da62ce52ae4bfcca698b627b9b->enter($__internal_334488399a0718c1f21cd145f9cde8ec679e11da62ce52ae4bfcca698b627b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_334488399a0718c1f21cd145f9cde8ec679e11da62ce52ae4bfcca698b627b9b->leave($__internal_334488399a0718c1f21cd145f9cde8ec679e11da62ce52ae4bfcca698b627b9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
