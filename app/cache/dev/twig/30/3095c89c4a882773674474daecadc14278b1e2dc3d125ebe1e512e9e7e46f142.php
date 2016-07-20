<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7b7d1ab324271091a6d84335e1beae82d20440a34e113450214d1f5b89300dd3 extends Twig_Template
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
        $__internal_7a6352096e0919cbb26705954a4b855655bda25d764ed34458cc8bff200c798b = $this->env->getExtension("native_profiler");
        $__internal_7a6352096e0919cbb26705954a4b855655bda25d764ed34458cc8bff200c798b->enter($__internal_7a6352096e0919cbb26705954a4b855655bda25d764ed34458cc8bff200c798b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7a6352096e0919cbb26705954a4b855655bda25d764ed34458cc8bff200c798b->leave($__internal_7a6352096e0919cbb26705954a4b855655bda25d764ed34458cc8bff200c798b_prof);

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
