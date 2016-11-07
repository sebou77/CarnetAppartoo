<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_db13afda095e9e13037c4f0b7cb4a5cd6043a9e28c74eaa41c21f73ab7d18c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SebouCarnetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67f0476882ecb5d7734253e965e31876d2eb015e85728734a2411be6cc871ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f0476882ecb5d7734253e965e31876d2eb015e85728734a2411be6cc871ab1->enter($__internal_67f0476882ecb5d7734253e965e31876d2eb015e85728734a2411be6cc871ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f0476882ecb5d7734253e965e31876d2eb015e85728734a2411be6cc871ab1->leave($__internal_67f0476882ecb5d7734253e965e31876d2eb015e85728734a2411be6cc871ab1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3b218c6366dabe2a0d7178ec7aca034e033215745a8b0128154375c77644961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b218c6366dabe2a0d7178ec7aca034e033215745a8b0128154375c77644961->enter($__internal_a3b218c6366dabe2a0d7178ec7aca034e033215745a8b0128154375c77644961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  ";
        // line 19
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_a3b218c6366dabe2a0d7178ec7aca034e033215745a8b0128154375c77644961->leave($__internal_a3b218c6366dabe2a0d7178ec7aca034e033215745a8b0128154375c77644961_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a86c99b25fdc036a4cc84614109115e5cdc9fd7623bd18075951ab03af9461b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86c99b25fdc036a4cc84614109115e5cdc9fd7623bd18075951ab03af9461b5->enter($__internal_a86c99b25fdc036a4cc84614109115e5cdc9fd7623bd18075951ab03af9461b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 20
        echo "  ";
        
        $__internal_a86c99b25fdc036a4cc84614109115e5cdc9fd7623bd18075951ab03af9461b5->leave($__internal_a86c99b25fdc036a4cc84614109115e5cdc9fd7623bd18075951ab03af9461b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  88 => 19,  80 => 21,  77 => 19,  74 => 17,  68 => 16,  59 => 13,  54 => 12,  49 => 11,  44 => 10,  41 => 8,  35 => 7,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Sebou/UserBundle/Resources/views/layout.html.twig #}

{# On étend notre layout #}
{% extends \"SebouCarnetBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

  {# On affiche les messages flash que définissent les contrôleurs du bundle #}
  {% for key, messages in app.session.flashbag.all() %}
    {% for message in messages %}
      <div class=\"alert alert-{{ key }}\">
        {{ message|trans({}, 'FOSUserBundle') }}
      </div>
    {% endfor %}
  {% endfor %}

  {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
  {% block fos_user_content %}
  {% endblock fos_user_content %}

{% endblock %}
", "FOSUserBundle::layout.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\UserBundle/Resources/views/layout.html.twig");
    }
}
