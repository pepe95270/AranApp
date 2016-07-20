<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b9b0e7a7f6293b053b84dd0b54470effc0f261c035a06caa68228e7ed614f117 extends Twig_Template
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
        $__internal_d213e5631ef7e4316db9f7ec1b15c0969b8a10dec864cc87d61337e09fefce99 = $this->env->getExtension("native_profiler");
        $__internal_d213e5631ef7e4316db9f7ec1b15c0969b8a10dec864cc87d61337e09fefce99->enter($__internal_d213e5631ef7e4316db9f7ec1b15c0969b8a10dec864cc87d61337e09fefce99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d213e5631ef7e4316db9f7ec1b15c0969b8a10dec864cc87d61337e09fefce99->leave($__internal_d213e5631ef7e4316db9f7ec1b15c0969b8a10dec864cc87d61337e09fefce99_prof);

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
