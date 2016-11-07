<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_87d60bf862902c7ee6b6cc8a33751dd3aa96c4dc31878eec875dac157b9a51a1 extends Twig_Template
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
        $__internal_b3320ff724516efe7d6987f49248755e5d2da3fee9e7c00aca93aa000cb8d5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3320ff724516efe7d6987f49248755e5d2da3fee9e7c00aca93aa000cb8d5c8->enter($__internal_b3320ff724516efe7d6987f49248755e5d2da3fee9e7c00aca93aa000cb8d5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b3320ff724516efe7d6987f49248755e5d2da3fee9e7c00aca93aa000cb8d5c8->leave($__internal_b3320ff724516efe7d6987f49248755e5d2da3fee9e7c00aca93aa000cb8d5c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
