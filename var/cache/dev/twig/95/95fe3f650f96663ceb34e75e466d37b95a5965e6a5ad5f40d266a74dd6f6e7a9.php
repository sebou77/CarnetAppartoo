<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6e23eb1c5c631d63b01ba7932eeed9ed3d0a81c6bf8d5ba7e3933382aeab4def extends Twig_Template
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
        $__internal_9aab0248ce01ffaad18d4cd881fb9cfc115d82d46dc665f5c2487b308e5b4291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aab0248ce01ffaad18d4cd881fb9cfc115d82d46dc665f5c2487b308e5b4291->enter($__internal_9aab0248ce01ffaad18d4cd881fb9cfc115d82d46dc665f5c2487b308e5b4291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9aab0248ce01ffaad18d4cd881fb9cfc115d82d46dc665f5c2487b308e5b4291->leave($__internal_9aab0248ce01ffaad18d4cd881fb9cfc115d82d46dc665f5c2487b308e5b4291_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
