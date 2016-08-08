<?php

/* BladeTesterCalendarBundle:Event:listItem.html.twig */
class __TwigTemplate_a47d035644f80eaa1f258134aeb465c9c0b18cd770ade26121774954a79b7025 extends Twig_Template
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
        $__internal_5beeb22a649a6554e68bb6fd7437f54b6a7117782f7a772252cd47d184ac5a53 = $this->env->getExtension("native_profiler");
        $__internal_5beeb22a649a6554e68bb6fd7437f54b6a7117782f7a772252cd47d184ac5a53->enter($__internal_5beeb22a649a6554e68bb6fd7437f54b6a7117782f7a772252cd47d184ac5a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:listItem.html.twig"));

        // line 1
        echo "<li class=\"appointment ";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array())) {
            echo "appointment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array()), "color", array()), "html", null, true);
        }
        echo "\">";
        $this->loadTemplate("BladeTesterCalendarBundle:Event:event.html.twig", "BladeTesterCalendarBundle:Event:listItem.html.twig", 1)->display(array_merge($context, array("event" => (isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")))));
        echo "</li>";
        
        $__internal_5beeb22a649a6554e68bb6fd7437f54b6a7117782f7a772252cd47d184ac5a53->leave($__internal_5beeb22a649a6554e68bb6fd7437f54b6a7117782f7a772252cd47d184ac5a53_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:listItem.html.twig";
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
/* <li class="appointment {% if event.category %}appointment-{{ event.category.color }}{% endif %}">{% include 'BladeTesterCalendarBundle:Event:event.html.twig' with { 'event' : event } %}</li>*/
