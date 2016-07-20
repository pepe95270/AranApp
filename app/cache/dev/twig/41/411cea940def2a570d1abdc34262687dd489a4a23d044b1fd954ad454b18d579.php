<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9e6a4837aafd4604421b81e1e0506b9f4d8f7700c6801510776e643813b95ed0 extends Twig_Template
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
        $__internal_99465392cb86c6f6bfe8cd7ac86f98d6ae8ad8d9d74c05b108250a370d8112ec = $this->env->getExtension("native_profiler");
        $__internal_99465392cb86c6f6bfe8cd7ac86f98d6ae8ad8d9d74c05b108250a370d8112ec->enter($__internal_99465392cb86c6f6bfe8cd7ac86f98d6ae8ad8d9d74c05b108250a370d8112ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_99465392cb86c6f6bfe8cd7ac86f98d6ae8ad8d9d74c05b108250a370d8112ec->leave($__internal_99465392cb86c6f6bfe8cd7ac86f98d6ae8ad8d9d74c05b108250a370d8112ec_prof);

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
