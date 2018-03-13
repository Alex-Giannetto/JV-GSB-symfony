<?php

/* ::base.html.twig */
class __TwigTemplate_84c4c96af16d0a6477c1cd3c65932c32613cd8d8fe91947d48bc4b7057c60a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nomPage' => array($this, 'block_nomPage'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c33d439b473d79b9ca65c224055707d49432b73f533a8cb7b7f1828302881f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33d439b473d79b9ca65c224055707d49432b73f533a8cb7b7f1828302881f76->enter($__internal_c33d439b473d79b9ca65c224055707d49432b73f533a8cb7b7f1828302881f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6219ed0e850546d79f7d5a824d69a1bacbf358175c3498d21a4cf01cc240fec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6219ed0e850546d79f7d5a824d69a1bacbf358175c3498d21a4cf01cc240fec7->enter($__internal_6219ed0e850546d79f7d5a824d69a1bacbf358175c3498d21a4cf01cc240fec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>GSB ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<nav>
    <div class=\"nav__menu\">
        <a href=\"#\" class=\"nav__menu__element\">Galaxy Swiss Bourdin</a>
        <a href=\"#\" class=\"nav__menu__element\">Lien</a>
        <a href=\"#\" class=\"nav__menu__element\">Lien</a>
        <a href=\"#\" class=\"nav__menu__element\">Lien</a>
        <a href=\"#\" class=\"nav__menu__element\">Lien</a>
    </div>
</nav>

<header>
    <div class=\"header__title\" id=\"header__title\">
        ";
        // line 24
        $this->displayBlock('nomPage', $context, $blocks);
        // line 25
        echo "    </div>
</header>

<div class=\"card\">
    ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "</div>

";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "</body>
</html>
";
        
        $__internal_c33d439b473d79b9ca65c224055707d49432b73f533a8cb7b7f1828302881f76->leave($__internal_c33d439b473d79b9ca65c224055707d49432b73f533a8cb7b7f1828302881f76_prof);

        
        $__internal_6219ed0e850546d79f7d5a824d69a1bacbf358175c3498d21a4cf01cc240fec7->leave($__internal_6219ed0e850546d79f7d5a824d69a1bacbf358175c3498d21a4cf01cc240fec7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad0977ba3f527f777f69c1dc92b86bf203083df2e283fbfc3336fdcf1f267af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0977ba3f527f777f69c1dc92b86bf203083df2e283fbfc3336fdcf1f267af7->enter($__internal_ad0977ba3f527f777f69c1dc92b86bf203083df2e283fbfc3336fdcf1f267af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b6c658ebece9de279d322957bdb0f91e0449ce953c279e8c86b1ecd394a676d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6c658ebece9de279d322957bdb0f91e0449ce953c279e8c86b1ecd394a676d->enter($__internal_4b6c658ebece9de279d322957bdb0f91e0449ce953c279e8c86b1ecd394a676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4b6c658ebece9de279d322957bdb0f91e0449ce953c279e8c86b1ecd394a676d->leave($__internal_4b6c658ebece9de279d322957bdb0f91e0449ce953c279e8c86b1ecd394a676d_prof);

        
        $__internal_ad0977ba3f527f777f69c1dc92b86bf203083df2e283fbfc3336fdcf1f267af7->leave($__internal_ad0977ba3f527f777f69c1dc92b86bf203083df2e283fbfc3336fdcf1f267af7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4de43abb7ab2135aca0eb404654289b6b3f8c1c63a5f127e024084412245ad75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de43abb7ab2135aca0eb404654289b6b3f8c1c63a5f127e024084412245ad75->enter($__internal_4de43abb7ab2135aca0eb404654289b6b3f8c1c63a5f127e024084412245ad75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_737896112995a51bf6ff12ad6f54055f0c48ba83f19524f30bc38c00f51c2a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737896112995a51bf6ff12ad6f54055f0c48ba83f19524f30bc38c00f51c2a31->enter($__internal_737896112995a51bf6ff12ad6f54055f0c48ba83f19524f30bc38c00f51c2a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_737896112995a51bf6ff12ad6f54055f0c48ba83f19524f30bc38c00f51c2a31->leave($__internal_737896112995a51bf6ff12ad6f54055f0c48ba83f19524f30bc38c00f51c2a31_prof);

        
        $__internal_4de43abb7ab2135aca0eb404654289b6b3f8c1c63a5f127e024084412245ad75->leave($__internal_4de43abb7ab2135aca0eb404654289b6b3f8c1c63a5f127e024084412245ad75_prof);

    }

    // line 24
    public function block_nomPage($context, array $blocks = array())
    {
        $__internal_6dc7bf23f87b83337bb935e9d2debe859256e7579689cb4ffa9b840ecda5e81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc7bf23f87b83337bb935e9d2debe859256e7579689cb4ffa9b840ecda5e81d->enter($__internal_6dc7bf23f87b83337bb935e9d2debe859256e7579689cb4ffa9b840ecda5e81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        $__internal_7f60e55d8ef618d7a25fa489d60175d769b5739d24797ff261961922e82791be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f60e55d8ef618d7a25fa489d60175d769b5739d24797ff261961922e82791be->enter($__internal_7f60e55d8ef618d7a25fa489d60175d769b5739d24797ff261961922e82791be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        
        $__internal_7f60e55d8ef618d7a25fa489d60175d769b5739d24797ff261961922e82791be->leave($__internal_7f60e55d8ef618d7a25fa489d60175d769b5739d24797ff261961922e82791be_prof);

        
        $__internal_6dc7bf23f87b83337bb935e9d2debe859256e7579689cb4ffa9b840ecda5e81d->leave($__internal_6dc7bf23f87b83337bb935e9d2debe859256e7579689cb4ffa9b840ecda5e81d_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_e16575294c2422b3065e9b5aa6eeacd3dfc9e36d97dee9fe8112e2876f274f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16575294c2422b3065e9b5aa6eeacd3dfc9e36d97dee9fe8112e2876f274f1b->enter($__internal_e16575294c2422b3065e9b5aa6eeacd3dfc9e36d97dee9fe8112e2876f274f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a601cf12d193af41e401ac936b5e27d73b470fee1afb72a944d42e4754e0f67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a601cf12d193af41e401ac936b5e27d73b470fee1afb72a944d42e4754e0f67e->enter($__internal_a601cf12d193af41e401ac936b5e27d73b470fee1afb72a944d42e4754e0f67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a601cf12d193af41e401ac936b5e27d73b470fee1afb72a944d42e4754e0f67e->leave($__internal_a601cf12d193af41e401ac936b5e27d73b470fee1afb72a944d42e4754e0f67e_prof);

        
        $__internal_e16575294c2422b3065e9b5aa6eeacd3dfc9e36d97dee9fe8112e2876f274f1b->leave($__internal_e16575294c2422b3065e9b5aa6eeacd3dfc9e36d97dee9fe8112e2876f274f1b_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2363414cba0b35c8b4154e855c132dab97f19eccd9498bb3ea9560ce0f302be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2363414cba0b35c8b4154e855c132dab97f19eccd9498bb3ea9560ce0f302be4->enter($__internal_2363414cba0b35c8b4154e855c132dab97f19eccd9498bb3ea9560ce0f302be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b9f133fc32c64d1d6a8447e548e2aabff6fac7024778d0bcf17b1900b922c447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f133fc32c64d1d6a8447e548e2aabff6fac7024778d0bcf17b1900b922c447->enter($__internal_b9f133fc32c64d1d6a8447e548e2aabff6fac7024778d0bcf17b1900b922c447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b9f133fc32c64d1d6a8447e548e2aabff6fac7024778d0bcf17b1900b922c447->leave($__internal_b9f133fc32c64d1d6a8447e548e2aabff6fac7024778d0bcf17b1900b922c447_prof);

        
        $__internal_2363414cba0b35c8b4154e855c132dab97f19eccd9498bb3ea9560ce0f302be4->leave($__internal_2363414cba0b35c8b4154e855c132dab97f19eccd9498bb3ea9560ce0f302be4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 32,  145 => 29,  128 => 24,  111 => 6,  94 => 5,  82 => 33,  80 => 32,  76 => 30,  74 => 29,  68 => 25,  66 => 24,  47 => 8,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
    <meta charset=\"UTF-8\" />
    <title>GSB {% block title %}{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<nav>
    <div class=\"nav__menu\">
        <a href=\"#\" class=\"nav__menu__element\">Galaxy Swiss Bourdin</a>
        <a href=\"#\" class=\"nav__menu__element\">Lien</a>
        <a href=\"#\" class=\"nav__menu__element\">Lien</a>
        <a href=\"#\" class=\"nav__menu__element\">Lien</a>
        <a href=\"#\" class=\"nav__menu__element\">Lien</a>
    </div>
</nav>

<header>
    <div class=\"header__title\" id=\"header__title\">
        {% block nomPage %}{% endblock %}
    </div>
</header>

<div class=\"card\">
    {% block body %}{% endblock %}
</div>

{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_SymfonyAlex/app/Resources/views/base.html.twig");
    }
}
