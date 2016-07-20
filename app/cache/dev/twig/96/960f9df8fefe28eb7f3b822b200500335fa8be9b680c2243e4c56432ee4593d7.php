<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b853c874e50a8b4cac00e4fe505fdcc79e87e78465aeb088790c889caf891be7 extends Twig_Template
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
        $__internal_2708572b18bef1f40a2cd90849826d3463d93ce46cf5ed306db6c6d16a8cca47 = $this->env->getExtension("native_profiler");
        $__internal_2708572b18bef1f40a2cd90849826d3463d93ce46cf5ed306db6c6d16a8cca47->enter($__internal_2708572b18bef1f40a2cd90849826d3463d93ce46cf5ed306db6c6d16a8cca47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2708572b18bef1f40a2cd90849826d3463d93ce46cf5ed306db6c6d16a8cca47->leave($__internal_2708572b18bef1f40a2cd90849826d3463d93ce46cf5ed306db6c6d16a8cca47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
