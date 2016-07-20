<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_72c82d7fba82f0277a66ec9c0079a2dca48ce8d2c79054b53e34d48f07b3dcd9 extends Twig_Template
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
        $__internal_46050ce2dc6d1cab9d9893baeabfc956132c59a90ee9cf8871ebddb9cedade42 = $this->env->getExtension("native_profiler");
        $__internal_46050ce2dc6d1cab9d9893baeabfc956132c59a90ee9cf8871ebddb9cedade42->enter($__internal_46050ce2dc6d1cab9d9893baeabfc956132c59a90ee9cf8871ebddb9cedade42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_46050ce2dc6d1cab9d9893baeabfc956132c59a90ee9cf8871ebddb9cedade42->leave($__internal_46050ce2dc6d1cab9d9893baeabfc956132c59a90ee9cf8871ebddb9cedade42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
