<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4f30651121ff0d351ad945d64e8f247f4876ff038db08292544ddeae2f4c9d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dc2727297c5a74ae7b730ee518b4cb6daea387593194fd731e815c420116ee2 = $this->env->getExtension("native_profiler");
        $__internal_9dc2727297c5a74ae7b730ee518b4cb6daea387593194fd731e815c420116ee2->enter($__internal_9dc2727297c5a74ae7b730ee518b4cb6daea387593194fd731e815c420116ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dc2727297c5a74ae7b730ee518b4cb6daea387593194fd731e815c420116ee2->leave($__internal_9dc2727297c5a74ae7b730ee518b4cb6daea387593194fd731e815c420116ee2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58b45b5b8d9a54ddeecb25114570fc29e42b96a059746127882c690ee4b80a5c = $this->env->getExtension("native_profiler");
        $__internal_58b45b5b8d9a54ddeecb25114570fc29e42b96a059746127882c690ee4b80a5c->enter($__internal_58b45b5b8d9a54ddeecb25114570fc29e42b96a059746127882c690ee4b80a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58b45b5b8d9a54ddeecb25114570fc29e42b96a059746127882c690ee4b80a5c->leave($__internal_58b45b5b8d9a54ddeecb25114570fc29e42b96a059746127882c690ee4b80a5c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51a59a4e985e0a5ab4a183e4a43a3cf9561b376dffcc7da4c45ebd1106df6d48 = $this->env->getExtension("native_profiler");
        $__internal_51a59a4e985e0a5ab4a183e4a43a3cf9561b376dffcc7da4c45ebd1106df6d48->enter($__internal_51a59a4e985e0a5ab4a183e4a43a3cf9561b376dffcc7da4c45ebd1106df6d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51a59a4e985e0a5ab4a183e4a43a3cf9561b376dffcc7da4c45ebd1106df6d48->leave($__internal_51a59a4e985e0a5ab4a183e4a43a3cf9561b376dffcc7da4c45ebd1106df6d48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2cc47748eac18afb6178b7cc5c0231b580f8423f9f135a8fa59ffc102f43864 = $this->env->getExtension("native_profiler");
        $__internal_a2cc47748eac18afb6178b7cc5c0231b580f8423f9f135a8fa59ffc102f43864->enter($__internal_a2cc47748eac18afb6178b7cc5c0231b580f8423f9f135a8fa59ffc102f43864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2cc47748eac18afb6178b7cc5c0231b580f8423f9f135a8fa59ffc102f43864->leave($__internal_a2cc47748eac18afb6178b7cc5c0231b580f8423f9f135a8fa59ffc102f43864_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
