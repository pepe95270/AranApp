<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c17c2012835515b0672634eb28d06acfa714182874f330c275b4c4202a71a520 extends Twig_Template
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
        $__internal_e318fd0632cc2d9795df758ad8bbe942205f2fbe9e4c468a3cb8ff865e04ffca = $this->env->getExtension("native_profiler");
        $__internal_e318fd0632cc2d9795df758ad8bbe942205f2fbe9e4c468a3cb8ff865e04ffca->enter($__internal_e318fd0632cc2d9795df758ad8bbe942205f2fbe9e4c468a3cb8ff865e04ffca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e318fd0632cc2d9795df758ad8bbe942205f2fbe9e4c468a3cb8ff865e04ffca->leave($__internal_e318fd0632cc2d9795df758ad8bbe942205f2fbe9e4c468a3cb8ff865e04ffca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
