<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c518931a4f909e7ed5495151a0fc7c774863fcdb33a7b9f609d59c21516e64bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_ff9ef86702b9c1c42f95a06865db9c5412b97193f2d58dacfd10fcad9dc3dd3c = $this->env->getExtension("native_profiler");
        $__internal_ff9ef86702b9c1c42f95a06865db9c5412b97193f2d58dacfd10fcad9dc3dd3c->enter($__internal_ff9ef86702b9c1c42f95a06865db9c5412b97193f2d58dacfd10fcad9dc3dd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff9ef86702b9c1c42f95a06865db9c5412b97193f2d58dacfd10fcad9dc3dd3c->leave($__internal_ff9ef86702b9c1c42f95a06865db9c5412b97193f2d58dacfd10fcad9dc3dd3c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d8ca8c15232caeb298c0c80bee640096fcf3fcee23b3fc4d406337baf8333a3 = $this->env->getExtension("native_profiler");
        $__internal_6d8ca8c15232caeb298c0c80bee640096fcf3fcee23b3fc4d406337baf8333a3->enter($__internal_6d8ca8c15232caeb298c0c80bee640096fcf3fcee23b3fc4d406337baf8333a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form class=\"col-md-12\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <div class=\"form-group col-md-2\">
        <label class=\"control-label required\" for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"form-group col-md-2\">
        <label class=\"control-label required\" for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>


    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label style=\"padding-top: 30px;\" for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>


    <input class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_6d8ca8c15232caeb298c0c80bee640096fcf3fcee23b3fc4d406337baf8333a3->leave($__internal_6d8ca8c15232caeb298c0c80bee640096fcf3fcee23b3fc4d406337baf8333a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  86 => 26,  77 => 20,  70 => 16,  66 => 15,  60 => 12,  56 => 11,  53 => 10,  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <a href="{{ path("fos_user_registration_register") }}">S'inscrire</a>*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form class="col-md-12" action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <div class="form-group col-md-2">*/
/*         <label class="control-label required" for="username">{{ 'security.login.username'|trans }}</label>*/
/*         <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/* */
/*     <div class="form-group col-md-2">*/
/*         <label class="control-label required" for="password">{{ 'security.login.password'|trans }}</label>*/
/*         <input class="form-control" type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/* */
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label style="padding-top: 30px;" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/* */
/*     <input class="btn btn-default" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
