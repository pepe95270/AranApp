<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fb069537ab0b09305d8098513ee8c93f7fd585693b5c7cfad8fd4a84a4cc7d84 extends Twig_Template
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
        $__internal_6f18afda1321af8a5bb029dd44929f8d165377b070b398354ec7d16d9747b6bf = $this->env->getExtension("native_profiler");
        $__internal_6f18afda1321af8a5bb029dd44929f8d165377b070b398354ec7d16d9747b6bf->enter($__internal_6f18afda1321af8a5bb029dd44929f8d165377b070b398354ec7d16d9747b6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6f18afda1321af8a5bb029dd44929f8d165377b070b398354ec7d16d9747b6bf->leave($__internal_6f18afda1321af8a5bb029dd44929f8d165377b070b398354ec7d16d9747b6bf_prof);

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
