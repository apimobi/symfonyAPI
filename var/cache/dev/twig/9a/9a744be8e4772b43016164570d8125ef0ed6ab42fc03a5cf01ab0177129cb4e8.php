<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e1188b55cc919609e6ed97352d2ba2466d34b532daa3d75439092ae400c229dd extends Twig_Template
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
        $__internal_c82c049c276007c4106ca9bb87aee48a40684ff4c6517a0430f10892cbbbd0c3 = $this->env->getExtension("native_profiler");
        $__internal_c82c049c276007c4106ca9bb87aee48a40684ff4c6517a0430f10892cbbbd0c3->enter($__internal_c82c049c276007c4106ca9bb87aee48a40684ff4c6517a0430f10892cbbbd0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c82c049c276007c4106ca9bb87aee48a40684ff4c6517a0430f10892cbbbd0c3->leave($__internal_c82c049c276007c4106ca9bb87aee48a40684ff4c6517a0430f10892cbbbd0c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
