<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_73d2fa23deaafad63e60b4dded6d03a2335532cc4842a521ea25091d4c871cca extends Twig_Template
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
        $__internal_0d10cfdd4e40fca5b5c53e470caf4f76eae1b4c1d6bd7c6e7346629fa1fadb1c = $this->env->getExtension("native_profiler");
        $__internal_0d10cfdd4e40fca5b5c53e470caf4f76eae1b4c1d6bd7c6e7346629fa1fadb1c->enter($__internal_0d10cfdd4e40fca5b5c53e470caf4f76eae1b4c1d6bd7c6e7346629fa1fadb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0d10cfdd4e40fca5b5c53e470caf4f76eae1b4c1d6bd7c6e7346629fa1fadb1c->leave($__internal_0d10cfdd4e40fca5b5c53e470caf4f76eae1b4c1d6bd7c6e7346629fa1fadb1c_prof);

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
