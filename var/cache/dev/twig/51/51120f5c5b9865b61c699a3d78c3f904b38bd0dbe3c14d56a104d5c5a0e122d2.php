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
            'card' => array($this, 'block_card'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa78f59d948a870eb0b1aa2ebca75c63b7932ed7ea625d029060a420bed2bb5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa78f59d948a870eb0b1aa2ebca75c63b7932ed7ea625d029060a420bed2bb5d->enter($__internal_fa78f59d948a870eb0b1aa2ebca75c63b7932ed7ea625d029060a420bed2bb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ced4bf33c285018231bdadcee2ff851ec38951e05ea0041e31b561e50d136a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced4bf33c285018231bdadcee2ff851ec38951e05ea0041e31b561e50d136a5c->enter($__internal_ced4bf33c285018231bdadcee2ff851ec38951e05ea0041e31b561e50d136a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

<nav id=\"nav\">
    <div class=\"nav__menu\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_platform_homepage");
        echo "\" class=\"nav__menu__element nav__menu__element--title link--active\">Galaxy Swiss Bourdin</a>

        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_platform_visites_all");
        echo "\" class=\"nav__menu__element link--active\">Rapport de visite</a>
        <a href=\"#\" class=\"nav__menu__element link--desactivate\">Médicament</a>
        <a href=\"#\" class=\"nav__menu__element link--desactivate\">Médecin</a>
        <a href=\"#\" class=\"nav__menu__element link--desactivate\">Visiteur</a>
    </div>
</nav>

<header>
    <div class=\"header__title\" id=\"header__title\">
        ";
        // line 25
        $this->displayBlock('nomPage', $context, $blocks);
        // line 26
        echo "    </div>
</header>

<div class=\"card\">
    ";
        // line 30
        $this->displayBlock('card', $context, $blocks);
        // line 31
        echo "</div>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scroll.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_fa78f59d948a870eb0b1aa2ebca75c63b7932ed7ea625d029060a420bed2bb5d->leave($__internal_fa78f59d948a870eb0b1aa2ebca75c63b7932ed7ea625d029060a420bed2bb5d_prof);

        
        $__internal_ced4bf33c285018231bdadcee2ff851ec38951e05ea0041e31b561e50d136a5c->leave($__internal_ced4bf33c285018231bdadcee2ff851ec38951e05ea0041e31b561e50d136a5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a94ce5a1e846aae76ee021caab0eba546df78facb5849f28035a0c32c67f27ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94ce5a1e846aae76ee021caab0eba546df78facb5849f28035a0c32c67f27ba->enter($__internal_a94ce5a1e846aae76ee021caab0eba546df78facb5849f28035a0c32c67f27ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6827b550d362ecfee441d9041db561f189d3cf3abb4fa581d192f249af05e5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6827b550d362ecfee441d9041db561f189d3cf3abb4fa581d192f249af05e5a2->enter($__internal_6827b550d362ecfee441d9041db561f189d3cf3abb4fa581d192f249af05e5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6827b550d362ecfee441d9041db561f189d3cf3abb4fa581d192f249af05e5a2->leave($__internal_6827b550d362ecfee441d9041db561f189d3cf3abb4fa581d192f249af05e5a2_prof);

        
        $__internal_a94ce5a1e846aae76ee021caab0eba546df78facb5849f28035a0c32c67f27ba->leave($__internal_a94ce5a1e846aae76ee021caab0eba546df78facb5849f28035a0c32c67f27ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f576f10388ab333670932bdfaa0738ae4cea49f8dca54af9ef56d898e7b65ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f576f10388ab333670932bdfaa0738ae4cea49f8dca54af9ef56d898e7b65ea5->enter($__internal_f576f10388ab333670932bdfaa0738ae4cea49f8dca54af9ef56d898e7b65ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_155ab46fdce33d02a433632e2b0d8ba09386bb7307ceab2b4b427fed6504de28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155ab46fdce33d02a433632e2b0d8ba09386bb7307ceab2b4b427fed6504de28->enter($__internal_155ab46fdce33d02a433632e2b0d8ba09386bb7307ceab2b4b427fed6504de28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_155ab46fdce33d02a433632e2b0d8ba09386bb7307ceab2b4b427fed6504de28->leave($__internal_155ab46fdce33d02a433632e2b0d8ba09386bb7307ceab2b4b427fed6504de28_prof);

        
        $__internal_f576f10388ab333670932bdfaa0738ae4cea49f8dca54af9ef56d898e7b65ea5->leave($__internal_f576f10388ab333670932bdfaa0738ae4cea49f8dca54af9ef56d898e7b65ea5_prof);

    }

    // line 25
    public function block_nomPage($context, array $blocks = array())
    {
        $__internal_1bc7a2c9d941b04c41dbf858d60383a3b43b3398c90b31b1269f43eac74fe998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc7a2c9d941b04c41dbf858d60383a3b43b3398c90b31b1269f43eac74fe998->enter($__internal_1bc7a2c9d941b04c41dbf858d60383a3b43b3398c90b31b1269f43eac74fe998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        $__internal_37e581dbdcadf84f7ba078ab663f33e7ad8326716306de710792c1c26de8ca62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e581dbdcadf84f7ba078ab663f33e7ad8326716306de710792c1c26de8ca62->enter($__internal_37e581dbdcadf84f7ba078ab663f33e7ad8326716306de710792c1c26de8ca62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        
        $__internal_37e581dbdcadf84f7ba078ab663f33e7ad8326716306de710792c1c26de8ca62->leave($__internal_37e581dbdcadf84f7ba078ab663f33e7ad8326716306de710792c1c26de8ca62_prof);

        
        $__internal_1bc7a2c9d941b04c41dbf858d60383a3b43b3398c90b31b1269f43eac74fe998->leave($__internal_1bc7a2c9d941b04c41dbf858d60383a3b43b3398c90b31b1269f43eac74fe998_prof);

    }

    // line 30
    public function block_card($context, array $blocks = array())
    {
        $__internal_2ebd0edc676be7d7bcb82076d97dc099affcb67433c41b1ed63fc328a9664eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebd0edc676be7d7bcb82076d97dc099affcb67433c41b1ed63fc328a9664eda->enter($__internal_2ebd0edc676be7d7bcb82076d97dc099affcb67433c41b1ed63fc328a9664eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        $__internal_0408d9511817bfb5052fbaaff173f4ffa52996d056534b877a4d7bb5a8669266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0408d9511817bfb5052fbaaff173f4ffa52996d056534b877a4d7bb5a8669266->enter($__internal_0408d9511817bfb5052fbaaff173f4ffa52996d056534b877a4d7bb5a8669266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        
        $__internal_0408d9511817bfb5052fbaaff173f4ffa52996d056534b877a4d7bb5a8669266->leave($__internal_0408d9511817bfb5052fbaaff173f4ffa52996d056534b877a4d7bb5a8669266_prof);

        
        $__internal_2ebd0edc676be7d7bcb82076d97dc099affcb67433c41b1ed63fc328a9664eda->leave($__internal_2ebd0edc676be7d7bcb82076d97dc099affcb67433c41b1ed63fc328a9664eda_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_c48976ff91b98a8354bf4354e04b64cf719a6c053c6f96246195363c9468ed1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48976ff91b98a8354bf4354e04b64cf719a6c053c6f96246195363c9468ed1f->enter($__internal_c48976ff91b98a8354bf4354e04b64cf719a6c053c6f96246195363c9468ed1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f88a3a74852d71f2aa5574325c244372b72c9c2ea3fc2b4272227d59e762db47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88a3a74852d71f2aa5574325c244372b72c9c2ea3fc2b4272227d59e762db47->enter($__internal_f88a3a74852d71f2aa5574325c244372b72c9c2ea3fc2b4272227d59e762db47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f88a3a74852d71f2aa5574325c244372b72c9c2ea3fc2b4272227d59e762db47->leave($__internal_f88a3a74852d71f2aa5574325c244372b72c9c2ea3fc2b4272227d59e762db47_prof);

        
        $__internal_c48976ff91b98a8354bf4354e04b64cf719a6c053c6f96246195363c9468ed1f->leave($__internal_c48976ff91b98a8354bf4354e04b64cf719a6c053c6f96246195363c9468ed1f_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7353e7b16d17cdbf57a1df720150f54f942e1dc61780092af1e92440fd5331b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7353e7b16d17cdbf57a1df720150f54f942e1dc61780092af1e92440fd5331b8->enter($__internal_7353e7b16d17cdbf57a1df720150f54f942e1dc61780092af1e92440fd5331b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc1cb7fc765c11edd18c741d373341842de3c15d1897129ff09f6852fcaf7c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1cb7fc765c11edd18c741d373341842de3c15d1897129ff09f6852fcaf7c18->enter($__internal_dc1cb7fc765c11edd18c741d373341842de3c15d1897129ff09f6852fcaf7c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc1cb7fc765c11edd18c741d373341842de3c15d1897129ff09f6852fcaf7c18->leave($__internal_dc1cb7fc765c11edd18c741d373341842de3c15d1897129ff09f6852fcaf7c18_prof);

        
        $__internal_7353e7b16d17cdbf57a1df720150f54f942e1dc61780092af1e92440fd5331b8->leave($__internal_7353e7b16d17cdbf57a1df720150f54f942e1dc61780092af1e92440fd5331b8_prof);

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
        return array (  194 => 34,  177 => 32,  160 => 30,  143 => 25,  126 => 6,  109 => 5,  94 => 35,  92 => 34,  89 => 33,  87 => 32,  84 => 31,  82 => 30,  76 => 26,  74 => 25,  62 => 16,  57 => 14,  48 => 8,  43 => 7,  41 => 6,  37 => 5,  31 => 1,);
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

<nav id=\"nav\">
    <div class=\"nav__menu\">
        <a href=\"{{ path('gsb_platform_homepage') }}\" class=\"nav__menu__element nav__menu__element--title link--active\">Galaxy Swiss Bourdin</a>

        <a href=\"{{ path('gsb_platform_visites_all') }}\" class=\"nav__menu__element link--active\">Rapport de visite</a>
        <a href=\"#\" class=\"nav__menu__element link--desactivate\">Médicament</a>
        <a href=\"#\" class=\"nav__menu__element link--desactivate\">Médecin</a>
        <a href=\"#\" class=\"nav__menu__element link--desactivate\">Visiteur</a>
    </div>
</nav>

<header>
    <div class=\"header__title\" id=\"header__title\">
        {% block nomPage %}{% endblock %}
    </div>
</header>

<div class=\"card\">
    {% block card %}{% endblock %}
</div>
{% block body %}{% endblock %}

{% block javascripts %}{% endblock %}
<script src=\"{{ asset('js/scroll.js') }}\"></script>
</body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_SymfonyAlex/app/Resources/views/base.html.twig");
    }
}
