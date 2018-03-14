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
        $__internal_99df64e28b87176f1d259b0289ee0d9c17c140b130e0304e7783f6e0bfb4492e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99df64e28b87176f1d259b0289ee0d9c17c140b130e0304e7783f6e0bfb4492e->enter($__internal_99df64e28b87176f1d259b0289ee0d9c17c140b130e0304e7783f6e0bfb4492e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bec166ce870912f6ec9ba633d03a0eaa4054c92408dad63983f281acc2584866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec166ce870912f6ec9ba633d03a0eaa4054c92408dad63983f281acc2584866->enter($__internal_bec166ce870912f6ec9ba633d03a0eaa4054c92408dad63983f281acc2584866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        ";
        // line 14
        $context["route"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method");
        // line 15
        echo "
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_platform_homepage");
        echo "\" class=\"nav__menu__element nav__menu__element--title link--active\">Galaxy Swiss Bourdin</a>

        <a href=\"";
        // line 18
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
        // line 27
        $this->displayBlock('nomPage', $context, $blocks);
        // line 28
        echo "    </div>
</header>

<div class=\"card\">
    ";
        // line 32
        $this->displayBlock('card', $context, $blocks);
        // line 33
        echo "</div>
";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "</body>
</html>
";
        
        $__internal_99df64e28b87176f1d259b0289ee0d9c17c140b130e0304e7783f6e0bfb4492e->leave($__internal_99df64e28b87176f1d259b0289ee0d9c17c140b130e0304e7783f6e0bfb4492e_prof);

        
        $__internal_bec166ce870912f6ec9ba633d03a0eaa4054c92408dad63983f281acc2584866->leave($__internal_bec166ce870912f6ec9ba633d03a0eaa4054c92408dad63983f281acc2584866_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8acc4bb9d78b9de6cf0aa6a9b84040bee54c003a3d49e340babe38ddac8f021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8acc4bb9d78b9de6cf0aa6a9b84040bee54c003a3d49e340babe38ddac8f021->enter($__internal_d8acc4bb9d78b9de6cf0aa6a9b84040bee54c003a3d49e340babe38ddac8f021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f54df6f6ad67455cedaeef65edbd79eb08e670ca623d83fb29e156f263f3f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f54df6f6ad67455cedaeef65edbd79eb08e670ca623d83fb29e156f263f3f4a->enter($__internal_3f54df6f6ad67455cedaeef65edbd79eb08e670ca623d83fb29e156f263f3f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3f54df6f6ad67455cedaeef65edbd79eb08e670ca623d83fb29e156f263f3f4a->leave($__internal_3f54df6f6ad67455cedaeef65edbd79eb08e670ca623d83fb29e156f263f3f4a_prof);

        
        $__internal_d8acc4bb9d78b9de6cf0aa6a9b84040bee54c003a3d49e340babe38ddac8f021->leave($__internal_d8acc4bb9d78b9de6cf0aa6a9b84040bee54c003a3d49e340babe38ddac8f021_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef087bde711d41840607a0af8c0e2c41cc82e18aece18f7dbde690790826d6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef087bde711d41840607a0af8c0e2c41cc82e18aece18f7dbde690790826d6a9->enter($__internal_ef087bde711d41840607a0af8c0e2c41cc82e18aece18f7dbde690790826d6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9386f9c37733da40f6c2f1c92cc3050177eafbc8a1a3d9e7c0f49e6a85deeb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9386f9c37733da40f6c2f1c92cc3050177eafbc8a1a3d9e7c0f49e6a85deeb91->enter($__internal_9386f9c37733da40f6c2f1c92cc3050177eafbc8a1a3d9e7c0f49e6a85deeb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9386f9c37733da40f6c2f1c92cc3050177eafbc8a1a3d9e7c0f49e6a85deeb91->leave($__internal_9386f9c37733da40f6c2f1c92cc3050177eafbc8a1a3d9e7c0f49e6a85deeb91_prof);

        
        $__internal_ef087bde711d41840607a0af8c0e2c41cc82e18aece18f7dbde690790826d6a9->leave($__internal_ef087bde711d41840607a0af8c0e2c41cc82e18aece18f7dbde690790826d6a9_prof);

    }

    // line 27
    public function block_nomPage($context, array $blocks = array())
    {
        $__internal_e0865222072e6a4f77e3294ea17fcd04aeed3ce5f9ed46556885405f871d401c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0865222072e6a4f77e3294ea17fcd04aeed3ce5f9ed46556885405f871d401c->enter($__internal_e0865222072e6a4f77e3294ea17fcd04aeed3ce5f9ed46556885405f871d401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        $__internal_ceb168619a70d80c415e0813532c4c30e4a8e18b9b41b7f49702a497a10b7533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb168619a70d80c415e0813532c4c30e4a8e18b9b41b7f49702a497a10b7533->enter($__internal_ceb168619a70d80c415e0813532c4c30e4a8e18b9b41b7f49702a497a10b7533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        
        $__internal_ceb168619a70d80c415e0813532c4c30e4a8e18b9b41b7f49702a497a10b7533->leave($__internal_ceb168619a70d80c415e0813532c4c30e4a8e18b9b41b7f49702a497a10b7533_prof);

        
        $__internal_e0865222072e6a4f77e3294ea17fcd04aeed3ce5f9ed46556885405f871d401c->leave($__internal_e0865222072e6a4f77e3294ea17fcd04aeed3ce5f9ed46556885405f871d401c_prof);

    }

    // line 32
    public function block_card($context, array $blocks = array())
    {
        $__internal_6c79d5c096e079a4fd0fea8e46cf72d4b9eafdfdc1706eb945a46e85556df33d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c79d5c096e079a4fd0fea8e46cf72d4b9eafdfdc1706eb945a46e85556df33d->enter($__internal_6c79d5c096e079a4fd0fea8e46cf72d4b9eafdfdc1706eb945a46e85556df33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        $__internal_57b9a5a91dc7799a9ff81f58a58227803b8d12012885358f3611ac87e1432540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b9a5a91dc7799a9ff81f58a58227803b8d12012885358f3611ac87e1432540->enter($__internal_57b9a5a91dc7799a9ff81f58a58227803b8d12012885358f3611ac87e1432540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        
        $__internal_57b9a5a91dc7799a9ff81f58a58227803b8d12012885358f3611ac87e1432540->leave($__internal_57b9a5a91dc7799a9ff81f58a58227803b8d12012885358f3611ac87e1432540_prof);

        
        $__internal_6c79d5c096e079a4fd0fea8e46cf72d4b9eafdfdc1706eb945a46e85556df33d->leave($__internal_6c79d5c096e079a4fd0fea8e46cf72d4b9eafdfdc1706eb945a46e85556df33d_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_18f0d81fea2ebcbafe4483da306817ddeb03929025647460ef2b248fc8732465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f0d81fea2ebcbafe4483da306817ddeb03929025647460ef2b248fc8732465->enter($__internal_18f0d81fea2ebcbafe4483da306817ddeb03929025647460ef2b248fc8732465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7334cc643a36d36fd9345b99a0cbb1afd69bb8799921725055ee351fd176afb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7334cc643a36d36fd9345b99a0cbb1afd69bb8799921725055ee351fd176afb9->enter($__internal_7334cc643a36d36fd9345b99a0cbb1afd69bb8799921725055ee351fd176afb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7334cc643a36d36fd9345b99a0cbb1afd69bb8799921725055ee351fd176afb9->leave($__internal_7334cc643a36d36fd9345b99a0cbb1afd69bb8799921725055ee351fd176afb9_prof);

        
        $__internal_18f0d81fea2ebcbafe4483da306817ddeb03929025647460ef2b248fc8732465->leave($__internal_18f0d81fea2ebcbafe4483da306817ddeb03929025647460ef2b248fc8732465_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4685dc2a218fc20b4084888882b984b3aaa658653639ddf59a445ef77a602af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4685dc2a218fc20b4084888882b984b3aaa658653639ddf59a445ef77a602af0->enter($__internal_4685dc2a218fc20b4084888882b984b3aaa658653639ddf59a445ef77a602af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_04846fe139788401d64866ff96ac5667735b92eb47a5b95fb9ae669e1d87b53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04846fe139788401d64866ff96ac5667735b92eb47a5b95fb9ae669e1d87b53c->enter($__internal_04846fe139788401d64866ff96ac5667735b92eb47a5b95fb9ae669e1d87b53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_04846fe139788401d64866ff96ac5667735b92eb47a5b95fb9ae669e1d87b53c->leave($__internal_04846fe139788401d64866ff96ac5667735b92eb47a5b95fb9ae669e1d87b53c_prof);

        
        $__internal_4685dc2a218fc20b4084888882b984b3aaa658653639ddf59a445ef77a602af0->leave($__internal_4685dc2a218fc20b4084888882b984b3aaa658653639ddf59a445ef77a602af0_prof);

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
        return array (  196 => 36,  179 => 34,  162 => 32,  145 => 27,  128 => 6,  111 => 5,  99 => 37,  97 => 36,  94 => 35,  92 => 34,  89 => 33,  87 => 32,  81 => 28,  79 => 27,  67 => 18,  62 => 16,  59 => 15,  57 => 14,  48 => 8,  43 => 7,  41 => 6,  37 => 5,  31 => 1,);
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
        {% set route = app.request.get('_route') %}

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
</body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_SymfonyAlex/app/Resources/views/base.html.twig");
    }
}
