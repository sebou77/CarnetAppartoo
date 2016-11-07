<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e1878993508fd31eeae71dfac36d2726b400a5eeb9d120ad54b7bf27c31834ca extends Twig_Template
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
        $__internal_520b496128ec0c7e953d0a14a47b4250edfcc992ccf3dec6d5e0b62615264861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520b496128ec0c7e953d0a14a47b4250edfcc992ccf3dec6d5e0b62615264861->enter($__internal_520b496128ec0c7e953d0a14a47b4250edfcc992ccf3dec6d5e0b62615264861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_520b496128ec0c7e953d0a14a47b4250edfcc992ccf3dec6d5e0b62615264861->leave($__internal_520b496128ec0c7e953d0a14a47b4250edfcc992ccf3dec6d5e0b62615264861_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_45a6c9cdbc27292c0c931f710523336a06404a296fa3be7bf53b153d0f15da3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a6c9cdbc27292c0c931f710523336a06404a296fa3be7bf53b153d0f15da3a->enter($__internal_45a6c9cdbc27292c0c931f710523336a06404a296fa3be7bf53b153d0f15da3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_45a6c9cdbc27292c0c931f710523336a06404a296fa3be7bf53b153d0f15da3a->leave($__internal_45a6c9cdbc27292c0c931f710523336a06404a296fa3be7bf53b153d0f15da3a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
