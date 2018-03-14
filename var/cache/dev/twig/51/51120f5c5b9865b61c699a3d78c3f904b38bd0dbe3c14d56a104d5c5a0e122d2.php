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
        $__internal_1997f652f6b85d76619e1bcdb1879e335c267432c76ace981a36f6db329950a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1997f652f6b85d76619e1bcdb1879e335c267432c76ace981a36f6db329950a0->enter($__internal_1997f652f6b85d76619e1bcdb1879e335c267432c76ace981a36f6db329950a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bdcd54f4d50560402ab23015a81eaa79045667caf1870d631ea3768658a52181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcd54f4d50560402ab23015a81eaa79045667caf1870d631ea3768658a52181->enter($__internal_bdcd54f4d50560402ab23015a81eaa79045667caf1870d631ea3768658a52181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main-min.css"), "html", null, true);
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
        
        $__internal_1997f652f6b85d76619e1bcdb1879e335c267432c76ace981a36f6db329950a0->leave($__internal_1997f652f6b85d76619e1bcdb1879e335c267432c76ace981a36f6db329950a0_prof);

        
        $__internal_bdcd54f4d50560402ab23015a81eaa79045667caf1870d631ea3768658a52181->leave($__internal_bdcd54f4d50560402ab23015a81eaa79045667caf1870d631ea3768658a52181_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d06b53f0d9b7a77b1c977e69e3a461e44ac0019bde5ef283b71f6d1b54ff748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d06b53f0d9b7a77b1c977e69e3a461e44ac0019bde5ef283b71f6d1b54ff748->enter($__internal_9d06b53f0d9b7a77b1c977e69e3a461e44ac0019bde5ef283b71f6d1b54ff748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_672319be1515d845d9c2425a1c3ebd394e4a277516a29ff63fd344a9b4e2d86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672319be1515d845d9c2425a1c3ebd394e4a277516a29ff63fd344a9b4e2d86f->enter($__internal_672319be1515d845d9c2425a1c3ebd394e4a277516a29ff63fd344a9b4e2d86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_672319be1515d845d9c2425a1c3ebd394e4a277516a29ff63fd344a9b4e2d86f->leave($__internal_672319be1515d845d9c2425a1c3ebd394e4a277516a29ff63fd344a9b4e2d86f_prof);

        
        $__internal_9d06b53f0d9b7a77b1c977e69e3a461e44ac0019bde5ef283b71f6d1b54ff748->leave($__internal_9d06b53f0d9b7a77b1c977e69e3a461e44ac0019bde5ef283b71f6d1b54ff748_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_468e7c06b7009baded6024acb6acaa710870259b706f8244f03cf378a475631c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468e7c06b7009baded6024acb6acaa710870259b706f8244f03cf378a475631c->enter($__internal_468e7c06b7009baded6024acb6acaa710870259b706f8244f03cf378a475631c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9efb052e9a35c573d8143e6df70f5112680f1dc4496e6b7bed86fb6d5007d10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efb052e9a35c573d8143e6df70f5112680f1dc4496e6b7bed86fb6d5007d10d->enter($__internal_9efb052e9a35c573d8143e6df70f5112680f1dc4496e6b7bed86fb6d5007d10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9efb052e9a35c573d8143e6df70f5112680f1dc4496e6b7bed86fb6d5007d10d->leave($__internal_9efb052e9a35c573d8143e6df70f5112680f1dc4496e6b7bed86fb6d5007d10d_prof);

        
        $__internal_468e7c06b7009baded6024acb6acaa710870259b706f8244f03cf378a475631c->leave($__internal_468e7c06b7009baded6024acb6acaa710870259b706f8244f03cf378a475631c_prof);

    }

    // line 25
    public function block_nomPage($context, array $blocks = array())
    {
        $__internal_a6e6b9106322d9dd5ae94e8c22c99e2d4e98154a7aa43e707698758fba3ed63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e6b9106322d9dd5ae94e8c22c99e2d4e98154a7aa43e707698758fba3ed63a->enter($__internal_a6e6b9106322d9dd5ae94e8c22c99e2d4e98154a7aa43e707698758fba3ed63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        $__internal_832fa7547832b446470110612e7a92c9772b5983382bb4c931ccfd50e9f90347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832fa7547832b446470110612e7a92c9772b5983382bb4c931ccfd50e9f90347->enter($__internal_832fa7547832b446470110612e7a92c9772b5983382bb4c931ccfd50e9f90347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        
        $__internal_832fa7547832b446470110612e7a92c9772b5983382bb4c931ccfd50e9f90347->leave($__internal_832fa7547832b446470110612e7a92c9772b5983382bb4c931ccfd50e9f90347_prof);

        
        $__internal_a6e6b9106322d9dd5ae94e8c22c99e2d4e98154a7aa43e707698758fba3ed63a->leave($__internal_a6e6b9106322d9dd5ae94e8c22c99e2d4e98154a7aa43e707698758fba3ed63a_prof);

    }

    // line 30
    public function block_card($context, array $blocks = array())
    {
        $__internal_52d4af3dbf954fb003f6f43278f2aee681c3f31408e44fde7a3dcbcea4eab6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d4af3dbf954fb003f6f43278f2aee681c3f31408e44fde7a3dcbcea4eab6ec->enter($__internal_52d4af3dbf954fb003f6f43278f2aee681c3f31408e44fde7a3dcbcea4eab6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        $__internal_93c9b14bb6d605115b8782eb2da96770a06b22abc81e000fc45a3f420a98efb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c9b14bb6d605115b8782eb2da96770a06b22abc81e000fc45a3f420a98efb6->enter($__internal_93c9b14bb6d605115b8782eb2da96770a06b22abc81e000fc45a3f420a98efb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        
        $__internal_93c9b14bb6d605115b8782eb2da96770a06b22abc81e000fc45a3f420a98efb6->leave($__internal_93c9b14bb6d605115b8782eb2da96770a06b22abc81e000fc45a3f420a98efb6_prof);

        
        $__internal_52d4af3dbf954fb003f6f43278f2aee681c3f31408e44fde7a3dcbcea4eab6ec->leave($__internal_52d4af3dbf954fb003f6f43278f2aee681c3f31408e44fde7a3dcbcea4eab6ec_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_956b1612dd9c44cf54f11b588bffd61dfdded06aa2a7479aff2590bf13cd9bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956b1612dd9c44cf54f11b588bffd61dfdded06aa2a7479aff2590bf13cd9bde->enter($__internal_956b1612dd9c44cf54f11b588bffd61dfdded06aa2a7479aff2590bf13cd9bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b73d15e88a31b10aadc8711daff4a25dec0cbf24062e15cdac4e594ddb06e702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73d15e88a31b10aadc8711daff4a25dec0cbf24062e15cdac4e594ddb06e702->enter($__internal_b73d15e88a31b10aadc8711daff4a25dec0cbf24062e15cdac4e594ddb06e702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b73d15e88a31b10aadc8711daff4a25dec0cbf24062e15cdac4e594ddb06e702->leave($__internal_b73d15e88a31b10aadc8711daff4a25dec0cbf24062e15cdac4e594ddb06e702_prof);

        
        $__internal_956b1612dd9c44cf54f11b588bffd61dfdded06aa2a7479aff2590bf13cd9bde->leave($__internal_956b1612dd9c44cf54f11b588bffd61dfdded06aa2a7479aff2590bf13cd9bde_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa4ac6eefce5cf81caf235b3357b603fadabd36990e2a3bcf1258360696926a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4ac6eefce5cf81caf235b3357b603fadabd36990e2a3bcf1258360696926a4->enter($__internal_aa4ac6eefce5cf81caf235b3357b603fadabd36990e2a3bcf1258360696926a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ca8de4620a01af5bc15d791dcfcbb5f0a389fd373e131ee5566124be1a3c0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca8de4620a01af5bc15d791dcfcbb5f0a389fd373e131ee5566124be1a3c0d1->enter($__internal_7ca8de4620a01af5bc15d791dcfcbb5f0a389fd373e131ee5566124be1a3c0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ca8de4620a01af5bc15d791dcfcbb5f0a389fd373e131ee5566124be1a3c0d1->leave($__internal_7ca8de4620a01af5bc15d791dcfcbb5f0a389fd373e131ee5566124be1a3c0d1_prof);

        
        $__internal_aa4ac6eefce5cf81caf235b3357b603fadabd36990e2a3bcf1258360696926a4->leave($__internal_aa4ac6eefce5cf81caf235b3357b603fadabd36990e2a3bcf1258360696926a4_prof);

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
    <link rel=\"stylesheet\" href=\"{{ asset('css/main-min.css') }}\">
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
