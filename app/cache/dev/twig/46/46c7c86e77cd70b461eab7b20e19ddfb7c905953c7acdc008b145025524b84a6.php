<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2b2aeba0dbabca680668562a1ab4a08115d9fa9145c35a5bedfaf1f6c3551f77 extends Twig_Template
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
        $__internal_580442cbefbe2e67ef14745455742167d33ce20c20750f25201fa7623c89bcf5 = $this->env->getExtension("native_profiler");
        $__internal_580442cbefbe2e67ef14745455742167d33ce20c20750f25201fa7623c89bcf5->enter($__internal_580442cbefbe2e67ef14745455742167d33ce20c20750f25201fa7623c89bcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_580442cbefbe2e67ef14745455742167d33ce20c20750f25201fa7623c89bcf5->leave($__internal_580442cbefbe2e67ef14745455742167d33ce20c20750f25201fa7623c89bcf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
