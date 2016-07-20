<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_196291968ce236c8552d12a5ede73b238da96b6cbf8b5563c4c30446ffc2a4bb extends Twig_Template
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
        $__internal_cb062f9effb5d4067a4910f23a6f909aa04d94e749bae47e4a7dc1f8e5b0e2a1 = $this->env->getExtension("native_profiler");
        $__internal_cb062f9effb5d4067a4910f23a6f909aa04d94e749bae47e4a7dc1f8e5b0e2a1->enter($__internal_cb062f9effb5d4067a4910f23a6f909aa04d94e749bae47e4a7dc1f8e5b0e2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cb062f9effb5d4067a4910f23a6f909aa04d94e749bae47e4a7dc1f8e5b0e2a1->leave($__internal_cb062f9effb5d4067a4910f23a6f909aa04d94e749bae47e4a7dc1f8e5b0e2a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
