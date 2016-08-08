<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9845cccc4be59f8d60cc7fb22d45427f32c581d4438f5354898450191e470bc1 extends Twig_Template
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
        $__internal_556579ec299983f49762f1e12c490f2d49a36222aedc53f275caf6a83effa895 = $this->env->getExtension("native_profiler");
        $__internal_556579ec299983f49762f1e12c490f2d49a36222aedc53f275caf6a83effa895->enter($__internal_556579ec299983f49762f1e12c490f2d49a36222aedc53f275caf6a83effa895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_556579ec299983f49762f1e12c490f2d49a36222aedc53f275caf6a83effa895->leave($__internal_556579ec299983f49762f1e12c490f2d49a36222aedc53f275caf6a83effa895_prof);

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
