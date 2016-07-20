<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_591e974c61a294622bee93a8404fdd94936359f247fb4ab36c5f6152a0d57742 extends Twig_Template
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
        $__internal_533d666b3d328fd9c5e4e113002d3bf2c876cba3e98458720fb97f5025a9634b = $this->env->getExtension("native_profiler");
        $__internal_533d666b3d328fd9c5e4e113002d3bf2c876cba3e98458720fb97f5025a9634b->enter($__internal_533d666b3d328fd9c5e4e113002d3bf2c876cba3e98458720fb97f5025a9634b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_533d666b3d328fd9c5e4e113002d3bf2c876cba3e98458720fb97f5025a9634b->leave($__internal_533d666b3d328fd9c5e4e113002d3bf2c876cba3e98458720fb97f5025a9634b_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'attributes') ?>><?php echo htmlspecialchars($value) ?></textarea>*/
/* */
/* <?php if ($enable && !$async) : ?>*/
/*     <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>*/
/* <?php endif; ?>*/
/* */
