<?php

/* SebouUserBundle::layout.html.twig */
class __TwigTemplate_3f5f3af470a60bd017ae6a55e07977b5c00c1d76a208fb314e59958a817593cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "SebouUserBundle::layout.html.twig", 4);
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
        $__internal_c30ba9570a5bb3fb03510e0ecb8903884efc86a5ef22d1936ef62966aa15af2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30ba9570a5bb3fb03510e0ecb8903884efc86a5ef22d1936ef62966aa15af2d->enter($__internal_c30ba9570a5bb3fb03510e0ecb8903884efc86a5ef22d1936ef62966aa15af2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c30ba9570a5bb3fb03510e0ecb8903884efc86a5ef22d1936ef62966aa15af2d->leave($__internal_c30ba9570a5bb3fb03510e0ecb8903884efc86a5ef22d1936ef62966aa15af2d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_014b0a60b8ee18f6e233e9b7782c694f51ca0a852f245830963217f4053c5649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014b0a60b8ee18f6e233e9b7782c694f51ca0a852f245830963217f4053c5649->enter($__internal_014b0a60b8ee18f6e233e9b7782c694f51ca0a852f245830963217f4053c5649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouUserBundle::layout.html.twig"));

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
        
        $__internal_014b0a60b8ee18f6e233e9b7782c694f51ca0a852f245830963217f4053c5649->leave($__internal_014b0a60b8ee18f6e233e9b7782c694f51ca0a852f245830963217f4053c5649_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9123887a5acd7d6ba9c5c591afc2bfc6a1ddb9e5c35ae48831a475ffee57a16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9123887a5acd7d6ba9c5c591afc2bfc6a1ddb9e5c35ae48831a475ffee57a16b->enter($__internal_9123887a5acd7d6ba9c5c591afc2bfc6a1ddb9e5c35ae48831a475ffee57a16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouUserBundle::layout.html.twig"));

        // line 20
        echo "  ";
        
        $__internal_9123887a5acd7d6ba9c5c591afc2bfc6a1ddb9e5c35ae48831a475ffee57a16b->leave($__internal_9123887a5acd7d6ba9c5c591afc2bfc6a1ddb9e5c35ae48831a475ffee57a16b_prof);

    }

    public function getTemplateName()
    {
        return "SebouUserBundle::layout.html.twig";
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
", "SebouUserBundle::layout.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\UserBundle/Resources/views/layout.html.twig");
    }
}
