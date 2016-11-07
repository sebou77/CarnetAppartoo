<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_924a911c1f5c4e4dc9249b5fa77e5420576515e9d6402e8fad00775ad84292a3 extends Twig_Template
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
        $__internal_ef28e73b9383a9f07ad6bebc8198af25b9c4a841d9c41c30a341cf02bc7fd56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef28e73b9383a9f07ad6bebc8198af25b9c4a841d9c41c30a341cf02bc7fd56d->enter($__internal_ef28e73b9383a9f07ad6bebc8198af25b9c4a841d9c41c30a341cf02bc7fd56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ef28e73b9383a9f07ad6bebc8198af25b9c4a841d9c41c30a341cf02bc7fd56d->leave($__internal_ef28e73b9383a9f07ad6bebc8198af25b9c4a841d9c41c30a341cf02bc7fd56d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
