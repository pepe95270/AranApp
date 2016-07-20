<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_32e303eab55f8d9af9adc3068f17e92ebb0a516073dbe7d02625aab3f7077c54 extends Twig_Template
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
        $__internal_8d8210c3b4375e03f101a6fe4ac6b19e8e2bdec25e3d5132995232cac334e893 = $this->env->getExtension("native_profiler");
        $__internal_8d8210c3b4375e03f101a6fe4ac6b19e8e2bdec25e3d5132995232cac334e893->enter($__internal_8d8210c3b4375e03f101a6fe4ac6b19e8e2bdec25e3d5132995232cac334e893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8d8210c3b4375e03f101a6fe4ac6b19e8e2bdec25e3d5132995232cac334e893->leave($__internal_8d8210c3b4375e03f101a6fe4ac6b19e8e2bdec25e3d5132995232cac334e893_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
