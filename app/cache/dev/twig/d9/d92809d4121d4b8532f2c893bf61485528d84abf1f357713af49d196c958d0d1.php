<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d6773eb7b46298bd50a1114d464c07b90eda325a2806f226b5e378a54f253326 extends Twig_Template
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
        $__internal_804dc09b6b27405fafe3c435d5b023549f1f716c11496735260878268b7e13f5 = $this->env->getExtension("native_profiler");
        $__internal_804dc09b6b27405fafe3c435d5b023549f1f716c11496735260878268b7e13f5->enter($__internal_804dc09b6b27405fafe3c435d5b023549f1f716c11496735260878268b7e13f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_804dc09b6b27405fafe3c435d5b023549f1f716c11496735260878268b7e13f5->leave($__internal_804dc09b6b27405fafe3c435d5b023549f1f716c11496735260878268b7e13f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
