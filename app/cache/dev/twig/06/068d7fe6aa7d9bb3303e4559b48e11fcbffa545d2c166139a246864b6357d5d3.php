<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_389dd3e1b7139df6a71a76901bbd5fca4552aa4d3aa4b5e3b1520cdad3cbf076 extends Twig_Template
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
        $__internal_42b6713644af653bcbce75b5a2afd58342f993dc49996b2457d3627a2844d74d = $this->env->getExtension("native_profiler");
        $__internal_42b6713644af653bcbce75b5a2afd58342f993dc49996b2457d3627a2844d74d->enter($__internal_42b6713644af653bcbce75b5a2afd58342f993dc49996b2457d3627a2844d74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_42b6713644af653bcbce75b5a2afd58342f993dc49996b2457d3627a2844d74d->leave($__internal_42b6713644af653bcbce75b5a2afd58342f993dc49996b2457d3627a2844d74d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
