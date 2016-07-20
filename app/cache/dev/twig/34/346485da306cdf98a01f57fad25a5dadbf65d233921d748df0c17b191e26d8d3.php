<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a587ad2b50fbb71f3fe4c9e4974c469f2946835a01c82220e5e6a9ff68fa4aee extends Twig_Template
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
        $__internal_bb5b5127c0e23d7ba09e333cc3db0d88f1b37ec99bb77e52a1f7895b0a7c6160 = $this->env->getExtension("native_profiler");
        $__internal_bb5b5127c0e23d7ba09e333cc3db0d88f1b37ec99bb77e52a1f7895b0a7c6160->enter($__internal_bb5b5127c0e23d7ba09e333cc3db0d88f1b37ec99bb77e52a1f7895b0a7c6160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bb5b5127c0e23d7ba09e333cc3db0d88f1b37ec99bb77e52a1f7895b0a7c6160->leave($__internal_bb5b5127c0e23d7ba09e333cc3db0d88f1b37ec99bb77e52a1f7895b0a7c6160_prof);

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
