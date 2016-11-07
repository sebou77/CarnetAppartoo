<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c8c4b7348ad49d399045fee8cdb463f7d30a0aef38bc07307908e25c02aa92fb extends Twig_Template
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
        $__internal_e75a43637fa7ac5410f38f6660cc5ece85d11abd96feff93529cbf95ce57c8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75a43637fa7ac5410f38f6660cc5ece85d11abd96feff93529cbf95ce57c8e5->enter($__internal_e75a43637fa7ac5410f38f6660cc5ece85d11abd96feff93529cbf95ce57c8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e75a43637fa7ac5410f38f6660cc5ece85d11abd96feff93529cbf95ce57c8e5->leave($__internal_e75a43637fa7ac5410f38f6660cc5ece85d11abd96feff93529cbf95ce57c8e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
