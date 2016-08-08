<?php

/* BladeTesterCalendarBundle:Settings:index.html.twig */
class __TwigTemplate_d4bf8abeedf81bbc1ef9d4c81b64be314d643117936d789c1aacfd919ec3c807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Base:base.html.twig", "BladeTesterCalendarBundle:Settings:index.html.twig", 1);
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
        $__internal_70910ac183858e95999df11c9a90659adb13f331e1b6551d0c93e7fa2415f7e6 = $this->env->getExtension("native_profiler");
        $__internal_70910ac183858e95999df11c9a90659adb13f331e1b6551d0c93e7fa2415f7e6->enter($__internal_70910ac183858e95999df11c9a90659adb13f331e1b6551d0c93e7fa2415f7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Settings:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70910ac183858e95999df11c9a90659adb13f331e1b6551d0c93e7fa2415f7e6->leave($__internal_70910ac183858e95999df11c9a90659adb13f331e1b6551d0c93e7fa2415f7e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_efa26ccaef68f30e43b8fe58a239bd7d175981c28521b681ca81303ff394ceb6 = $this->env->getExtension("native_profiler");
        $__internal_efa26ccaef68f30e43b8fe58a239bd7d175981c28521b681ca81303ff394ceb6->enter($__internal_efa26ccaef68f30e43b8fe58a239bd7d175981c28521b681ca81303ff394ceb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.settings"), "html", null, true);
        echo "</h1>


    ";
        // line 7
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("BladeTesterCalendarBundle:Category:list"), array());
        // line 8
        echo "

    <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.configuration_parameters"), "html", null, true);
        echo "</h3>
    <form method=\"POST\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("calendar_settings_update");
        echo "\" id=\"calendar-settings\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.settings.update"), "html", null, true);
        echo "\" /> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("or"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("calendar_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.back_to_calendar"), "html", null, true);
        echo "</a>
    </form>

";
        
        $__internal_efa26ccaef68f30e43b8fe58a239bd7d175981c28521b681ca81303ff394ceb6->leave($__internal_efa26ccaef68f30e43b8fe58a239bd7d175981c28521b681ca81303ff394ceb6_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Settings:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  63 => 12,  57 => 11,  53 => 10,  49 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'BladeTesterCalendarBundle:Base:base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{{ 'bladetester_calendar.label.settings'|trans }}</h1>*/
/* */
/* */
/*     {% render(controller('BladeTesterCalendarBundle:Category:list'))  %}*/
/* */
/* */
/*     <h3>{{ 'bladetester_calendar.label.configuration_parameters'|trans }}</h3>*/
/*     <form method="POST" action="{{ path('calendar_settings_update') }}" id="calendar-settings" {{ form_enctype(form) }}>*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="{{ 'bladetester_calendar.label.settings.update'|trans }}" /> {{ 'or'|trans }} <a href="{{ path('calendar_index') }}">{{ 'bladetester_calendar.label.back_to_calendar'|trans }}</a>*/
/*     </form>*/
/* */
/* {% endblock %}*/
