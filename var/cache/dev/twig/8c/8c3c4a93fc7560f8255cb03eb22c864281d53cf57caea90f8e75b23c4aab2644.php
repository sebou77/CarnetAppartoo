<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1ac1dab205be43912560f52a345fb2a5b4fb607953882e82b195a9d4cfc71bc9 extends Twig_Template
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
        $__internal_900f96ce25f4cda81ba0f9419c926ac84763d079c5f66e8c3dd43d748fa22e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900f96ce25f4cda81ba0f9419c926ac84763d079c5f66e8c3dd43d748fa22e6e->enter($__internal_900f96ce25f4cda81ba0f9419c926ac84763d079c5f66e8c3dd43d748fa22e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_900f96ce25f4cda81ba0f9419c926ac84763d079c5f66e8c3dd43d748fa22e6e->leave($__internal_900f96ce25f4cda81ba0f9419c926ac84763d079c5f66e8c3dd43d748fa22e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
