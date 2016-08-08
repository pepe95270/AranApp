<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_2a3d7bf0f5a97026d4967244497d11e0f2090fe261f9d3af5d2ed0e8d8636f96 extends Twig_Template
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
        $__internal_45af3c8280fd525426f35ecfe6b86bdedc61623f34a4e11b4949c51081df8499 = $this->env->getExtension("native_profiler");
        $__internal_45af3c8280fd525426f35ecfe6b86bdedc61623f34a4e11b4949c51081df8499->enter($__internal_45af3c8280fd525426f35ecfe6b86bdedc61623f34a4e11b4949c51081df8499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_45af3c8280fd525426f35ecfe6b86bdedc61623f34a4e11b4949c51081df8499->leave($__internal_45af3c8280fd525426f35ecfe6b86bdedc61623f34a4e11b4949c51081df8499_prof);

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
