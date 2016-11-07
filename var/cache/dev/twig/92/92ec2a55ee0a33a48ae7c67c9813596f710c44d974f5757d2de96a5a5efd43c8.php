<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_c7ad7e27b93a849a69b40abc698355b1da34dc413aecddf99218657f7b145a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4361830e17a4f25df4ff25194b4da660dbd23fb9314704e9d509c30f0ee2c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4361830e17a4f25df4ff25194b4da660dbd23fb9314704e9d509c30f0ee2c4f->enter($__internal_b4361830e17a4f25df4ff25194b4da660dbd23fb9314704e9d509c30f0ee2c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b4361830e17a4f25df4ff25194b4da660dbd23fb9314704e9d509c30f0ee2c4f->leave($__internal_b4361830e17a4f25df4ff25194b4da660dbd23fb9314704e9d509c30f0ee2c4f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2c4f640233283cdb18e051d908dad5fcfadc7565d41b41be1173cdb70626b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c4f640233283cdb18e051d908dad5fcfadc7565d41b41be1173cdb70626b6b->enter($__internal_f2c4f640233283cdb18e051d908dad5fcfadc7565d41b41be1173cdb70626b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_f2c4f640233283cdb18e051d908dad5fcfadc7565d41b41be1173cdb70626b6b->leave($__internal_f2c4f640233283cdb18e051d908dad5fcfadc7565d41b41be1173cdb70626b6b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
