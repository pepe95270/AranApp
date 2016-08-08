<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7ee6d13fe275f3eb28d1acc493a8d56f8dddb1d3465eb4f92a97d49a9e772e11 extends Twig_Template
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
        $__internal_e8419fc18fd40b265ae23daac5f91d8a174d9df45e6919132c16e0d31209120f = $this->env->getExtension("native_profiler");
        $__internal_e8419fc18fd40b265ae23daac5f91d8a174d9df45e6919132c16e0d31209120f->enter($__internal_e8419fc18fd40b265ae23daac5f91d8a174d9df45e6919132c16e0d31209120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e8419fc18fd40b265ae23daac5f91d8a174d9df45e6919132c16e0d31209120f->leave($__internal_e8419fc18fd40b265ae23daac5f91d8a174d9df45e6919132c16e0d31209120f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
