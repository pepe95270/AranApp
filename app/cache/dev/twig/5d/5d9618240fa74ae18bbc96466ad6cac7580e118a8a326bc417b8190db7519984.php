<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ef65e4738920623319f8f9f66c07962e08996c2f2eee3b2bb335eb0765adb095 extends Twig_Template
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
        $__internal_ca03215d5039efa86e1cec813da1c6b4622b1bef17147c4c276582476ebf28b8 = $this->env->getExtension("native_profiler");
        $__internal_ca03215d5039efa86e1cec813da1c6b4622b1bef17147c4c276582476ebf28b8->enter($__internal_ca03215d5039efa86e1cec813da1c6b4622b1bef17147c4c276582476ebf28b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ca03215d5039efa86e1cec813da1c6b4622b1bef17147c4c276582476ebf28b8->leave($__internal_ca03215d5039efa86e1cec813da1c6b4622b1bef17147c4c276582476ebf28b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
