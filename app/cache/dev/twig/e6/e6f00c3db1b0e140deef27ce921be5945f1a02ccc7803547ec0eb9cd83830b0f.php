<?php

/* FOSUserBundle:views:base.html.twig */
class __TwigTemplate_9a187936da0ce257871d903732db58c42cbc2602250293ee0a2b70f9095f9bed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e0fe29875a7229217ec3fc7426c99b688a7d66ebdf26c71eed961077c08766d = $this->env->getExtension("native_profiler");
        $__internal_5e0fe29875a7229217ec3fc7426c99b688a7d66ebdf26c71eed961077c08766d->enter($__internal_5e0fe29875a7229217ec3fc7426c99b688a7d66ebdf26c71eed961077c08766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:views:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5e0fe29875a7229217ec3fc7426c99b688a7d66ebdf26c71eed961077c08766d->leave($__internal_5e0fe29875a7229217ec3fc7426c99b688a7d66ebdf26c71eed961077c08766d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ad1b134ebdb3433b1669edfdda1612ac685443bc13f422a74be08516dc5dffd = $this->env->getExtension("native_profiler");
        $__internal_5ad1b134ebdb3433b1669edfdda1612ac685443bc13f422a74be08516dc5dffd->enter($__internal_5ad1b134ebdb3433b1669edfdda1612ac685443bc13f422a74be08516dc5dffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ad1b134ebdb3433b1669edfdda1612ac685443bc13f422a74be08516dc5dffd->leave($__internal_5ad1b134ebdb3433b1669edfdda1612ac685443bc13f422a74be08516dc5dffd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31affdc18e419235437fa22dacb2eb29eb46397ad46c3ae3f280e6357156f207 = $this->env->getExtension("native_profiler");
        $__internal_31affdc18e419235437fa22dacb2eb29eb46397ad46c3ae3f280e6357156f207->enter($__internal_31affdc18e419235437fa22dacb2eb29eb46397ad46c3ae3f280e6357156f207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31affdc18e419235437fa22dacb2eb29eb46397ad46c3ae3f280e6357156f207->leave($__internal_31affdc18e419235437fa22dacb2eb29eb46397ad46c3ae3f280e6357156f207_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_78018b7a2b0ee0101363d13d793f7ea8086ca7ff94c0866736234c501df25562 = $this->env->getExtension("native_profiler");
        $__internal_78018b7a2b0ee0101363d13d793f7ea8086ca7ff94c0866736234c501df25562->enter($__internal_78018b7a2b0ee0101363d13d793f7ea8086ca7ff94c0866736234c501df25562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78018b7a2b0ee0101363d13d793f7ea8086ca7ff94c0866736234c501df25562->leave($__internal_78018b7a2b0ee0101363d13d793f7ea8086ca7ff94c0866736234c501df25562_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7e18a34b86a739a9d8180eb44bade2875949180c5a9fdd01e9f7c700608cb5c = $this->env->getExtension("native_profiler");
        $__internal_a7e18a34b86a739a9d8180eb44bade2875949180c5a9fdd01e9f7c700608cb5c->enter($__internal_a7e18a34b86a739a9d8180eb44bade2875949180c5a9fdd01e9f7c700608cb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a7e18a34b86a739a9d8180eb44bade2875949180c5a9fdd01e9f7c700608cb5c->leave($__internal_a7e18a34b86a739a9d8180eb44bade2875949180c5a9fdd01e9f7c700608cb5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:views:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
