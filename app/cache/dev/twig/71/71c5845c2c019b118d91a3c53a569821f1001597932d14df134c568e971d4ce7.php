<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5a8b72fa6877ef1d5fa400a900f80cb244dca0ec5f3aa888e35cb7477ab06f2c extends Twig_Template
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
        $__internal_322669f2fb77ece92fc786a526bebb86188e564412f5280dcaba57bae8cbc86c = $this->env->getExtension("native_profiler");
        $__internal_322669f2fb77ece92fc786a526bebb86188e564412f5280dcaba57bae8cbc86c->enter($__internal_322669f2fb77ece92fc786a526bebb86188e564412f5280dcaba57bae8cbc86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_322669f2fb77ece92fc786a526bebb86188e564412f5280dcaba57bae8cbc86c->leave($__internal_322669f2fb77ece92fc786a526bebb86188e564412f5280dcaba57bae8cbc86c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
