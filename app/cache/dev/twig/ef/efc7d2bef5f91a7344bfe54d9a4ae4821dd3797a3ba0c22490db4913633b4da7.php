<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_50d3edaf59a2b9e72b776299a1a85bc5b26961b85e34331d4dede51332ada905 extends Twig_Template
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
        $__internal_0bd96781db731c7b737d27b379e05eb31239c442b0365616746ec7dd002f0a14 = $this->env->getExtension("native_profiler");
        $__internal_0bd96781db731c7b737d27b379e05eb31239c442b0365616746ec7dd002f0a14->enter($__internal_0bd96781db731c7b737d27b379e05eb31239c442b0365616746ec7dd002f0a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0bd96781db731c7b737d27b379e05eb31239c442b0365616746ec7dd002f0a14->leave($__internal_0bd96781db731c7b737d27b379e05eb31239c442b0365616746ec7dd002f0a14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
