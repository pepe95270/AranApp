<?php

/* BladeTesterCalendarBundle:Event:event.html.twig */
class __TwigTemplate_9847e9c1338afc0a06cf21c1fbe25e2ca64a910f9989c6de39a3ec98bba3a45e extends Twig_Template
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
        $__internal_e17166b7772ce46c12ffca4983a7883f4cf7aab078de8d7c7c6ba3efc48d97f5 = $this->env->getExtension("native_profiler");
        $__internal_e17166b7772ce46c12ffca4983a7883f4cf7aab078de8d7c7c6ba3efc48d97f5->enter($__internal_e17166b7772ce46c12ffca4983a7883f4cf7aab078de8d7c7c6ba3efc48d97f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:event.html.twig"));

        // line 1
        echo "<p>
  <time datetime=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "start", array()), "Y-m-d H:i"), "html", null, true);
        echo "\" class=\"appointment-date\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "start", array()), "H:i"), "html", null, true);
        echo "</time>
  <a href=\"#\" class=\"appointment-issue\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title", array()), "html", null, true);
        echo "</a>
</p>
<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
        echo "\" class=\"full-link\" title=\"";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array()), "name", array()), "html", null, true);
            echo " :: ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title", array()), "html", null, true);
        echo "\"></a>
";
        
        $__internal_e17166b7772ce46c12ffca4983a7883f4cf7aab078de8d7c7c6ba3efc48d97f5->leave($__internal_e17166b7772ce46c12ffca4983a7883f4cf7aab078de8d7c7c6ba3efc48d97f5_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <p>*/
/*   <time datetime="{{ event.start|date('Y-m-d H:i') }}" class="appointment-date">{{ event.start|date('H:i') }}</time>*/
/*   <a href="#" class="appointment-issue">{{ event.title }}</a>*/
/* </p>*/
/* <a href="{{ path('calendar_event_edit', { id: event.id })}}?destination={{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) }}" class="full-link" title="{% if event.category %}{{ event.category.name }} :: {% endif %}{{ event.title }}"></a>*/
/* */
