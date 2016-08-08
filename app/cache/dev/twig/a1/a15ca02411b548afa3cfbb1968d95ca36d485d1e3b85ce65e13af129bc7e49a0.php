<?php

/* @EasyAdmin/default/field_image.html.twig */
class __TwigTemplate_e542fe7ff1291e6208ae1a7bab0aa2113475d6b1553d26534bd1b5283547153b extends Twig_Template
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
        $__internal_bed618d87d57bb8c2ff6a5ff568e9c513b572c92068e7811fafb927e3b2c95b7 = $this->env->getExtension("native_profiler");
        $__internal_bed618d87d57bb8c2ff6a5ff568e9c513b572c92068e7811fafb927e3b2c95b7->enter($__internal_bed618d87d57bb8c2ff6a5ff568e9c513b572c92068e7811fafb927e3b2c95b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_bed618d87d57bb8c2ff6a5ff568e9c513b572c92068e7811fafb927e3b2c95b7->leave($__internal_bed618d87d57bb8c2ff6a5ff568e9c513b572c92068e7811fafb927e3b2c95b7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  33 => 5,  27 => 2,  22 => 1,);
    }
}
/* <a href="#" class="easyadmin-thumbnail" data-featherlight="#easyadmin-lightbox-{{ uuid }}" data-featherlight-close-on-click="anywhere">*/
/*     <img src="{{ value }}">*/
/* </a>*/
/* */
/* <div id="easyadmin-lightbox-{{ uuid }}" class="easyadmin-lightbox">*/
/*     <img src="{{ value }}">*/
/* </div>*/
/* */
