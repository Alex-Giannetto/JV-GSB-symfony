<?php

/* base.html.twig */
class __TwigTemplate_84c4c96af16d0a6477c1cd3c65932c32613cd8d8fe91947d48bc4b7057c60a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91024ceb3cc0c7765c3af861deade7f5897904130071ade4e856162786e896f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91024ceb3cc0c7765c3af861deade7f5897904130071ade4e856162786e896f5->enter($__internal_91024ceb3cc0c7765c3af861deade7f5897904130071ade4e856162786e896f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bd7c1b2b4c519024300b4ce9bbd5b8257e19cfab7e5cbb73df9ec10f2006d60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7c1b2b4c519024300b4ce9bbd5b8257e19cfab7e5cbb73df9ec10f2006d60c->enter($__internal_bd7c1b2b4c519024300b4ce9bbd5b8257e19cfab7e5cbb73df9ec10f2006d60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_91024ceb3cc0c7765c3af861deade7f5897904130071ade4e856162786e896f5->leave($__internal_91024ceb3cc0c7765c3af861deade7f5897904130071ade4e856162786e896f5_prof);

        
        $__internal_bd7c1b2b4c519024300b4ce9bbd5b8257e19cfab7e5cbb73df9ec10f2006d60c->leave($__internal_bd7c1b2b4c519024300b4ce9bbd5b8257e19cfab7e5cbb73df9ec10f2006d60c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceeae7be82313986c02b3740ccfad3f249509249d9797ecc8a89f77f0363cb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceeae7be82313986c02b3740ccfad3f249509249d9797ecc8a89f77f0363cb30->enter($__internal_ceeae7be82313986c02b3740ccfad3f249509249d9797ecc8a89f77f0363cb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_abcfdd26140f49051994569bbfa432ecc6f107c1299bafef83cbf5983a8b5b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcfdd26140f49051994569bbfa432ecc6f107c1299bafef83cbf5983a8b5b62->enter($__internal_abcfdd26140f49051994569bbfa432ecc6f107c1299bafef83cbf5983a8b5b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_abcfdd26140f49051994569bbfa432ecc6f107c1299bafef83cbf5983a8b5b62->leave($__internal_abcfdd26140f49051994569bbfa432ecc6f107c1299bafef83cbf5983a8b5b62_prof);

        
        $__internal_ceeae7be82313986c02b3740ccfad3f249509249d9797ecc8a89f77f0363cb30->leave($__internal_ceeae7be82313986c02b3740ccfad3f249509249d9797ecc8a89f77f0363cb30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ceb2295ce3fdb5792a54359d019520efa71ac2facb1530146bdcf6d4171c634f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb2295ce3fdb5792a54359d019520efa71ac2facb1530146bdcf6d4171c634f->enter($__internal_ceb2295ce3fdb5792a54359d019520efa71ac2facb1530146bdcf6d4171c634f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a40f2db32919259a368d2f7eb49431fab0ef90f65dcc485e1347eceefc7f58ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40f2db32919259a368d2f7eb49431fab0ef90f65dcc485e1347eceefc7f58ad->enter($__internal_a40f2db32919259a368d2f7eb49431fab0ef90f65dcc485e1347eceefc7f58ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a40f2db32919259a368d2f7eb49431fab0ef90f65dcc485e1347eceefc7f58ad->leave($__internal_a40f2db32919259a368d2f7eb49431fab0ef90f65dcc485e1347eceefc7f58ad_prof);

        
        $__internal_ceb2295ce3fdb5792a54359d019520efa71ac2facb1530146bdcf6d4171c634f->leave($__internal_ceb2295ce3fdb5792a54359d019520efa71ac2facb1530146bdcf6d4171c634f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffa1084e6be94620fe0e81cca0a10fe263073e574a20285e6cfe17afe4eaaf5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa1084e6be94620fe0e81cca0a10fe263073e574a20285e6cfe17afe4eaaf5c->enter($__internal_ffa1084e6be94620fe0e81cca0a10fe263073e574a20285e6cfe17afe4eaaf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_784ef1757ffbcf86c88e701530a74b8544af12d62cf64cd81802a92f298ca483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784ef1757ffbcf86c88e701530a74b8544af12d62cf64cd81802a92f298ca483->enter($__internal_784ef1757ffbcf86c88e701530a74b8544af12d62cf64cd81802a92f298ca483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_784ef1757ffbcf86c88e701530a74b8544af12d62cf64cd81802a92f298ca483->leave($__internal_784ef1757ffbcf86c88e701530a74b8544af12d62cf64cd81802a92f298ca483_prof);

        
        $__internal_ffa1084e6be94620fe0e81cca0a10fe263073e574a20285e6cfe17afe4eaaf5c->leave($__internal_ffa1084e6be94620fe0e81cca0a10fe263073e574a20285e6cfe17afe4eaaf5c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c4e8aa37a9bdf033ee828d3ed47fad0bc6670150e1950073779fedde8e59e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4e8aa37a9bdf033ee828d3ed47fad0bc6670150e1950073779fedde8e59e5c->enter($__internal_7c4e8aa37a9bdf033ee828d3ed47fad0bc6670150e1950073779fedde8e59e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_13e7c447d44f1d54946b810003c8707a337e8bd307a4ab9fff6d85b9bf6c60e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e7c447d44f1d54946b810003c8707a337e8bd307a4ab9fff6d85b9bf6c60e5->enter($__internal_13e7c447d44f1d54946b810003c8707a337e8bd307a4ab9fff6d85b9bf6c60e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13e7c447d44f1d54946b810003c8707a337e8bd307a4ab9fff6d85b9bf6c60e5->leave($__internal_13e7c447d44f1d54946b810003c8707a337e8bd307a4ab9fff6d85b9bf6c60e5_prof);

        
        $__internal_7c4e8aa37a9bdf033ee828d3ed47fad0bc6670150e1950073779fedde8e59e5c->leave($__internal_7c4e8aa37a9bdf033ee828d3ed47fad0bc6670150e1950073779fedde8e59e5c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_Symfony/app/Resources/views/base.html.twig");
    }
}
