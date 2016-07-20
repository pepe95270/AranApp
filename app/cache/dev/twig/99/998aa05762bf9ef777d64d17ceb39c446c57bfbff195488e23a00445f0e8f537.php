<?php

/* base.html.twig */
class __TwigTemplate_7fe66aa0f9fff277ebbfae60f46f0ee00c4e59622fffb0b898727f4d5584b2b8 extends Twig_Template
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
        $__internal_95c587910531ec3ebd44f5030677cff6d23a43d288350abc9f7512a7c753ac29 = $this->env->getExtension("native_profiler");
        $__internal_95c587910531ec3ebd44f5030677cff6d23a43d288350abc9f7512a7c753ac29->enter($__internal_95c587910531ec3ebd44f5030677cff6d23a43d288350abc9f7512a7c753ac29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_95c587910531ec3ebd44f5030677cff6d23a43d288350abc9f7512a7c753ac29->leave($__internal_95c587910531ec3ebd44f5030677cff6d23a43d288350abc9f7512a7c753ac29_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_290d0dd23ae951ece33419dff472bf6cae71b567c3bc014ba90dd8a1d9c6dd25 = $this->env->getExtension("native_profiler");
        $__internal_290d0dd23ae951ece33419dff472bf6cae71b567c3bc014ba90dd8a1d9c6dd25->enter($__internal_290d0dd23ae951ece33419dff472bf6cae71b567c3bc014ba90dd8a1d9c6dd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_290d0dd23ae951ece33419dff472bf6cae71b567c3bc014ba90dd8a1d9c6dd25->leave($__internal_290d0dd23ae951ece33419dff472bf6cae71b567c3bc014ba90dd8a1d9c6dd25_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cf08f5bd241aa9991d2de1c34610e04b397251b1f051c20f97277fb7ed806f1 = $this->env->getExtension("native_profiler");
        $__internal_6cf08f5bd241aa9991d2de1c34610e04b397251b1f051c20f97277fb7ed806f1->enter($__internal_6cf08f5bd241aa9991d2de1c34610e04b397251b1f051c20f97277fb7ed806f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6cf08f5bd241aa9991d2de1c34610e04b397251b1f051c20f97277fb7ed806f1->leave($__internal_6cf08f5bd241aa9991d2de1c34610e04b397251b1f051c20f97277fb7ed806f1_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f16cb3225cc31bb5df64a6d4a2cd9a19cb2c2d96c95817efae6d382b9cc5ab1d = $this->env->getExtension("native_profiler");
        $__internal_f16cb3225cc31bb5df64a6d4a2cd9a19cb2c2d96c95817efae6d382b9cc5ab1d->enter($__internal_f16cb3225cc31bb5df64a6d4a2cd9a19cb2c2d96c95817efae6d382b9cc5ab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f16cb3225cc31bb5df64a6d4a2cd9a19cb2c2d96c95817efae6d382b9cc5ab1d->leave($__internal_f16cb3225cc31bb5df64a6d4a2cd9a19cb2c2d96c95817efae6d382b9cc5ab1d_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2cda388446ad7d21b0487ca214ae0b4825f0f00dbead25358e849622a038d8a = $this->env->getExtension("native_profiler");
        $__internal_d2cda388446ad7d21b0487ca214ae0b4825f0f00dbead25358e849622a038d8a->enter($__internal_d2cda388446ad7d21b0487ca214ae0b4825f0f00dbead25358e849622a038d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d2cda388446ad7d21b0487ca214ae0b4825f0f00dbead25358e849622a038d8a->leave($__internal_d2cda388446ad7d21b0487ca214ae0b4825f0f00dbead25358e849622a038d8a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  90 => 18,  79 => 6,  67 => 5,  58 => 20,  55 => 19,  53 => 18,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
