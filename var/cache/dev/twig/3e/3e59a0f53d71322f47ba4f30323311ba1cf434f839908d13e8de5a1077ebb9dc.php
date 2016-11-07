<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ee40b0e3f109b79c5e0559125531018f02862b633714ec32643806276b9d5426 extends Twig_Template
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
        $__internal_9a51c94e305ab0dadf0491560e3cf83caa611cf3c90621b20e1a6c18b9f4c450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a51c94e305ab0dadf0491560e3cf83caa611cf3c90621b20e1a6c18b9f4c450->enter($__internal_9a51c94e305ab0dadf0491560e3cf83caa611cf3c90621b20e1a6c18b9f4c450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9a51c94e305ab0dadf0491560e3cf83caa611cf3c90621b20e1a6c18b9f4c450->leave($__internal_9a51c94e305ab0dadf0491560e3cf83caa611cf3c90621b20e1a6c18b9f4c450_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
