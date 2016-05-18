<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_71498cf627220ac318772e4f036d13519dc90ab79f15f861839c43f06fc7b038 extends Twig_Template
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
        $__internal_c48f390527255ca9ede2b4fa745d0d11323fdd484133d534f735563136c8cebb = $this->env->getExtension("native_profiler");
        $__internal_c48f390527255ca9ede2b4fa745d0d11323fdd484133d534f735563136c8cebb->enter($__internal_c48f390527255ca9ede2b4fa745d0d11323fdd484133d534f735563136c8cebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c48f390527255ca9ede2b4fa745d0d11323fdd484133d534f735563136c8cebb->leave($__internal_c48f390527255ca9ede2b4fa745d0d11323fdd484133d534f735563136c8cebb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
