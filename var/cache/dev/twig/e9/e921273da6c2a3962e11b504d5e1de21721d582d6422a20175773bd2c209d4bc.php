<?php

/* GSBPlatformBundle:part:header.html.twig */
class __TwigTemplate_b34e99ee36c2ea21e73eb2693f736d615144cfc6a86edbd7d1fb6c7047b6b807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page__name' => array($this, 'block_page__name'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe848c8b6e60f80a7fcbd084543e4baee74dc3f86887929cd9581fa2d8fc43db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe848c8b6e60f80a7fcbd084543e4baee74dc3f86887929cd9581fa2d8fc43db->enter($__internal_fe848c8b6e60f80a7fcbd084543e4baee74dc3f86887929cd9581fa2d8fc43db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:part:header.html.twig"));

        $__internal_38bccfb85f2737b0431545684bbaeaa1a22139905cdc6ffcdc3fe918c2b163f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bccfb85f2737b0431545684bbaeaa1a22139905cdc6ffcdc3fe918c2b163f8->enter($__internal_38bccfb85f2737b0431545684bbaeaa1a22139905cdc6ffcdc3fe918c2b163f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:part:header.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/header.css"), "html", null, true);
        echo "\">
<header>
    ";
        // line 3
        $this->displayBlock('page__name', $context, $blocks);
        // line 4
        echo "</header>";
        
        $__internal_fe848c8b6e60f80a7fcbd084543e4baee74dc3f86887929cd9581fa2d8fc43db->leave($__internal_fe848c8b6e60f80a7fcbd084543e4baee74dc3f86887929cd9581fa2d8fc43db_prof);

        
        $__internal_38bccfb85f2737b0431545684bbaeaa1a22139905cdc6ffcdc3fe918c2b163f8->leave($__internal_38bccfb85f2737b0431545684bbaeaa1a22139905cdc6ffcdc3fe918c2b163f8_prof);

    }

    // line 3
    public function block_page__name($context, array $blocks = array())
    {
        $__internal_645172bdd6b8d8689f7115cc5cf05e4691a10ae62877f0fb651609f7849ea35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645172bdd6b8d8689f7115cc5cf05e4691a10ae62877f0fb651609f7849ea35b->enter($__internal_645172bdd6b8d8689f7115cc5cf05e4691a10ae62877f0fb651609f7849ea35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page__name"));

        $__internal_9b030c069a44390bd37fd5e8e6f19dca5355a6d144d458f606562412b1b05841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b030c069a44390bd37fd5e8e6f19dca5355a6d144d458f606562412b1b05841->enter($__internal_9b030c069a44390bd37fd5e8e6f19dca5355a6d144d458f606562412b1b05841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page__name"));

        
        $__internal_9b030c069a44390bd37fd5e8e6f19dca5355a6d144d458f606562412b1b05841->leave($__internal_9b030c069a44390bd37fd5e8e6f19dca5355a6d144d458f606562412b1b05841_prof);

        
        $__internal_645172bdd6b8d8689f7115cc5cf05e4691a10ae62877f0fb651609f7849ea35b->leave($__internal_645172bdd6b8d8689f7115cc5cf05e4691a10ae62877f0fb651609f7849ea35b_prof);

    }

    public function getTemplateName()
    {
        return "GSBPlatformBundle:part:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  34 => 4,  32 => 3,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"{{ asset('css/header.css') }}\">
<header>
    {% block page__name %}{% endblock %}
</header>", "GSBPlatformBundle:part:header.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_SymfonyAlex/src/GSB/PlatformBundle/Resources/views/part/header.html.twig");
    }
}
