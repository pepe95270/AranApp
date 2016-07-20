<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0ff4685eb31a044eadb25573f1bf582c14e746e0f9e4c7c99e20a227fda5242e extends Twig_Template
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
        $__internal_2bfe260866b2c78c0ee89de9016122da009e5340ca211f4e0ae969abe95dfb3a = $this->env->getExtension("native_profiler");
        $__internal_2bfe260866b2c78c0ee89de9016122da009e5340ca211f4e0ae969abe95dfb3a->enter($__internal_2bfe260866b2c78c0ee89de9016122da009e5340ca211f4e0ae969abe95dfb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2bfe260866b2c78c0ee89de9016122da009e5340ca211f4e0ae969abe95dfb3a->leave($__internal_2bfe260866b2c78c0ee89de9016122da009e5340ca211f4e0ae969abe95dfb3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
