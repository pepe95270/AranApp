<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_af7abc9a9dbe271e66200251e057b59e5b93a8cd8aa52d7ad1c597c8f546114e extends Twig_Template
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
        $__internal_eff057bcec38f6fd722ed0b9bfec817a7244be54d7888e759a06d6d9c4974cda = $this->env->getExtension("native_profiler");
        $__internal_eff057bcec38f6fd722ed0b9bfec817a7244be54d7888e759a06d6d9c4974cda->enter($__internal_eff057bcec38f6fd722ed0b9bfec817a7244be54d7888e759a06d6d9c4974cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_eff057bcec38f6fd722ed0b9bfec817a7244be54d7888e759a06d6d9c4974cda->leave($__internal_eff057bcec38f6fd722ed0b9bfec817a7244be54d7888e759a06d6d9c4974cda_prof);

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
