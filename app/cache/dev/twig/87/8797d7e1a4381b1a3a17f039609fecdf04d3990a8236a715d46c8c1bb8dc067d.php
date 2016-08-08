<?php

/* BladeTesterCalendarBundle:Category:edit.html.twig */
class __TwigTemplate_12645eafaae5fb4688a1fa835aba098f1a37236144bf91458f87a9fb0845b6dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Base:base.html.twig", "BladeTesterCalendarBundle:Category:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BladeTesterCalendarBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac121106233c48dec9b571635075aad3f83279d895eabb3e7b58f62301e28393 = $this->env->getExtension("native_profiler");
        $__internal_ac121106233c48dec9b571635075aad3f83279d895eabb3e7b58f62301e28393->enter($__internal_ac121106233c48dec9b571635075aad3f83279d895eabb3e7b58f62301e28393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac121106233c48dec9b571635075aad3f83279d895eabb3e7b58f62301e28393->leave($__internal_ac121106233c48dec9b571635075aad3f83279d895eabb3e7b58f62301e28393_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34de6ce9b0f0546d4581c1ce401e15120e807cc6c435383ee9c52bf0113cebfa = $this->env->getExtension("native_profiler");
        $__internal_34de6ce9b0f0546d4581c1ce401e15120e807cc6c435383ee9c52bf0113cebfa->enter($__internal_34de6ce9b0f0546d4581c1ce401e15120e807cc6c435383ee9c52bf0113cebfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.title.category.edit"), "html", null, true);
        echo "</h1>

<form id=\"category-edit\" method=\"POST\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("calendar_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        $this->loadTemplate("BladeTesterCalendarBundle:Category:form.html.twig", "BladeTesterCalendarBundle:Category:edit.html.twig", 7)->display($context);
        // line 8
        echo "    <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.category.edit"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_34de6ce9b0f0546d4581c1ce401e15120e807cc6c435383ee9c52bf0113cebfa->leave($__internal_34de6ce9b0f0546d4581c1ce401e15120e807cc6c435383ee9c52bf0113cebfa_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'BladeTesterCalendarBundle:Base:base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>{{ "bladetester_calendar.title.category.edit"|trans }}</h1>*/
/* */
/* <form id="category-edit" method="POST" action="{{ url('calendar_category_edit', {'id' : category.id }) }}?destination={{ app.request.get('destination') }}" {{ form_enctype(form) }}>*/
/*     {% include 'BladeTesterCalendarBundle:Category:form.html.twig' %}*/
/*     <input type="submit" value="{{ 'bladetester_calendar.label.category.edit'|trans }}" />*/
/* </form>*/
/* {% endblock %}*/
/* */
