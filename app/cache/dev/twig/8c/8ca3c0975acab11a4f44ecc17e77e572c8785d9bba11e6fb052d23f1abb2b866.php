<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2fa2cebe779e60ff51d63929e87087a2f27ebf8ab86814193c5d963ce1d345f1 extends Twig_Template
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
        $__internal_5594be6e0bf83a78f77ace14e53fe111ca4246b1bc77f0f739a0778f40a73eaa = $this->env->getExtension("native_profiler");
        $__internal_5594be6e0bf83a78f77ace14e53fe111ca4246b1bc77f0f739a0778f40a73eaa->enter($__internal_5594be6e0bf83a78f77ace14e53fe111ca4246b1bc77f0f739a0778f40a73eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5594be6e0bf83a78f77ace14e53fe111ca4246b1bc77f0f739a0778f40a73eaa->leave($__internal_5594be6e0bf83a78f77ace14e53fe111ca4246b1bc77f0f739a0778f40a73eaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
