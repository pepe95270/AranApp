<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4ca1e38dc0823294c2c7ccb79407f709c020cbd7e0495168682fb86f617b34ee extends Twig_Template
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
        $__internal_4d1fa3559031f334f0cbee12f5471554842c90f55089fcf1017be3ca1e3f37d6 = $this->env->getExtension("native_profiler");
        $__internal_4d1fa3559031f334f0cbee12f5471554842c90f55089fcf1017be3ca1e3f37d6->enter($__internal_4d1fa3559031f334f0cbee12f5471554842c90f55089fcf1017be3ca1e3f37d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4d1fa3559031f334f0cbee12f5471554842c90f55089fcf1017be3ca1e3f37d6->leave($__internal_4d1fa3559031f334f0cbee12f5471554842c90f55089fcf1017be3ca1e3f37d6_prof);

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
