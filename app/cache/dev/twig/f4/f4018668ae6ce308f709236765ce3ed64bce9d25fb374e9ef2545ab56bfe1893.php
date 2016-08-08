<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_93680a3ca8ab9ff8b2d9e96582cd53a044ef0053e8113e25e0b1b223b895adc9 extends Twig_Template
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
        $__internal_9ceb9fcef606b6cabae996c860b05c434047a8a6220a60d6b35509bb35028f8e = $this->env->getExtension("native_profiler");
        $__internal_9ceb9fcef606b6cabae996c860b05c434047a8a6220a60d6b35509bb35028f8e->enter($__internal_9ceb9fcef606b6cabae996c860b05c434047a8a6220a60d6b35509bb35028f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_9ceb9fcef606b6cabae996c860b05c434047a8a6220a60d6b35509bb35028f8e->leave($__internal_9ceb9fcef606b6cabae996c860b05c434047a8a6220a60d6b35509bb35028f8e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
