<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_50ca39580d6fe19d40e32ffc4ec31d0572ff52ed50bc62cca9e43a598b1255f2 extends Twig_Template
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
        $__internal_d3dab770a2660aa3c9e8c284486304f5cd4ad245e6e8d546e9295c2e19eccbd9 = $this->env->getExtension("native_profiler");
        $__internal_d3dab770a2660aa3c9e8c284486304f5cd4ad245e6e8d546e9295c2e19eccbd9->enter($__internal_d3dab770a2660aa3c9e8c284486304f5cd4ad245e6e8d546e9295c2e19eccbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d3dab770a2660aa3c9e8c284486304f5cd4ad245e6e8d546e9295c2e19eccbd9->leave($__internal_d3dab770a2660aa3c9e8c284486304f5cd4ad245e6e8d546e9295c2e19eccbd9_prof);

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
