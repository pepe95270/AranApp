<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2b524424403ee0ea4a4af4469027f81c5e9d0dd86f90e70de46315d144d865e3 extends Twig_Template
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
        $__internal_a4e2329bc448f648288bb09fa241574cc875b7b5c0767a81e25c5a860b8457f9 = $this->env->getExtension("native_profiler");
        $__internal_a4e2329bc448f648288bb09fa241574cc875b7b5c0767a81e25c5a860b8457f9->enter($__internal_a4e2329bc448f648288bb09fa241574cc875b7b5c0767a81e25c5a860b8457f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a4e2329bc448f648288bb09fa241574cc875b7b5c0767a81e25c5a860b8457f9->leave($__internal_a4e2329bc448f648288bb09fa241574cc875b7b5c0767a81e25c5a860b8457f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
