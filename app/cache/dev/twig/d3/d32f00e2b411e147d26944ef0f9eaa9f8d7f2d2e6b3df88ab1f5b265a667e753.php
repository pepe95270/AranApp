<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_106a3fd44bac244ed470ca6c30ae02e31c34d61ee86b9060b94b7b0ccd992b3b extends Twig_Template
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
        $__internal_309932ab6863bedd8e0279705c85be51e61a7f480a8907c68e4c2abd0a82d110 = $this->env->getExtension("native_profiler");
        $__internal_309932ab6863bedd8e0279705c85be51e61a7f480a8907c68e4c2abd0a82d110->enter($__internal_309932ab6863bedd8e0279705c85be51e61a7f480a8907c68e4c2abd0a82d110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_309932ab6863bedd8e0279705c85be51e61a7f480a8907c68e4c2abd0a82d110->leave($__internal_309932ab6863bedd8e0279705c85be51e61a7f480a8907c68e4c2abd0a82d110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
