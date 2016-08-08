<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_340d86a6dc9e4b4757f7a1feb49c54a5531dda523e2dc7f32b5e6f60c8752eb8 extends Twig_Template
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
        $__internal_9b0717639ffe1d38e92e1fa7dc5369601c1967a78ebedf162e285c27312d2eea = $this->env->getExtension("native_profiler");
        $__internal_9b0717639ffe1d38e92e1fa7dc5369601c1967a78ebedf162e285c27312d2eea->enter($__internal_9b0717639ffe1d38e92e1fa7dc5369601c1967a78ebedf162e285c27312d2eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_9b0717639ffe1d38e92e1fa7dc5369601c1967a78ebedf162e285c27312d2eea->leave($__internal_9b0717639ffe1d38e92e1fa7dc5369601c1967a78ebedf162e285c27312d2eea_prof);

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
