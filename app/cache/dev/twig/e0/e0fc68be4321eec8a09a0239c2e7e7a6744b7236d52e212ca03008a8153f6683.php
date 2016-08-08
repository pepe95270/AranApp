<?php

/* BladeTesterCalendarBundle:Base:base.html.twig */
class __TwigTemplate_5a4f52b6f0a90b51ee2e6a114b41fb6a2f7ae1daf40634942edd4230ebfdcbae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caa2ac7908a0633935708957a71cb7587ebbe64ef7d21f289aa092164651ca2a = $this->env->getExtension("native_profiler");
        $__internal_caa2ac7908a0633935708957a71cb7587ebbe64ef7d21f289aa092164651ca2a->enter($__internal_caa2ac7908a0633935708957a71cb7587ebbe64ef7d21f289aa092164651ca2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BladeTesterCalendarBundle:Base:base.html.twig"));

        // line 1
        echo "<html>
    <head>
        <link rel=\"icon\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/css/calendar-header.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/css/calendar.css"), "html", null, true);
        echo "\">
        <title>Mes disponibilités</title>
    </head>
    <body>
            <div>
                ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 16
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 18
        echo "            </div>
            <div>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">
                    Retourner au profil
                </a>
            </div>
            <div class=\"app\">
                <header class=\"main-header\">
                    ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "                </header>


                <div class=\"main-body\">
                    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                </div>

                <footer class=\"main-footer\">
                    ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "                </footer>
            </div>

    ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>

";
        
        $__internal_caa2ac7908a0633935708957a71cb7587ebbe64ef7d21f289aa092164651ca2a->leave($__internal_caa2ac7908a0633935708957a71cb7587ebbe64ef7d21f289aa092164651ca2a_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_a0dcab10a05ceddf44a04137b787648c45f76a134374cb0ce9f77918a29354d3 = $this->env->getExtension("native_profiler");
        $__internal_a0dcab10a05ceddf44a04137b787648c45f76a134374cb0ce9f77918a29354d3->enter($__internal_a0dcab10a05ceddf44a04137b787648c45f76a134374cb0ce9f77918a29354d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "                    ";
        
        $__internal_a0dcab10a05ceddf44a04137b787648c45f76a134374cb0ce9f77918a29354d3->leave($__internal_a0dcab10a05ceddf44a04137b787648c45f76a134374cb0ce9f77918a29354d3_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_36d8f43cbf8c408750f2f424b14e201d8a04fa3e166fb8aa63f18c178aa7e9ee = $this->env->getExtension("native_profiler");
        $__internal_36d8f43cbf8c408750f2f424b14e201d8a04fa3e166fb8aa63f18c178aa7e9ee->enter($__internal_36d8f43cbf8c408750f2f424b14e201d8a04fa3e166fb8aa63f18c178aa7e9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "                    ";
        
        $__internal_36d8f43cbf8c408750f2f424b14e201d8a04fa3e166fb8aa63f18c178aa7e9ee->leave($__internal_36d8f43cbf8c408750f2f424b14e201d8a04fa3e166fb8aa63f18c178aa7e9ee_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d9ec4528c5fabe85ad9f2bd19120fbf91d72109b9b2f0101efd02025cf0d52cf = $this->env->getExtension("native_profiler");
        $__internal_d9ec4528c5fabe85ad9f2bd19120fbf91d72109b9b2f0101efd02025cf0d52cf->enter($__internal_d9ec4528c5fabe85ad9f2bd19120fbf91d72109b9b2f0101efd02025cf0d52cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "                    ";
        
        $__internal_d9ec4528c5fabe85ad9f2bd19120fbf91d72109b9b2f0101efd02025cf0d52cf->leave($__internal_d9ec4528c5fabe85ad9f2bd19120fbf91d72109b9b2f0101efd02025cf0d52cf_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6da23c861334eccfd4b5886ea9ee7e0942e2146142296df680ad8500ac5b89e3 = $this->env->getExtension("native_profiler");
        $__internal_6da23c861334eccfd4b5886ea9ee7e0942e2146142296df680ad8500ac5b89e3->enter($__internal_6da23c861334eccfd4b5886ea9ee7e0942e2146142296df680ad8500ac5b89e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bladetestercalendar/js/calendar.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6da23c861334eccfd4b5886ea9ee7e0942e2146142296df680ad8500ac5b89e3->leave($__internal_6da23c861334eccfd4b5886ea9ee7e0942e2146142296df680ad8500ac5b89e3_prof);

    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Base:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 44,  163 => 43,  157 => 42,  150 => 38,  144 => 37,  137 => 33,  131 => 32,  124 => 27,  118 => 26,  108 => 46,  106 => 42,  101 => 39,  99 => 37,  94 => 34,  92 => 32,  86 => 28,  84 => 26,  75 => 20,  71 => 18,  63 => 16,  57 => 13,  53 => 12,  48 => 11,  46 => 10,  38 => 5,  34 => 4,  30 => 3,  26 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <link rel="icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/bladetestercalendar/css/calendar-header.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/bladetestercalendar/css/calendar.css') }}">*/
/*         <title>Mes disponibilités</title>*/
/*     </head>*/
/*     <body>*/
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
/*             <div>*/
/*                 <a href="{{ path('fos_user_profile_show') }}">*/
/*                     Retourner au profil*/
/*                 </a>*/
/*             </div>*/
/*             <div class="app">*/
/*                 <header class="main-header">*/
/*                     {% block header %}*/
/*                     {% endblock %}*/
/*                 </header>*/
/* */
/* */
/*                 <div class="main-body">*/
/*                     {% block body %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <footer class="main-footer">*/
/*                     {% block footer %}*/
/*                     {% endblock %}*/
/*                 </footer>*/
/*             </div>*/
/* */
/*     {% block javascripts %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/bladetestercalendar/js/jquery-1.9.1.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/bladetestercalendar/js/calendar.js') }}"></script>*/
/*     {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
/* */
