<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1ac78206b64320db5f45ec7d41be72b4557e69d829937c1fd039573d0ed0cb81 extends Twig_Template
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
        $__internal_13e3f3c15510392096295de1e46ddde428de3733fee3b62bb13f98e4a149e59f = $this->env->getExtension("native_profiler");
        $__internal_13e3f3c15510392096295de1e46ddde428de3733fee3b62bb13f98e4a149e59f->enter($__internal_13e3f3c15510392096295de1e46ddde428de3733fee3b62bb13f98e4a149e59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_13e3f3c15510392096295de1e46ddde428de3733fee3b62bb13f98e4a149e59f->leave($__internal_13e3f3c15510392096295de1e46ddde428de3733fee3b62bb13f98e4a149e59f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
