<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_39004caef4d69c8aea84c4ee458de089b8568402af373ccf890fb6bddc46c8d8 extends Twig_Template
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
        $__internal_4f887da30a82e595aa412269e7ef29d0f8c12bfef09c2ad1fe2f0ba740e4be34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f887da30a82e595aa412269e7ef29d0f8c12bfef09c2ad1fe2f0ba740e4be34->enter($__internal_4f887da30a82e595aa412269e7ef29d0f8c12bfef09c2ad1fe2f0ba740e4be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4f887da30a82e595aa412269e7ef29d0f8c12bfef09c2ad1fe2f0ba740e4be34->leave($__internal_4f887da30a82e595aa412269e7ef29d0f8c12bfef09c2ad1fe2f0ba740e4be34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
