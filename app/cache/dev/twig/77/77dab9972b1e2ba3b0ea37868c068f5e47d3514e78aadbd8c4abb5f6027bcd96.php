<?php

/* BladeTesterCalendarBundle:Event:base.html.twig */
class __TwigTemplate_98174ab48c28d37540e434660db2298e08e4f6a48e4d11bb40259b0562df3fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Base:base.html.twig", "BladeTesterCalendarBundle:Event:base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'calendar_date_selector' => array($this, 'block_calendar_date_selector'),
            'calendar_sidebar' => array($this, 'block_calendar_sidebar'),
            'calendar_body' => array($this, 'block_calendar_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BladeTesterCalendarBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8c273e56953a524f89b351a75734df87f48a3b95a40e180f8f4444ea61bedf0 = $this->env->getExtension("native_profiler");
        $__internal_b8c273e56953a524f89b351a75734df87f48a3b95a40e180f8f4444ea61bedf0->enter($__internal_b8c273e56953a524f89b351a75734df87f48a3b95a40e180f8f4444ea61bedf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Event:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c273e56953a524f89b351a75734df87f48a3b95a40e180f8f4444ea61bedf0->leave($__internal_b8c273e56953a524f89b351a75734df87f48a3b95a40e180f8f4444ea61bedf0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_128c2495ee80762075ea294d3d1e6f89809cc5d0d6d460e355aac11cd55ae2e0 = $this->env->getExtension("native_profiler");
        $__internal_128c2495ee80762075ea294d3d1e6f89809cc5d0d6d460e355aac11cd55ae2e0->enter($__internal_128c2495ee80762075ea294d3d1e6f89809cc5d0d6d460e355aac11cd55ae2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"main-title\">Mes disponibilités</h1>


    <nav class=\"list-options\">
        <ul class=\"list-inline column w-20\">
            <li>
                <a id=\"calendar-event-add-btn\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("calendar_event_add");
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
        echo "&year=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "Y"), "html", null, true);
        echo "&month=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "m"), "html", null, true);
        echo "&day=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "d"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter une disponibilité</a>
            </li>
        </ul>
        <ul class=\"list-inline column w-80 t-align-right\">
            <li><a class=\"btn\" href=\"#\" onclick=\"window.print();return false;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.print"), "html", null, true);
        echo "</a></li>
        </ul>
    </nav>

    <section class=\"main-content\">
        <div class=\"schedule\">
            <section class=\"schedule-nav\">
                ";
        // line 21
        $this->displayBlock('calendar_date_selector', $context, $blocks);
        // line 23
        echo "                ";
        $this->displayBlock('calendar_sidebar', $context, $blocks);
        // line 26
        echo "            </section>

            ";
        // line 28
        $this->displayBlock('calendar_body', $context, $blocks);
        // line 30
        echo "        </div>
    </section>
";
        
        $__internal_128c2495ee80762075ea294d3d1e6f89809cc5d0d6d460e355aac11cd55ae2e0->leave($__internal_128c2495ee80762075ea294d3d1e6f89809cc5d0d6d460e355aac11cd55ae2e0_prof);

    }

    // line 21
    public function block_calendar_date_selector($context, array $blocks = array())
    {
        $__internal_89c84f1da04848b577618a987ec1db0d6767f4081aa5a3f85551b65055a887bf = $this->env->getExtension("native_profiler");
        $__internal_89c84f1da04848b577618a987ec1db0d6767f4081aa5a3f85551b65055a887bf->enter($__internal_89c84f1da04848b577618a987ec1db0d6767f4081aa5a3f85551b65055a887bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_date_selector"));

        // line 22
        echo "                ";
        
        $__internal_89c84f1da04848b577618a987ec1db0d6767f4081aa5a3f85551b65055a887bf->leave($__internal_89c84f1da04848b577618a987ec1db0d6767f4081aa5a3f85551b65055a887bf_prof);

    }

    // line 23
    public function block_calendar_sidebar($context, array $blocks = array())
    {
        $__internal_edb07c4024d36ca9a2bc62b912caaf335bba994c4336ea2300de247e5f06e065 = $this->env->getExtension("native_profiler");
        $__internal_edb07c4024d36ca9a2bc62b912caaf335bba994c4336ea2300de247e5f06e065->enter($__internal_edb07c4024d36ca9a2bc62b912caaf335bba994c4336ea2300de247e5f06e065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_sidebar"));

        // line 24
        echo "                    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("BladeTesterCalendarBundle:Calendar:showMini", array("year" => twig_date_format_filter($this->env, "now", "Y"), "month" => twig_date_format_filter($this->env, "now", "m"))), array());
        // line 25
        echo "                ";
        
        $__internal_edb07c4024d36ca9a2bc62b912caaf335bba994c4336ea2300de247e5f06e065->leave($__internal_edb07c4024d36ca9a2bc62b912caaf335bba994c4336ea2300de247e5f06e065_prof);

    }

    // line 28
    public function block_calendar_body($context, array $blocks = array())
    {
        $__internal_b83a70898069b2111ea52ba32090c8d846de864bca1fd359ac91117b03b7a0c3 = $this->env->getExtension("native_profiler");
        $__internal_b83a70898069b2111ea52ba32090c8d846de864bca1fd359ac91117b03b7a0c3->enter($__internal_b83a70898069b2111ea52ba32090c8d846de864bca1fd359ac91117b03b7a0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendar_body"));

        // line 29
        echo "            ";
        
        $__internal_b83a70898069b2111ea52ba32090c8d846de864bca1fd359ac91117b03b7a0c3->leave($__internal_b83a70898069b2111ea52ba32090c8d846de864bca1fd359ac91117b03b7a0c3_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 29,  125 => 28,  118 => 25,  115 => 24,  109 => 23,  102 => 22,  96 => 21,  87 => 30,  85 => 28,  81 => 26,  78 => 23,  76 => 21,  66 => 14,  51 => 10,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'BladeTesterCalendarBundle:Base:base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 class="main-title">Mes disponibilités</h1>*/
/* */
/* */
/*     <nav class="list-options">*/
/*         <ul class="list-inline column w-20">*/
/*             <li>*/
/*                 <a id="calendar-event-add-btn" href="{{ path('calendar_event_add') }}?destination={{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) }}&year={{ current|date('Y') }}&month={{ current|date('m') }}&day={{ current|date('d') }}" class="btn btn-primary">Ajouter une disponibilité</a>*/
/*             </li>*/
/*         </ul>*/
/*         <ul class="list-inline column w-80 t-align-right">*/
/*             <li><a class="btn" href="#" onclick="window.print();return false;">{{ 'bladetester_calendar.label.print'|trans }}</a></li>*/
/*         </ul>*/
/*     </nav>*/
/* */
/*     <section class="main-content">*/
/*         <div class="schedule">*/
/*             <section class="schedule-nav">*/
/*                 {% block calendar_date_selector %}*/
/*                 {% endblock %}*/
/*                 {% block calendar_sidebar %}*/
/*                     {% render(controller('BladeTesterCalendarBundle:Calendar:showMini', { year : "now"|date('Y'), month: "now"|date('m') })) %}*/
/*                 {% endblock %}*/
/*             </section>*/
/* */
/*             {% block calendar_body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
