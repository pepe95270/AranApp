<?php

/* BladeTesterCalendarBundle:Event:add.html.twig */
class __TwigTemplate_967fa56812b8cf59d04ac384811e789c4b0c7ead535adf0ddbd13fbf2c0a06ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Event:base.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 1);
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
        $__internal_28b6d6599cc6cf3944280644930de1ccdd40f8ccfe46d1b23b15c00155d9b490 = $this->env->getExtension("native_profiler");
        $__internal_28b6d6599cc6cf3944280644930de1ccdd40f8ccfe46d1b23b15c00155d9b490->enter($__internal_28b6d6599cc6cf3944280644930de1ccdd40f8ccfe46d1b23b15c00155d9b490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28b6d6599cc6cf3944280644930de1ccdd40f8ccfe46d1b23b15c00155d9b490->leave($__internal_28b6d6599cc6cf3944280644930de1ccdd40f8ccfe46d1b23b15c00155d9b490_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf49cba97334fca487a1f1c5b3c5cafcfaa0f33b53e92f2f55316fc388982cb = $this->env->getExtension("native_profiler");
        $__internal_ecf49cba97334fca487a1f1c5b3c5cafcfaa0f33b53e92f2f55316fc388982cb->enter($__internal_ecf49cba97334fca487a1f1c5b3c5cafcfaa0f33b53e92f2f55316fc388982cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<form id=\"event-add\" method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getUrl("calendar_event_add");
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 5
        $this->loadTemplate("BladeTesterCalendarBundle:Event:form.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 5)->display($context);
        // line 6
        echo "    <input type=\"submit\" value=\"Ajouter une disponibilité\" />
    ";
        // line 7
        $this->loadTemplate("BladeTesterCalendarBundle:Event:cancel.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 7)->display($context);
        // line 8
        echo "</form>
";
        
        $__internal_ecf49cba97334fca487a1f1c5b3c5cafcfaa0f33b53e92f2f55316fc388982cb->leave($__internal_ecf49cba97334fca487a1f1c5b3c5cafcfaa0f33b53e92f2f55316fc388982cb_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  51 => 6,  49 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'BladeTesterCalendarBundle:Event:base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <form id="event-add" method="POST" action="{{ url('calendar_event_add') }}?destination={{ app.request.get('destination') }}" {{ form_enctype(form) }}>*/
/*     {% include 'BladeTesterCalendarBundle:Event:form.html.twig' %}*/
/*     <input type="submit" value="Ajouter une disponibilité" />*/
/*     {% include 'BladeTesterCalendarBundle:Event:cancel.html.twig' %}*/
/* </form>*/
/* {% endblock %}*/
