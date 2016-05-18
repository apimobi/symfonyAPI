<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_26321bd5dda42a5e33337084dd9cfb06915df7186e116ba24883764db9a7d122 extends Twig_Template
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
        $__internal_1ece89df85ca174b1fbf12d0cb177adfeef0437849f20ea31e36d8fc5f441283 = $this->env->getExtension("native_profiler");
        $__internal_1ece89df85ca174b1fbf12d0cb177adfeef0437849f20ea31e36d8fc5f441283->enter($__internal_1ece89df85ca174b1fbf12d0cb177adfeef0437849f20ea31e36d8fc5f441283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1ece89df85ca174b1fbf12d0cb177adfeef0437849f20ea31e36d8fc5f441283->leave($__internal_1ece89df85ca174b1fbf12d0cb177adfeef0437849f20ea31e36d8fc5f441283_prof);

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
