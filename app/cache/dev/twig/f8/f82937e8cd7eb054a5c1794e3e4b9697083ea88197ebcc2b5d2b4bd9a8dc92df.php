<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a2adeb3a952fe84a3fb927b6e61f26ff343a16cfe7cf1300ed6e6177aedda30c extends Twig_Template
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
        $__internal_55021e90edda5b9d2f0495ad55929ccb5a85dfafe8a87a12c27945bf10ea1df6 = $this->env->getExtension("native_profiler");
        $__internal_55021e90edda5b9d2f0495ad55929ccb5a85dfafe8a87a12c27945bf10ea1df6->enter($__internal_55021e90edda5b9d2f0495ad55929ccb5a85dfafe8a87a12c27945bf10ea1df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_55021e90edda5b9d2f0495ad55929ccb5a85dfafe8a87a12c27945bf10ea1df6->leave($__internal_55021e90edda5b9d2f0495ad55929ccb5a85dfafe8a87a12c27945bf10ea1df6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
