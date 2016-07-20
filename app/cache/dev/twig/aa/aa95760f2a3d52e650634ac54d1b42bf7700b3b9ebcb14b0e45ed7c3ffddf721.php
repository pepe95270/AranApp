<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_d4b549cce8c4187d85b285fff69d979250f34fb3ac8840a925797cf1a4ddb3c5 extends Twig_Template
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
        $__internal_058cfa25e458604ce4230e8982d7f631c519d07d8dc3bf80300faa00ed5b6ebd = $this->env->getExtension("native_profiler");
        $__internal_058cfa25e458604ce4230e8982d7f631c519d07d8dc3bf80300faa00ed5b6ebd->enter($__internal_058cfa25e458604ce4230e8982d7f631c519d07d8dc3bf80300faa00ed5b6ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_058cfa25e458604ce4230e8982d7f631c519d07d8dc3bf80300faa00ed5b6ebd->leave($__internal_058cfa25e458604ce4230e8982d7f631c519d07d8dc3bf80300faa00ed5b6ebd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4db76c72cae37c3d59365ee982abe500569b794dcfe5fc6d33d4fcdb5ef55ec1 = $this->env->getExtension("native_profiler");
        $__internal_4db76c72cae37c3d59365ee982abe500569b794dcfe5fc6d33d4fcdb5ef55ec1->enter($__internal_4db76c72cae37c3d59365ee982abe500569b794dcfe5fc6d33d4fcdb5ef55ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4db76c72cae37c3d59365ee982abe500569b794dcfe5fc6d33d4fcdb5ef55ec1->leave($__internal_4db76c72cae37c3d59365ee982abe500569b794dcfe5fc6d33d4fcdb5ef55ec1_prof);

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
