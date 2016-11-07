<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_cde466380ad899f403e7fd474aa3ef1066862e978e22845b260dd973b667037a extends Twig_Template
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
        $__internal_2d2283dc25b3d02fd4c229f3c5a15816594e40933cf8084e75f136956c42b28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2283dc25b3d02fd4c229f3c5a15816594e40933cf8084e75f136956c42b28a->enter($__internal_2d2283dc25b3d02fd4c229f3c5a15816594e40933cf8084e75f136956c42b28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2d2283dc25b3d02fd4c229f3c5a15816594e40933cf8084e75f136956c42b28a->leave($__internal_2d2283dc25b3d02fd4c229f3c5a15816594e40933cf8084e75f136956c42b28a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
