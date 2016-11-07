<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_c6b5550784a5a7e77de5911849d2205e2d33b60da152e6eb3ba45c1d672e0dd1 extends Twig_Template
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
        $__internal_7b01aa8dce619e0f5e6409081b5ef6d6d874d6d24d26917579c54af5e118452e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b01aa8dce619e0f5e6409081b5ef6d6d874d6d24d26917579c54af5e118452e->enter($__internal_7b01aa8dce619e0f5e6409081b5ef6d6d874d6d24d26917579c54af5e118452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_7b01aa8dce619e0f5e6409081b5ef6d6d874d6d24d26917579c54af5e118452e->leave($__internal_7b01aa8dce619e0f5e6409081b5ef6d6d874d6d24d26917579c54af5e118452e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
