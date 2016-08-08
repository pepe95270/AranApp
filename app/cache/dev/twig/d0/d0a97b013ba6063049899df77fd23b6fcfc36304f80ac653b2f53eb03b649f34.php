<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b1bd975362a0c83b19d6141a90d0584bed4e6e4618529cc33b63134c2fec5e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de1b226b11e7a6971fb01078e86c06715aaace18d79f59bbe5d07e2f2fd4a82e = $this->env->getExtension("native_profiler");
        $__internal_de1b226b11e7a6971fb01078e86c06715aaace18d79f59bbe5d07e2f2fd4a82e->enter($__internal_de1b226b11e7a6971fb01078e86c06715aaace18d79f59bbe5d07e2f2fd4a82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script
                src=\"https://code.jquery.com/jquery-2.2.4.min.js\"
                integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"
                crossorigin=\"anonymous\">
        </script>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>

    </head>
    <body>
        <div class=\"col-md-12\">
            <div>
                ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 30
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 32
        echo "            </div>

            ";
        // line 34
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 35
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 36
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 37
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 38
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            ";
        }
        // line 43
        echo "
            <div>
                ";
        // line 45
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 47
        echo "            </div>
        </div>
    </body>
</html>
";
        
        $__internal_de1b226b11e7a6971fb01078e86c06715aaace18d79f59bbe5d07e2f2fd4a82e->leave($__internal_de1b226b11e7a6971fb01078e86c06715aaace18d79f59bbe5d07e2f2fd4a82e_prof);

    }

    // line 45
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f73a6e709f9a86951c49bd2dca38273a522bad30c95cc473ccd1c25413d438bf = $this->env->getExtension("native_profiler");
        $__internal_f73a6e709f9a86951c49bd2dca38273a522bad30c95cc473ccd1c25413d438bf->enter($__internal_f73a6e709f9a86951c49bd2dca38273a522bad30c95cc473ccd1c25413d438bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 46
        echo "                ";
        
        $__internal_f73a6e709f9a86951c49bd2dca38273a522bad30c95cc473ccd1c25413d438bf->leave($__internal_f73a6e709f9a86951c49bd2dca38273a522bad30c95cc473ccd1c25413d438bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  132 => 45,  121 => 47,  119 => 45,  115 => 43,  112 => 42,  106 => 41,  97 => 38,  92 => 37,  87 => 36,  82 => 35,  80 => 34,  76 => 32,  68 => 30,  62 => 27,  58 => 26,  53 => 25,  51 => 24,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script*/
/*                 src="https://code.jquery.com/jquery-2.2.4.min.js"*/
/*                 integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="*/
/*                 crossorigin="anonymous">*/
/*         </script>*/
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* */
/*     </head>*/
/*     <body>*/
/*         <div class="col-md-12">*/
/*             <div>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                     <a href="{{ path('fos_user_security_logout') }}">*/
/*                         {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                     </a>*/
/*                 {% else %}*/
/*                     <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             {% if app.request.hasPreviousSession %}*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="flash-{{ type }}">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/* */
/*             <div>*/
/*                 {% block fos_user_content %}*/
/*                 {% endblock fos_user_content %}*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
