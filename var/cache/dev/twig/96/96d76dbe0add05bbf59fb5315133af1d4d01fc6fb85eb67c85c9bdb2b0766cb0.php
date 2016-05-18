<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2f3ac624260364cc947c3bce116f47bc6e07329be573729c6f47c6dc1241d0bb extends Twig_Template
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
        $__internal_d6289ea1c3ade859ac9f485b75f86d90161d5ec9fc993ab656aaa7b2fcb4e7ee = $this->env->getExtension("native_profiler");
        $__internal_d6289ea1c3ade859ac9f485b75f86d90161d5ec9fc993ab656aaa7b2fcb4e7ee->enter($__internal_d6289ea1c3ade859ac9f485b75f86d90161d5ec9fc993ab656aaa7b2fcb4e7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d6289ea1c3ade859ac9f485b75f86d90161d5ec9fc993ab656aaa7b2fcb4e7ee->leave($__internal_d6289ea1c3ade859ac9f485b75f86d90161d5ec9fc993ab656aaa7b2fcb4e7ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
