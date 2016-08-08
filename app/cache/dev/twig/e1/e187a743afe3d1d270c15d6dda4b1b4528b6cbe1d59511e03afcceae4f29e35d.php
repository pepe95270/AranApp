<?php

/* BladeTesterCalendarBundle:Event:edit.html.twig */
class __TwigTemplate_1c721cae3c91477114b4c7d7f43854cbffe898569de5eb91334489c2ec892414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Event:base.html.twig", "BladeTesterCalendarBundle:Event:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BladeTesterCalendarBundle:Event:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2921483740d3bd640004cc522cc9492e4f44c3307217a331415122cb921e72d0 = $this->env->getExtension("native_profiler");
        $__internal_2921483740d3bd640004cc522cc9492e4f44c3307217a331415122cb921e72d0->enter($__internal_2921483740d3bd640004cc522cc9492e4f44c3307217a331415122cb921e72d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2921483740d3bd640004cc522cc9492e4f44c3307217a331415122cb921e72d0->leave($__internal_2921483740d3bd640004cc522cc9492e4f44c3307217a331415122cb921e72d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bed6e01550b11ff51d18b2ffc4e78455be7c0e4ff0c0016e4907f005007f9bf9 = $this->env->getExtension("native_profiler");
        $__internal_bed6e01550b11ff51d18b2ffc4e78455be7c0e4ff0c0016e4907f005007f9bf9->enter($__internal_bed6e01550b11ff51d18b2ffc4e78455be7c0e4ff0c0016e4907f005007f9bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<form id=\"event-edit\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("calendar_event_edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 5
        $this->loadTemplate("BladeTesterCalendarBundle:Event:form.html.twig", "BladeTesterCalendarBundle:Event:edit.html.twig", 5)->display($context);
        // line 6
        echo "    <input type=\"submit\" value=\"Mettre à jour\" />
    <a class=\"btn delete\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_delete", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
        echo "\" onclick=\"return confirm('";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.event.delete_warning"), "html", null, true);
        echo "')\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.delete"), "html", null, true);
        echo "</a>
    ";
        // line 8
        $this->loadTemplate("BladeTesterCalendarBundle:Event:cancel.html.twig", "BladeTesterCalendarBundle:Event:edit.html.twig", 8)->display($context);
        // line 9
        echo "</form>
";
        
        $__internal_bed6e01550b11ff51d18b2ffc4e78455be7c0e4ff0c0016e4907f005007f9bf9->leave($__internal_bed6e01550b11ff51d18b2ffc4e78455be7c0e4ff0c0016e4907f005007f9bf9_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  64 => 8,  54 => 7,  51 => 6,  49 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'BladeTesterCalendarBundle:Event:base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <form id="event-edit" method="POST" action="{{ url('calendar_event_edit', {'id' : event.id}) }}?destination={{ app.request.get('destination') }}" {{ form_enctype(form) }}>*/
/*     {% include 'BladeTesterCalendarBundle:Event:form.html.twig' %}*/
/*     <input type="submit" value="Mettre à jour" />*/
/*     <a class="btn delete" href="{{ path('calendar_event_delete', {'id': event.id}) }}?destination={{ app.request.get('destination') }}" onclick="return confirm('{{ 'bladetester_calendar.label.event.delete_warning'|trans }}')">{{ 'bladetester_calendar.label.delete'|trans }}</a>*/
/*     {% include 'BladeTesterCalendarBundle:Event:cancel.html.twig' %}*/
/* </form>*/
/* {% endblock %}*/
