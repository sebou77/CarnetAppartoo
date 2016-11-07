<?php

/* layout.html.twig */
class __TwigTemplate_ca59c1717448ebb0c0adc520fb3647837ca4bcfb7dfead00a41c591aa651b317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d4128005b6c45abb79144c4ffd537a0ce5a3c5633b02f3048ef4d1b2b7c7aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4128005b6c45abb79144c4ffd537a0ce5a3c5633b02f3048ef4d1b2b7c7aa5->enter($__internal_3d4128005b6c45abb79144c4ffd537a0ce5a3c5633b02f3048ef4d1b2b7c7aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "  </body>
</html>
";
        
        $__internal_3d4128005b6c45abb79144c4ffd537a0ce5a3c5633b02f3048ef4d1b2b7c7aa5->leave($__internal_3d4128005b6c45abb79144c4ffd537a0ce5a3c5633b02f3048ef4d1b2b7c7aa5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_373d1dd4b29e869df194ca6a120d481d9c8293455b0e0f7bd22f48f743ea7ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373d1dd4b29e869df194ca6a120d481d9c8293455b0e0f7bd22f48f743ea7ef0->enter($__internal_373d1dd4b29e869df194ca6a120d481d9c8293455b0e0f7bd22f48f743ea7ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        echo "Appartoo Accueil";
        
        $__internal_373d1dd4b29e869df194ca6a120d481d9c8293455b0e0f7bd22f48f743ea7ef0->leave($__internal_373d1dd4b29e869df194ca6a120d481d9c8293455b0e0f7bd22f48f743ea7ef0_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_e32e6a7366569a7ce4d0608c717158e0dbd250eee83440076a9a8a0f7b5a26fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32e6a7366569a7ce4d0608c717158e0dbd250eee83440076a9a8a0f7b5a26fc->enter($__internal_e32e6a7366569a7ce4d0608c717158e0dbd250eee83440076a9a8a0f7b5a26fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 16
        echo "    <h1>Hello World !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
    ";
        
        $__internal_e32e6a7366569a7ce4d0608c717158e0dbd250eee83440076a9a8a0f7b5a26fc->leave($__internal_e32e6a7366569a7ce4d0608c717158e0dbd250eee83440076a9a8a0f7b5a26fc_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 16,  82 => 15,  70 => 4,  61 => 25,  58 => 15,  53 => 13,  48 => 12,  43 => 10,  37 => 8,  35 => 7,  29 => 4,  24 => 1,);
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
    {% block body %}
    <h1>Hello World !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
    {% endblock %}
  </body>
</html>
", "layout.html.twig", "C:\\wamp\\www\\Appartoo\\app\\Resources\\views\\layout.html.twig");
    }
}
