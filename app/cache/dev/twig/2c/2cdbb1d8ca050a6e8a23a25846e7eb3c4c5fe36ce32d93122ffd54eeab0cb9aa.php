<?php

/* @IvoryCKEditor/Form/_ckeditor_javascript.html.php */
class __TwigTemplate_57658602850b52175639c1587bf9a0c9352f2ba90789243f2004436f386bf2c7 extends Twig_Template
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
        $__internal_60dfc8aeeceb709d82f2ae307d14297c2fb957e3487011111fbdac8824ec820d = $this->env->getExtension("native_profiler");
        $__internal_60dfc8aeeceb709d82f2ae307d14297c2fb957e3487011111fbdac8824ec820d->enter($__internal_60dfc8aeeceb709d82f2ae307d14297c2fb957e3487011111fbdac8824ec820d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/_ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$autoload) : ?>
    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
    </script>
    <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
    <?php if (\$jquery) : ?>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
    <?php endif; ?>
<?php endif; ?>
<script type=\"text/javascript\">
    <?php if (\$jquery) : ?>
        \$(function () {
    <?php endif; ?>

    <?php if (\$require_js) : ?>
        require(['ckeditor'], function() {
    <?php endif; ?>

    <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

    <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
        <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
    <?php endforeach; ?>

    <?php foreach (\$styles as \$styleName => \$style): ?>
        <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
    <?php endforeach; ?>

    <?php foreach (\$templates as \$templateName => \$template): ?>
        <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
    <?php endforeach; ?>

    <?php \$view['slots']->set('ckeditor_widget_extra', '') ?>

    <?php echo \$view['ivory_ckeditor']->renderWidget(
        \$id,
        \$config,
        array(
            'auto_inline'  => \$auto_inline,
            'inline'       => \$inline,
            'input_sync'   => \$input_sync,
            'filebrowsers' => \$filebrowsers,
        )
    ); ?>

    <?php if (\$require_js) : ?>
        });
    <?php endif; ?>

    <?php if (\$jquery) : ?>
        });
    <?php endif; ?>
</script>
";
        
        $__internal_60dfc8aeeceb709d82f2ae307d14297c2fb957e3487011111fbdac8824ec820d->leave($__internal_60dfc8aeeceb709d82f2ae307d14297c2fb957e3487011111fbdac8824ec820d_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/_ckeditor_javascript.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($autoload) : ?>*/
/*     <script type="text/javascript">*/
/*         var CKEDITOR_BASEPATH = "<?php echo $view['ivory_ckeditor']->renderBasePath($base_path); ?>";*/
/*     </script>*/
/*     <script type="text/javascript" src="<?php echo $view['ivory_ckeditor']->renderJsPath($js_path); ?>"></script>*/
/*     <?php if ($jquery) : ?>*/
/*         <script type="text/javascript" src="<?php echo $view['ivory_ckeditor']->renderJsPath($jquery_path); ?>"></script>*/
/*     <?php endif; ?>*/
/* <?php endif; ?>*/
/* <script type="text/javascript">*/
/*     <?php if ($jquery) : ?>*/
/*         $(function () {*/
/*     <?php endif; ?>*/
/* */
/*     <?php if ($require_js) : ?>*/
/*         require(['ckeditor'], function() {*/
/*     <?php endif; ?>*/
/* */
/*     <?php echo $view['ivory_ckeditor']->renderDestroy($id); ?>*/
/* */
/*     <?php foreach ($plugins as $pluginName => $plugin): ?>*/
/*         <?php echo $view['ivory_ckeditor']->renderPlugin($pluginName, $plugin); ?>*/
/*     <?php endforeach; ?>*/
/* */
/*     <?php foreach ($styles as $styleName => $style): ?>*/
/*         <?php echo $view['ivory_ckeditor']->renderStylesSet($styleName, $style); ?>*/
/*     <?php endforeach; ?>*/
/* */
/*     <?php foreach ($templates as $templateName => $template): ?>*/
/*         <?php echo $view['ivory_ckeditor']->renderTemplate($templateName, $template); ?>*/
/*     <?php endforeach; ?>*/
/* */
/*     <?php $view['slots']->set('ckeditor_widget_extra', '') ?>*/
/* */
/*     <?php echo $view['ivory_ckeditor']->renderWidget(*/
/*         $id,*/
/*         $config,*/
/*         array(*/
/*             'auto_inline'  => $auto_inline,*/
/*             'inline'       => $inline,*/
/*             'input_sync'   => $input_sync,*/
/*             'filebrowsers' => $filebrowsers,*/
/*         )*/
/*     ); ?>*/
/* */
/*     <?php if ($require_js) : ?>*/
/*         });*/
/*     <?php endif; ?>*/
/* */
/*     <?php if ($jquery) : ?>*/
/*         });*/
/*     <?php endif; ?>*/
/* </script>*/
/* */
