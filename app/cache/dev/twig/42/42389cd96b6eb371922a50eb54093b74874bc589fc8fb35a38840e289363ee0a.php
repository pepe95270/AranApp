<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b988dec635d77aeaab4e1103b082d4c7b58f98680427aa795573b6d0f579182d extends Twig_Template
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
        $__internal_f61a4c2276700f7b6106a56d0165bc613725f465a787955d7bc3f76677ed165e = $this->env->getExtension("native_profiler");
        $__internal_f61a4c2276700f7b6106a56d0165bc613725f465a787955d7bc3f76677ed165e->enter($__internal_f61a4c2276700f7b6106a56d0165bc613725f465a787955d7bc3f76677ed165e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f61a4c2276700f7b6106a56d0165bc613725f465a787955d7bc3f76677ed165e->leave($__internal_f61a4c2276700f7b6106a56d0165bc613725f465a787955d7bc3f76677ed165e_prof);

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
