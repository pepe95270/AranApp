<?php

/* BladeTesterCalendarBundle:Category:add.html.twig */
class __TwigTemplate_a240c5be42c1058ff484b0f185f4a6b9482a86612da53edc5715fc33647700db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Base:base.html.twig", "BladeTesterCalendarBundle:Category:add.html.twig", 1);
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
        $__internal_3bab88e9068e70d10c3cd624d2eec178c9b368341ce925da3ce294895c068e31 = $this->env->getExtension("native_profiler");
        $__internal_3bab88e9068e70d10c3cd624d2eec178c9b368341ce925da3ce294895c068e31->enter($__internal_3bab88e9068e70d10c3cd624d2eec178c9b368341ce925da3ce294895c068e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Category:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bab88e9068e70d10c3cd624d2eec178c9b368341ce925da3ce294895c068e31->leave($__internal_3bab88e9068e70d10c3cd624d2eec178c9b368341ce925da3ce294895c068e31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e81f4d7bb6ddcea9aab75653e1587f98409f636aad359dde350a0dfcf8f3edb = $this->env->getExtension("native_profiler");
        $__internal_0e81f4d7bb6ddcea9aab75653e1587f98409f636aad359dde350a0dfcf8f3edb->enter($__internal_0e81f4d7bb6ddcea9aab75653e1587f98409f636aad359dde350a0dfcf8f3edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.title.category.add"), "html", null, true);
        echo "</h1>

<form id=\"category-add\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("calendar_category_add");
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        $this->loadTemplate("BladeTesterCalendarBundle:Category:form.html.twig", "BladeTesterCalendarBundle:Category:add.html.twig", 7)->display($context);
        // line 8
        echo "    <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.category.add"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_0e81f4d7bb6ddcea9aab75653e1587f98409f636aad359dde350a0dfcf8f3edb->leave($__internal_0e81f4d7bb6ddcea9aab75653e1587f98409f636aad359dde350a0dfcf8f3edb_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Category:add.html.twig";
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
/* <h1>{{ "bladetester_calendar.title.category.add"|trans }}</h1>*/
/* */
/* <form id="category-add" method="POST" action="{{ url('calendar_category_add') }}?destination={{ app.request.get('destination') }}" {{ form_enctype(form) }}>*/
/*     {% include 'BladeTesterCalendarBundle:Category:form.html.twig' %}*/
/*     <input type="submit" value="{{ 'bladetester_calendar.label.category.add'|trans }}" />*/
/* </form>*/
/* {% endblock %}*/
/* */
