<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fbd033d395d12307df1e2110dfef8fe8ef693ad3b4f1e5d56f2c1e653ed46716 extends Twig_Template
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
        $__internal_ab4eb0a6c1b4360a5f5a3e337ba78c9fb0c3f451d49fce487fa2f60ab15d62af = $this->env->getExtension("native_profiler");
        $__internal_ab4eb0a6c1b4360a5f5a3e337ba78c9fb0c3f451d49fce487fa2f60ab15d62af->enter($__internal_ab4eb0a6c1b4360a5f5a3e337ba78c9fb0c3f451d49fce487fa2f60ab15d62af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ab4eb0a6c1b4360a5f5a3e337ba78c9fb0c3f451d49fce487fa2f60ab15d62af->leave($__internal_ab4eb0a6c1b4360a5f5a3e337ba78c9fb0c3f451d49fce487fa2f60ab15d62af_prof);

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
