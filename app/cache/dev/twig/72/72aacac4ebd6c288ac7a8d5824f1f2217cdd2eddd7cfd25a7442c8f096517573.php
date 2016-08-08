<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_30a7a5f5ccd756bb18762854c5d8836f20edabf2efdd6b7a35266d81a52bf36f extends Twig_Template
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
        $__internal_478a7cba7707fcbd4795d3653923e0b5832171a5f1a22c6f414ef33d9116cfe9 = $this->env->getExtension("native_profiler");
        $__internal_478a7cba7707fcbd4795d3653923e0b5832171a5f1a22c6f414ef33d9116cfe9->enter($__internal_478a7cba7707fcbd4795d3653923e0b5832171a5f1a22c6f414ef33d9116cfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_478a7cba7707fcbd4795d3653923e0b5832171a5f1a22c6f414ef33d9116cfe9->leave($__internal_478a7cba7707fcbd4795d3653923e0b5832171a5f1a22c6f414ef33d9116cfe9_prof);

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
