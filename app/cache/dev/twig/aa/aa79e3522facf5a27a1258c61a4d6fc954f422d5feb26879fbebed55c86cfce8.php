<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f70815a1cfbdef436ea7520aae3a43c85f2ad05b620d9af3618f3f77879b68f9 extends Twig_Template
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
        $__internal_05174075a7086162074677739f1e00f213745e3464f4f2e6d80bc79a06022e28 = $this->env->getExtension("native_profiler");
        $__internal_05174075a7086162074677739f1e00f213745e3464f4f2e6d80bc79a06022e28->enter($__internal_05174075a7086162074677739f1e00f213745e3464f4f2e6d80bc79a06022e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_05174075a7086162074677739f1e00f213745e3464f4f2e6d80bc79a06022e28->leave($__internal_05174075a7086162074677739f1e00f213745e3464f4f2e6d80bc79a06022e28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
