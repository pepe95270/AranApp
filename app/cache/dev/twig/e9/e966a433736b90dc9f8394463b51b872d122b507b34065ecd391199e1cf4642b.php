<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c3e8835e9a135f16edcce76b132deb4a1a7f741149a4456f5013b9de9478280f extends Twig_Template
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
        $__internal_33ca56cc6499277726ef51845095c9f43e3bcd06ba8c377b6e6faf5426c1acba = $this->env->getExtension("native_profiler");
        $__internal_33ca56cc6499277726ef51845095c9f43e3bcd06ba8c377b6e6faf5426c1acba->enter($__internal_33ca56cc6499277726ef51845095c9f43e3bcd06ba8c377b6e6faf5426c1acba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_33ca56cc6499277726ef51845095c9f43e3bcd06ba8c377b6e6faf5426c1acba->leave($__internal_33ca56cc6499277726ef51845095c9f43e3bcd06ba8c377b6e6faf5426c1acba_prof);

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
