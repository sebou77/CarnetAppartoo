<?php

/* ::layout.html.twig */
class __TwigTemplate_55f436e1757106c81857530bddefa7d2e69ffb00b445a7f1bdc599603ae1ddc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lien' => array($this, 'block_lien'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8799340a7b7e793732097aa1d878905457f7c319814af3f4fda1b4706196a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8799340a7b7e793732097aa1d878905457f7c319814af3f4fda1b4706196a48->enter($__internal_d8799340a7b7e793732097aa1d878905457f7c319814af3f4fda1b4706196a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
    -
    <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
";
        } else {
            // line 12
            echo "    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
    <a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Inscription</a>
";
        }
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('lien', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "  </body>
</html>
";
        
        $__internal_d8799340a7b7e793732097aa1d878905457f7c319814af3f4fda1b4706196a48->leave($__internal_d8799340a7b7e793732097aa1d878905457f7c319814af3f4fda1b4706196a48_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca420b4165b08209cfb94317e9e9e26900190ebbaa88d34a2b9fe43d5af395c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca420b4165b08209cfb94317e9e9e26900190ebbaa88d34a2b9fe43d5af395c2->enter($__internal_ca420b4165b08209cfb94317e9e9e26900190ebbaa88d34a2b9fe43d5af395c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        echo "Appartoo Accueil";
        
        $__internal_ca420b4165b08209cfb94317e9e9e26900190ebbaa88d34a2b9fe43d5af395c2->leave($__internal_ca420b4165b08209cfb94317e9e9e26900190ebbaa88d34a2b9fe43d5af395c2_prof);

    }

    // line 16
    public function block_lien($context, array $blocks = array())
    {
        $__internal_f447de2a29b86881bffb6cd8715ec46d8c8106edfe6acdd4f8896b0c4beb0638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f447de2a29b86881bffb6cd8715ec46d8c8106edfe6acdd4f8896b0c4beb0638->enter($__internal_f447de2a29b86881bffb6cd8715ec46d8c8106edfe6acdd4f8896b0c4beb0638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 17
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "      <br/>
      <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view");
            echo "\">Voir ses contacts</a>
      <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
            echo "\">Ajouter un contact</a>
    ";
        }
        // line 22
        echo "    ";
        
        $__internal_f447de2a29b86881bffb6cd8715ec46d8c8106edfe6acdd4f8896b0c4beb0638->leave($__internal_f447de2a29b86881bffb6cd8715ec46d8c8106edfe6acdd4f8896b0c4beb0638_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfe89c504e323e33c5f4f3275f1e9d29525021b5898ca0d4209a066ba8a86446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe89c504e323e33c5f4f3275f1e9d29525021b5898ca0d4209a066ba8a86446->enter($__internal_bfe89c504e323e33c5f4f3275f1e9d29525021b5898ca0d4209a066ba8a86446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 25
        echo "    <h1>Carnet D'adresse </h1>

    <p>
      Bienvenue sur votre carnet d'adresse
    </p>
    ";
        
        $__internal_bfe89c504e323e33c5f4f3275f1e9d29525021b5898ca0d4209a066ba8a86446->leave($__internal_bfe89c504e323e33c5f4f3275f1e9d29525021b5898ca0d4209a066ba8a86446_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 25,  118 => 24,  111 => 22,  106 => 20,  102 => 19,  99 => 18,  96 => 17,  90 => 16,  78 => 4,  69 => 31,  67 => 24,  64 => 23,  62 => 16,  59 => 15,  54 => 13,  49 => 12,  44 => 10,  38 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <title>{% block title %}Appartoo Accueil{% endblock %}</title>
  </head>
  <body>
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    Connecté en tant que {{ app.user.username }}
    -
    <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
{% else %}
    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
    <a href=\"{{ path('fos_user_registration_register') }}\">Inscription</a>
{% endif %}

    {% block lien %}
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
      <br/>
      <a href=\"{{ path('view') }}\">Voir ses contacts</a>
      <a href=\"{{ path('add') }}\">Ajouter un contact</a>
    {% endif %}
    {% endblock %}

    {% block body %}
    <h1>Carnet D'adresse </h1>

    <p>
      Bienvenue sur votre carnet d'adresse
    </p>
    {% endblock %}
  </body>
</html>
", "::layout.html.twig", "C:\\wamp\\www\\Appartoo\\app/Resources\\views/layout.html.twig");
    }
}
