<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5ca053917fb6f9fd22e4590c31dbb49d9c2691490bab21c40573e48d2b8df84c extends Twig_Template
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
        $__internal_94a6393d06c92ce1b237fcf1279cb7f3a671be6b59bc4c8abd87be4dcaacd274 = $this->env->getExtension("native_profiler");
        $__internal_94a6393d06c92ce1b237fcf1279cb7f3a671be6b59bc4c8abd87be4dcaacd274->enter($__internal_94a6393d06c92ce1b237fcf1279cb7f3a671be6b59bc4c8abd87be4dcaacd274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_94a6393d06c92ce1b237fcf1279cb7f3a671be6b59bc4c8abd87be4dcaacd274->leave($__internal_94a6393d06c92ce1b237fcf1279cb7f3a671be6b59bc4c8abd87be4dcaacd274_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
