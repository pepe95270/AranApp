<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_183dbb6218b049b98a23f2bf5b2a8c54ad975257e0d3c2cca2058922362d13c8 extends Twig_Template
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
        $__internal_eea1e4410a3cee61b39d6a064db71b029d4a947c723902be954902ce31094c5d = $this->env->getExtension("native_profiler");
        $__internal_eea1e4410a3cee61b39d6a064db71b029d4a947c723902be954902ce31094c5d->enter($__internal_eea1e4410a3cee61b39d6a064db71b029d4a947c723902be954902ce31094c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_eea1e4410a3cee61b39d6a064db71b029d4a947c723902be954902ce31094c5d->leave($__internal_eea1e4410a3cee61b39d6a064db71b029d4a947c723902be954902ce31094c5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
