<?php

/* @SebouUser/layout.html.twig */
class __TwigTemplate_c4a3f326efe8c94ea942d4589ac1e0e0ec6307d8848469a4e45d19d117706437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "@SebouUser/layout.html.twig", 4);
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
        $__internal_b4cb5bae166534a1c25f79377af5590c94e159d6ea452e7213545dee3c0dda31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cb5bae166534a1c25f79377af5590c94e159d6ea452e7213545dee3c0dda31->enter($__internal_b4cb5bae166534a1c25f79377af5590c94e159d6ea452e7213545dee3c0dda31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SebouUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4cb5bae166534a1c25f79377af5590c94e159d6ea452e7213545dee3c0dda31->leave($__internal_b4cb5bae166534a1c25f79377af5590c94e159d6ea452e7213545dee3c0dda31_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_996bfb6f0a0926bf6ca99d40a7f45f083aae890a4a81dd85a484e41ed78e5c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996bfb6f0a0926bf6ca99d40a7f45f083aae890a4a81dd85a484e41ed78e5c4d->enter($__internal_996bfb6f0a0926bf6ca99d40a7f45f083aae890a4a81dd85a484e41ed78e5c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouUser/layout.html.twig"));

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
        
        $__internal_996bfb6f0a0926bf6ca99d40a7f45f083aae890a4a81dd85a484e41ed78e5c4d->leave($__internal_996bfb6f0a0926bf6ca99d40a7f45f083aae890a4a81dd85a484e41ed78e5c4d_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bf0a3d3d3e2595939fb2125f0f284d178d92682bddd82716b590d294d349eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf0a3d3d3e2595939fb2125f0f284d178d92682bddd82716b590d294d349eea->enter($__internal_4bf0a3d3d3e2595939fb2125f0f284d178d92682bddd82716b590d294d349eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouUser/layout.html.twig"));

        // line 20
        echo "  ";
        
        $__internal_4bf0a3d3d3e2595939fb2125f0f284d178d92682bddd82716b590d294d349eea->leave($__internal_4bf0a3d3d3e2595939fb2125f0f284d178d92682bddd82716b590d294d349eea_prof);

    }

    public function getTemplateName()
    {
        return "@SebouUser/layout.html.twig";
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
", "@SebouUser/layout.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
