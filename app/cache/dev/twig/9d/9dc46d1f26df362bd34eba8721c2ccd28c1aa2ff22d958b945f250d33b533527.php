<?php

/* base.html.twig */
class __TwigTemplate_e4c99358a349447a20756b85085beee7bf8ee3cc7c2ccc2aa862941b3aa0f180 extends Twig_Template
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
        $__internal_1cb3fff5854b0d5d348f7c3a3f56adb7c995300502cc8e7d955a0f76c7ffd79d = $this->env->getExtension("native_profiler");
        $__internal_1cb3fff5854b0d5d348f7c3a3f56adb7c995300502cc8e7d955a0f76c7ffd79d->enter($__internal_1cb3fff5854b0d5d348f7c3a3f56adb7c995300502cc8e7d955a0f76c7ffd79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
            ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "        </div>
    </body>
</html>
";
        
        $__internal_1cb3fff5854b0d5d348f7c3a3f56adb7c995300502cc8e7d955a0f76c7ffd79d->leave($__internal_1cb3fff5854b0d5d348f7c3a3f56adb7c995300502cc8e7d955a0f76c7ffd79d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d63ab08163e7ec7c5b036fe4a89517d06ce1c18bb48bd1340a25665807ecfed = $this->env->getExtension("native_profiler");
        $__internal_1d63ab08163e7ec7c5b036fe4a89517d06ce1c18bb48bd1340a25665807ecfed->enter($__internal_1d63ab08163e7ec7c5b036fe4a89517d06ce1c18bb48bd1340a25665807ecfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d63ab08163e7ec7c5b036fe4a89517d06ce1c18bb48bd1340a25665807ecfed->leave($__internal_1d63ab08163e7ec7c5b036fe4a89517d06ce1c18bb48bd1340a25665807ecfed_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_897d6fc2b152ae0a572973628981b3a30044f2756a0dec326fe9efe92c6fcecf = $this->env->getExtension("native_profiler");
        $__internal_897d6fc2b152ae0a572973628981b3a30044f2756a0dec326fe9efe92c6fcecf->enter($__internal_897d6fc2b152ae0a572973628981b3a30044f2756a0dec326fe9efe92c6fcecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_897d6fc2b152ae0a572973628981b3a30044f2756a0dec326fe9efe92c6fcecf->leave($__internal_897d6fc2b152ae0a572973628981b3a30044f2756a0dec326fe9efe92c6fcecf_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_51afdd8bae64ddeaf7fb49eb17cace29352bad891f9f1337abf6b9a3044f6043 = $this->env->getExtension("native_profiler");
        $__internal_51afdd8bae64ddeaf7fb49eb17cace29352bad891f9f1337abf6b9a3044f6043->enter($__internal_51afdd8bae64ddeaf7fb49eb17cace29352bad891f9f1337abf6b9a3044f6043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_51afdd8bae64ddeaf7fb49eb17cace29352bad891f9f1337abf6b9a3044f6043->leave($__internal_51afdd8bae64ddeaf7fb49eb17cace29352bad891f9f1337abf6b9a3044f6043_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25db2f305fc50d7cab60900a0d1dbce2b78a040938d0b6fed8e76d08d2266db7 = $this->env->getExtension("native_profiler");
        $__internal_25db2f305fc50d7cab60900a0d1dbce2b78a040938d0b6fed8e76d08d2266db7->enter($__internal_25db2f305fc50d7cab60900a0d1dbce2b78a040938d0b6fed8e76d08d2266db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_25db2f305fc50d7cab60900a0d1dbce2b78a040938d0b6fed8e76d08d2266db7->leave($__internal_25db2f305fc50d7cab60900a0d1dbce2b78a040938d0b6fed8e76d08d2266db7_prof);

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
        return array (  112 => 26,  101 => 25,  90 => 7,  78 => 5,  68 => 27,  65 => 26,  63 => 25,  42 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
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
/*     </head>*/
/*     <body>*/
/*         <div class="col-md-12">*/
/*             {% block body %}{% endblock %}*/
/*             {% block javascripts %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
