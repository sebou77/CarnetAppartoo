<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_faa2337e7633bde30a9f958c62849f8c9e3c21663bc9404de1d248154ab4f167 extends Twig_Template
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
        $__internal_cbb145296f2343e23b735351d8cb05b6aeb24775e41c7bcfb80922c923c20434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb145296f2343e23b735351d8cb05b6aeb24775e41c7bcfb80922c923c20434->enter($__internal_cbb145296f2343e23b735351d8cb05b6aeb24775e41c7bcfb80922c923c20434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_cbb145296f2343e23b735351d8cb05b6aeb24775e41c7bcfb80922c923c20434->leave($__internal_cbb145296f2343e23b735351d8cb05b6aeb24775e41c7bcfb80922c923c20434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
