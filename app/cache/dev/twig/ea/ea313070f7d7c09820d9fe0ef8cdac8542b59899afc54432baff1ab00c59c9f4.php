<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9088e048329349bdb005bd8fafced1711a43e0ce6d3963185c4ea235b37f5805 extends Twig_Template
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
        $__internal_547e9195b1a631b9b5aa6b53afeab82468e1d1fbb4de6660666afd8cfbbe6d01 = $this->env->getExtension("native_profiler");
        $__internal_547e9195b1a631b9b5aa6b53afeab82468e1d1fbb4de6660666afd8cfbbe6d01->enter($__internal_547e9195b1a631b9b5aa6b53afeab82468e1d1fbb4de6660666afd8cfbbe6d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_547e9195b1a631b9b5aa6b53afeab82468e1d1fbb4de6660666afd8cfbbe6d01->leave($__internal_547e9195b1a631b9b5aa6b53afeab82468e1d1fbb4de6660666afd8cfbbe6d01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
