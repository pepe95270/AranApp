<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_6b418b6d60dfafba01fc7d0ee4c15e9eeb9af1ffbbd2259473f0000b7265ac4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_177b1128b48cfa96d52e9f11ccd669d238fc2b2c3dac7b58e2e92d6aa69b679b = $this->env->getExtension("native_profiler");
        $__internal_177b1128b48cfa96d52e9f11ccd669d238fc2b2c3dac7b58e2e92d6aa69b679b->enter($__internal_177b1128b48cfa96d52e9f11ccd669d238fc2b2c3dac7b58e2e92d6aa69b679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_177b1128b48cfa96d52e9f11ccd669d238fc2b2c3dac7b58e2e92d6aa69b679b->leave($__internal_177b1128b48cfa96d52e9f11ccd669d238fc2b2c3dac7b58e2e92d6aa69b679b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5528554e3358638c53476dca80d12d3da5639cfcc5462dbf1b051354bb1192d7 = $this->env->getExtension("native_profiler");
        $__internal_5528554e3358638c53476dca80d12d3da5639cfcc5462dbf1b051354bb1192d7->enter($__internal_5528554e3358638c53476dca80d12d3da5639cfcc5462dbf1b051354bb1192d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5528554e3358638c53476dca80d12d3da5639cfcc5462dbf1b051354bb1192d7->leave($__internal_5528554e3358638c53476dca80d12d3da5639cfcc5462dbf1b051354bb1192d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
