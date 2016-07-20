<?php

/* @IvoryCKEditor/Form/_ckeditor_javascript.html.php */
class __TwigTemplate_ccad0be361f9e36b84cc3296b3145eb7ac960e2644395de8ac0e6833fbe02553 extends Twig_Template
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
        $__internal_68d53ff06642e72ee7a6c9b33afed43ed700b2ac73f51d2769c7834a76e822ec = $this->env->getExtension("native_profiler");
        $__internal_68d53ff06642e72ee7a6c9b33afed43ed700b2ac73f51d2769c7834a76e822ec->enter($__internal_68d53ff06642e72ee7a6c9b33afed43ed700b2ac73f51d2769c7834a76e822ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/_ckeditor_javascript.html.php"));

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
        
        $__internal_68d53ff06642e72ee7a6c9b33afed43ed700b2ac73f51d2769c7834a76e822ec->leave($__internal_68d53ff06642e72ee7a6c9b33afed43ed700b2ac73f51d2769c7834a76e822ec_prof);

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
