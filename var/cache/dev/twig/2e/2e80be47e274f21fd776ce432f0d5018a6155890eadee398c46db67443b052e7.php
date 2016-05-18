<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_428a285f877b769e079ef9d0316ff2573734d6106b0ff683182d5ddea57088e3 extends Twig_Template
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
        $__internal_905b11611a0e9ad907a640a2e79d60775f22ea84c84fe53159672c9ec793bf47 = $this->env->getExtension("native_profiler");
        $__internal_905b11611a0e9ad907a640a2e79d60775f22ea84c84fe53159672c9ec793bf47->enter($__internal_905b11611a0e9ad907a640a2e79d60775f22ea84c84fe53159672c9ec793bf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_905b11611a0e9ad907a640a2e79d60775f22ea84c84fe53159672c9ec793bf47->leave($__internal_905b11611a0e9ad907a640a2e79d60775f22ea84c84fe53159672c9ec793bf47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
