<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bec0191a7b12055fbd262a114f28e4656b3f0a3c5fd37e333ef89c8c86d3e9d6 extends Twig_Template
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
        $__internal_de7e3c86083a98b789f15a1cb91a0c827f27b995aa8891ef7b43a3929e4fe05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7e3c86083a98b789f15a1cb91a0c827f27b995aa8891ef7b43a3929e4fe05f->enter($__internal_de7e3c86083a98b789f15a1cb91a0c827f27b995aa8891ef7b43a3929e4fe05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_de7e3c86083a98b789f15a1cb91a0c827f27b995aa8891ef7b43a3929e4fe05f->leave($__internal_de7e3c86083a98b789f15a1cb91a0c827f27b995aa8891ef7b43a3929e4fe05f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
