<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_49dae53e02280d25fe13ed65cd931b58a6b61ba56c80fa3f97f3f18bf4a6abce extends Twig_Template
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
        $__internal_1766dd53a6ea1f2abe47bc07b0e0a668d0b83778aeb83c23796f6e307bc76af9 = $this->env->getExtension("native_profiler");
        $__internal_1766dd53a6ea1f2abe47bc07b0e0a668d0b83778aeb83c23796f6e307bc76af9->enter($__internal_1766dd53a6ea1f2abe47bc07b0e0a668d0b83778aeb83c23796f6e307bc76af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_1766dd53a6ea1f2abe47bc07b0e0a668d0b83778aeb83c23796f6e307bc76af9->leave($__internal_1766dd53a6ea1f2abe47bc07b0e0a668d0b83778aeb83c23796f6e307bc76af9_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
