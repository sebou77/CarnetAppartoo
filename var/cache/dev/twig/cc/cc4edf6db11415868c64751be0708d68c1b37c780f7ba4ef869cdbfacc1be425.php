<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2344c1dee2e7be2cb06217b13f7f8844f2d1b4c3d717f060e82579b384e9661f extends Twig_Template
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
        $__internal_2d9130af246fbbd97fa78f64ee4e2c15a34bd9e02058d9f0f837a76b0f54a79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9130af246fbbd97fa78f64ee4e2c15a34bd9e02058d9f0f837a76b0f54a79d->enter($__internal_2d9130af246fbbd97fa78f64ee4e2c15a34bd9e02058d9f0f837a76b0f54a79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2d9130af246fbbd97fa78f64ee4e2c15a34bd9e02058d9f0f837a76b0f54a79d->leave($__internal_2d9130af246fbbd97fa78f64ee4e2c15a34bd9e02058d9f0f837a76b0f54a79d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
