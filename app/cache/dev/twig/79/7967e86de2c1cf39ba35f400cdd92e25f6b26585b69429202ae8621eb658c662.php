<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_20184c953f90df375c7639d89c7831d2460c0105b869547c7760686bbf5472c6 extends Twig_Template
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
        $__internal_49f095db25050b5045a1d066b63b14dda548317e96048542650d993ff57a6cb9 = $this->env->getExtension("native_profiler");
        $__internal_49f095db25050b5045a1d066b63b14dda548317e96048542650d993ff57a6cb9->enter($__internal_49f095db25050b5045a1d066b63b14dda548317e96048542650d993ff57a6cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_49f095db25050b5045a1d066b63b14dda548317e96048542650d993ff57a6cb9->leave($__internal_49f095db25050b5045a1d066b63b14dda548317e96048542650d993ff57a6cb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
