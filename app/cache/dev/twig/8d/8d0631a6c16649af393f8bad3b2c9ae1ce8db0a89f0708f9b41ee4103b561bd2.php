<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1b2200b0d1fbee3a380267f9cd8251d3f1e66bbe2f027eb06a6df1cd76fd851d extends Twig_Template
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
        $__internal_5dd0a9429162cb9a5d30dd78dea3ce49ad42e7232c0348b59bd0f965c4a551b2 = $this->env->getExtension("native_profiler");
        $__internal_5dd0a9429162cb9a5d30dd78dea3ce49ad42e7232c0348b59bd0f965c4a551b2->enter($__internal_5dd0a9429162cb9a5d30dd78dea3ce49ad42e7232c0348b59bd0f965c4a551b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5dd0a9429162cb9a5d30dd78dea3ce49ad42e7232c0348b59bd0f965c4a551b2->leave($__internal_5dd0a9429162cb9a5d30dd78dea3ce49ad42e7232c0348b59bd0f965c4a551b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
