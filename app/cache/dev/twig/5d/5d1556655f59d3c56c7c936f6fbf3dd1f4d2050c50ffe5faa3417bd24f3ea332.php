<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d5790573300557993e15e6481951d2f69951b8473d1f13b51f7f64a85c0aff40 extends Twig_Template
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
        $__internal_e3805bfe99db343e86e032619dbdae4c1d2d9ba0d5d714c6dcff588c6f2e5b85 = $this->env->getExtension("native_profiler");
        $__internal_e3805bfe99db343e86e032619dbdae4c1d2d9ba0d5d714c6dcff588c6f2e5b85->enter($__internal_e3805bfe99db343e86e032619dbdae4c1d2d9ba0d5d714c6dcff588c6f2e5b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e3805bfe99db343e86e032619dbdae4c1d2d9ba0d5d714c6dcff588c6f2e5b85->leave($__internal_e3805bfe99db343e86e032619dbdae4c1d2d9ba0d5d714c6dcff588c6f2e5b85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
