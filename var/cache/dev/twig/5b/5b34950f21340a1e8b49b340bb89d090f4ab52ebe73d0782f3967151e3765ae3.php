<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1f81f448f68666a283245fdef5d5a72e3cd16021266375137c300f265dc55c01 extends Twig_Template
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
        $__internal_d693ff2c5d3188dc4449723c80c13c386f765cc92c3cdfcf60d5c097e1f39886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d693ff2c5d3188dc4449723c80c13c386f765cc92c3cdfcf60d5c097e1f39886->enter($__internal_d693ff2c5d3188dc4449723c80c13c386f765cc92c3cdfcf60d5c097e1f39886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d693ff2c5d3188dc4449723c80c13c386f765cc92c3cdfcf60d5c097e1f39886->leave($__internal_d693ff2c5d3188dc4449723c80c13c386f765cc92c3cdfcf60d5c097e1f39886_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
