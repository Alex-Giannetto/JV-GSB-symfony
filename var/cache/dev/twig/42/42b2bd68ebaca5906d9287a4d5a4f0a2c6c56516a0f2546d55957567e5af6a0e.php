<?php

/* ::base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
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
        $__internal_b0a537f9e0213030158e89cd0641c7e75bbc7575a076c474e1237b4460d61c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a537f9e0213030158e89cd0641c7e75bbc7575a076c474e1237b4460d61c7b->enter($__internal_b0a537f9e0213030158e89cd0641c7e75bbc7575a076c474e1237b4460d61c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_82507c59f594ae7b9bbd4d6e57ec2d4eb052cb5c27bd897735ce0a44d5c914df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82507c59f594ae7b9bbd4d6e57ec2d4eb052cb5c27bd897735ce0a44d5c914df->enter($__internal_82507c59f594ae7b9bbd4d6e57ec2d4eb052cb5c27bd897735ce0a44d5c914df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b0a537f9e0213030158e89cd0641c7e75bbc7575a076c474e1237b4460d61c7b->leave($__internal_b0a537f9e0213030158e89cd0641c7e75bbc7575a076c474e1237b4460d61c7b_prof);

        
        $__internal_82507c59f594ae7b9bbd4d6e57ec2d4eb052cb5c27bd897735ce0a44d5c914df->leave($__internal_82507c59f594ae7b9bbd4d6e57ec2d4eb052cb5c27bd897735ce0a44d5c914df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fff27841b318f55a2bdbbce8493572600a2ebaf7809667c8a40650810849004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fff27841b318f55a2bdbbce8493572600a2ebaf7809667c8a40650810849004->enter($__internal_2fff27841b318f55a2bdbbce8493572600a2ebaf7809667c8a40650810849004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd542f4bb7a9d9cf059e76691eef7aa00c201e6a0169655ea5410eba87e38b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd542f4bb7a9d9cf059e76691eef7aa00c201e6a0169655ea5410eba87e38b69->enter($__internal_dd542f4bb7a9d9cf059e76691eef7aa00c201e6a0169655ea5410eba87e38b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dd542f4bb7a9d9cf059e76691eef7aa00c201e6a0169655ea5410eba87e38b69->leave($__internal_dd542f4bb7a9d9cf059e76691eef7aa00c201e6a0169655ea5410eba87e38b69_prof);

        
        $__internal_2fff27841b318f55a2bdbbce8493572600a2ebaf7809667c8a40650810849004->leave($__internal_2fff27841b318f55a2bdbbce8493572600a2ebaf7809667c8a40650810849004_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dd92e3c25e03ff225acd22d2651cd48a4450b1cba5e08c4447098cc7341b552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd92e3c25e03ff225acd22d2651cd48a4450b1cba5e08c4447098cc7341b552->enter($__internal_7dd92e3c25e03ff225acd22d2651cd48a4450b1cba5e08c4447098cc7341b552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7349c433334a39e9bd7053c85c1e17c53b9a4fe91325a4871338bd07658540bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7349c433334a39e9bd7053c85c1e17c53b9a4fe91325a4871338bd07658540bf->enter($__internal_7349c433334a39e9bd7053c85c1e17c53b9a4fe91325a4871338bd07658540bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7349c433334a39e9bd7053c85c1e17c53b9a4fe91325a4871338bd07658540bf->leave($__internal_7349c433334a39e9bd7053c85c1e17c53b9a4fe91325a4871338bd07658540bf_prof);

        
        $__internal_7dd92e3c25e03ff225acd22d2651cd48a4450b1cba5e08c4447098cc7341b552->leave($__internal_7dd92e3c25e03ff225acd22d2651cd48a4450b1cba5e08c4447098cc7341b552_prof);

    }

    // line 24
    public function block_nomPage($context, array $blocks = array())
    {
        $__internal_d3f27dba3468acc2055b9ba6c45f4f2b5dd73cc861755548ad75be2928fae87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f27dba3468acc2055b9ba6c45f4f2b5dd73cc861755548ad75be2928fae87c->enter($__internal_d3f27dba3468acc2055b9ba6c45f4f2b5dd73cc861755548ad75be2928fae87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        $__internal_318336578b49df09dd9655634643778076d5d0075c23f6a35d8745387f96a44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318336578b49df09dd9655634643778076d5d0075c23f6a35d8745387f96a44b->enter($__internal_318336578b49df09dd9655634643778076d5d0075c23f6a35d8745387f96a44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        
        $__internal_318336578b49df09dd9655634643778076d5d0075c23f6a35d8745387f96a44b->leave($__internal_318336578b49df09dd9655634643778076d5d0075c23f6a35d8745387f96a44b_prof);

        
        $__internal_d3f27dba3468acc2055b9ba6c45f4f2b5dd73cc861755548ad75be2928fae87c->leave($__internal_d3f27dba3468acc2055b9ba6c45f4f2b5dd73cc861755548ad75be2928fae87c_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_80f758b40d83db524635ecec0f3ecdf49899b64ea868d69bd8534a14ed1ac309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f758b40d83db524635ecec0f3ecdf49899b64ea868d69bd8534a14ed1ac309->enter($__internal_80f758b40d83db524635ecec0f3ecdf49899b64ea868d69bd8534a14ed1ac309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d45084e33060aea0244b9942c25cded642545fafc202b1e50883455398500ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45084e33060aea0244b9942c25cded642545fafc202b1e50883455398500ac3->enter($__internal_d45084e33060aea0244b9942c25cded642545fafc202b1e50883455398500ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d45084e33060aea0244b9942c25cded642545fafc202b1e50883455398500ac3->leave($__internal_d45084e33060aea0244b9942c25cded642545fafc202b1e50883455398500ac3_prof);

        
        $__internal_80f758b40d83db524635ecec0f3ecdf49899b64ea868d69bd8534a14ed1ac309->leave($__internal_80f758b40d83db524635ecec0f3ecdf49899b64ea868d69bd8534a14ed1ac309_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9dbd6adb77a15ff2207d09b01842fb8436d527257341f4136b14376217621b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9dbd6adb77a15ff2207d09b01842fb8436d527257341f4136b14376217621b1->enter($__internal_c9dbd6adb77a15ff2207d09b01842fb8436d527257341f4136b14376217621b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14fd8aade229e50b2e53d4912ad6dd69218ac4da588495e838381cb5aa0e3b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fd8aade229e50b2e53d4912ad6dd69218ac4da588495e838381cb5aa0e3b19->enter($__internal_14fd8aade229e50b2e53d4912ad6dd69218ac4da588495e838381cb5aa0e3b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_14fd8aade229e50b2e53d4912ad6dd69218ac4da588495e838381cb5aa0e3b19->leave($__internal_14fd8aade229e50b2e53d4912ad6dd69218ac4da588495e838381cb5aa0e3b19_prof);

        
        $__internal_c9dbd6adb77a15ff2207d09b01842fb8436d527257341f4136b14376217621b1->leave($__internal_c9dbd6adb77a15ff2207d09b01842fb8436d527257341f4136b14376217621b1_prof);

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
