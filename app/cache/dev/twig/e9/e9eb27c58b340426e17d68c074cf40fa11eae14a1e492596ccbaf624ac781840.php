<?php

/* BladeTesterCalendarBundle:Event:list.html.twig */
class __TwigTemplate_230b6db5321395d2bd8c316f80818c9b30a881fd465a625d2cddacbf6c8e2f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Event:base.html.twig", "BladeTesterCalendarBundle:Event:list.html.twig", 1);
        $this->blocks = array(
            'calendar_body' => array($this, 'block_calendar_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BladeTesterCalendarBundle:Event:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f2d95b4e8b32c2642d5b62f1ba7d00605ab7e05b28e4fe5a4776d81ceef7929 = $this->env->getExtension("native_profiler");
        $__internal_6f2d95b4e8b32c2642d5b62f1ba7d00605ab7e05b28e4fe5a4776d81ceef7929->enter($__internal_6f2d95b4e8b32c2642d5b62f1ba7d00605ab7e05b28e4fe5a4776d81ceef7929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f2d95b4e8b32c2642d5b62f1ba7d00605ab7e05b28e4fe5a4776d81ceef7929->leave($__internal_6f2d95b4e8b32c2642d5b62f1ba7d00605ab7e05b28e4fe5a4776d81ceef7929_prof);

    }

    // line 3
    public function block_calendar_body($context, array $blocks = array())
    {
        $__internal_c2be200c89e4f3f4c5e24bb77ff3396b786f25419ea3596c9da168f4dd3f90b0 = $this->env->getExtension("native_profiler");
        $__internal_c2be200c89e4f3f4c5e24bb77ff3396b786f25419ea3596c9da168f4dd3f90b0->enter($__internal_c2be200c89e4f3f4c5e24bb77ff3396b786f25419ea3596c9da168f4dd3f90b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_body"));

        // line 4
        echo "    <section class=\"schedule-content schedule-view-schedule\">
    ";
        // line 5
        if (($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "count", array()) > 0)) {
            // line 6
            echo "        <ul class=\"list-schedule-events\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "dates", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 8
                echo "                <li class=\"day\">
                    <h2 class=\"day-day\"><a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_day", array("year" => twig_date_format_filter($this->env, $context["date"], "Y"), "month" => twig_date_format_filter($this->env, $context["date"], "m"), "day" => twig_date_format_filter($this->env, $context["date"], "d"))), "html", null, true);
                echo "\"><time datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "Y-m-d H:i"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $context["date"], "l")), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $context["date"], "F")), "html", null, true);
                echo "</time></a></h2>
                    <ul class=\"schedule-group-appointments\">
                        ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "allByDate", array(0 => $context["date"]), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 12
                    echo "                            ";
                    $this->loadTemplate("BladeTesterCalendarBundle:Event:listItem.html.twig", "BladeTesterCalendarBundle:Event:list.html.twig", 12)->display(array_merge($context, array("event" => $context["event"])));
                    // line 13
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                    </ul>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ul>
    ";
        } else {
            // line 19
            echo "        <p>
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.list.no_events"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 23
        echo "    </section>
";
        
        $__internal_c2be200c89e4f3f4c5e24bb77ff3396b786f25419ea3596c9da168f4dd3f90b0->leave($__internal_c2be200c89e4f3f4c5e24bb77ff3396b786f25419ea3596c9da168f4dd3f90b0_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 23,  138 => 20,  135 => 19,  131 => 17,  115 => 14,  101 => 13,  98 => 12,  81 => 11,  68 => 9,  65 => 8,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'BladeTesterCalendarBundle:Event:base.html.twig' %}*/
/* */
/* {% block calendar_body %}*/
/*     <section class="schedule-content schedule-view-schedule">*/
/*     {% if events.count > 0 %}*/
/*         <ul class="list-schedule-events">*/
/*             {% for date in events.dates %}*/
/*                 <li class="day">*/
/*                     <h2 class="day-day"><a href="{{ path('calendar_event_list_by_day', {'year' : date|date('Y'), 'month' : date|date('m'), 'day' : date|date('d')}) }}"><time datetime="{{ date|date('Y-m-d H:i') }}">{{ date|date('l')|trans }}, {{ date|date('d') }} {{ date|date('F')|trans }}</time></a></h2>*/
/*                     <ul class="schedule-group-appointments">*/
/*                         {% for event in events.allByDate(date) %}*/
/*                             {% include 'BladeTesterCalendarBundle:Event:listItem.html.twig' with { 'event' : event } %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*         <p>*/
/*             {{ 'bladetester_calendar.list.no_events'|trans }}*/
/*         </p>*/
/*     {% endif %}*/
/*     </section>*/
/* {% endblock %}*/
