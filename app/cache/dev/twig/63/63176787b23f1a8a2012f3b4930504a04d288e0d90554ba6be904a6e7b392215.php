<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a1e05a45132675215c46f36de362f050a2e35de9490656b93969469dde6dbe5 extends Twig_Template
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
        $__internal_26819525374d0c36a314e18b5554bc3394de39e533eef927720523808e939f82 = $this->env->getExtension("native_profiler");
        $__internal_26819525374d0c36a314e18b5554bc3394de39e533eef927720523808e939f82->enter($__internal_26819525374d0c36a314e18b5554bc3394de39e533eef927720523808e939f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_26819525374d0c36a314e18b5554bc3394de39e533eef927720523808e939f82->leave($__internal_26819525374d0c36a314e18b5554bc3394de39e533eef927720523808e939f82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
