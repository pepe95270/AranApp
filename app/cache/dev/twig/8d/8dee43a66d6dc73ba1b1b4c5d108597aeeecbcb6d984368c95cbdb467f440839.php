<?php

/* BladeTesterCalendarBundle:Event:cancel.html.twig */
class __TwigTemplate_52630e72c8d0caf4931ba5da794dffa667dd72b99f25019f062847b016314a24 extends Twig_Template
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
        $__internal_921da97df7e8e548c880d48369946d2e3eaccf78a56371373e453b6d98d4ca1a = $this->env->getExtension("native_profiler");
        $__internal_921da97df7e8e548c880d48369946d2e3eaccf78a56371373e453b6d98d4ca1a->enter($__internal_921da97df7e8e548c880d48369946d2e3eaccf78a56371373e453b6d98d4ca1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:cancel.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("or"), "html", null, true);
        echo " <a href=\"
";
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method") && ($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method")))) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
            echo "
";
        } else {
            // line 6
            echo "    ";
            echo $this->env->getExtension('routing')->getPath("calendar_event_list");
            echo "
";
        }
        // line 8
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.cancel"), "html", null, true);
        echo "</a>";
        
        $__internal_921da97df7e8e548c880d48369946d2e3eaccf78a56371373e453b6d98d4ca1a->leave($__internal_921da97df7e8e548c880d48369946d2e3eaccf78a56371373e453b6d98d4ca1a_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:cancel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 6,  29 => 4,  27 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ "or"|trans }} <a href="*/
/* {% if (app.request.get('destination') and*/
/*     path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) != app.request.get('destination')) %}*/
/*     {{ app.request.get('destination') }}*/
/* {% else %}*/
/*     {{ path('calendar_event_list') }}*/
/* {% endif %}*/
/* ">{{ "bladetester_calendar.label.cancel"|trans }}</a>*/
