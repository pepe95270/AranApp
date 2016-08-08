<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cb7ed05ae70feee47e5c0665fcdefe42f080cbc7038c905558288d0dd0bc1e0c extends Twig_Template
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
        $__internal_84af893e4289dac0b08f869b30219f066394c8f5e9bf5ab87d780d55c53a5c85 = $this->env->getExtension("native_profiler");
        $__internal_84af893e4289dac0b08f869b30219f066394c8f5e9bf5ab87d780d55c53a5c85->enter($__internal_84af893e4289dac0b08f869b30219f066394c8f5e9bf5ab87d780d55c53a5c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_84af893e4289dac0b08f869b30219f066394c8f5e9bf5ab87d780d55c53a5c85->leave($__internal_84af893e4289dac0b08f869b30219f066394c8f5e9bf5ab87d780d55c53a5c85_prof);

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
