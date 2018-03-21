<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e618cb7995f70b5c98eba0696bbf33703bbeaf84f3a893c00ed5d657bd4b2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e618cb7995f70b5c98eba0696bbf33703bbeaf84f3a893c00ed5d657bd4b2f0->enter($__internal_2e618cb7995f70b5c98eba0696bbf33703bbeaf84f3a893c00ed5d657bd4b2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_de3b7b1de6d5eea3a91db00a43e122af540a9addf8996915fb163afa1e8693a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3b7b1de6d5eea3a91db00a43e122af540a9addf8996915fb163afa1e8693a7->enter($__internal_de3b7b1de6d5eea3a91db00a43e122af540a9addf8996915fb163afa1e8693a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e618cb7995f70b5c98eba0696bbf33703bbeaf84f3a893c00ed5d657bd4b2f0->leave($__internal_2e618cb7995f70b5c98eba0696bbf33703bbeaf84f3a893c00ed5d657bd4b2f0_prof);

        
        $__internal_de3b7b1de6d5eea3a91db00a43e122af540a9addf8996915fb163afa1e8693a7->leave($__internal_de3b7b1de6d5eea3a91db00a43e122af540a9addf8996915fb163afa1e8693a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37b908c96e68a3821e35a5ecbeca251634fe3ec4b2f5194e4c859daa82c01c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b908c96e68a3821e35a5ecbeca251634fe3ec4b2f5194e4c859daa82c01c82->enter($__internal_37b908c96e68a3821e35a5ecbeca251634fe3ec4b2f5194e4c859daa82c01c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e5d963798dfde342558e5ea164220dbd33200b2c6b4798ee28fcfcc57881546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5d963798dfde342558e5ea164220dbd33200b2c6b4798ee28fcfcc57881546->enter($__internal_6e5d963798dfde342558e5ea164220dbd33200b2c6b4798ee28fcfcc57881546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e5d963798dfde342558e5ea164220dbd33200b2c6b4798ee28fcfcc57881546->leave($__internal_6e5d963798dfde342558e5ea164220dbd33200b2c6b4798ee28fcfcc57881546_prof);

        
        $__internal_37b908c96e68a3821e35a5ecbeca251634fe3ec4b2f5194e4c859daa82c01c82->leave($__internal_37b908c96e68a3821e35a5ecbeca251634fe3ec4b2f5194e4c859daa82c01c82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27419b6ff06f803f19704c946ccd5879f979fe776135e66422a44b3e01560741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27419b6ff06f803f19704c946ccd5879f979fe776135e66422a44b3e01560741->enter($__internal_27419b6ff06f803f19704c946ccd5879f979fe776135e66422a44b3e01560741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b6464b1d722dab84e0709170c16e9d93479d945fc55e01757db0405922a3993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6464b1d722dab84e0709170c16e9d93479d945fc55e01757db0405922a3993->enter($__internal_8b6464b1d722dab84e0709170c16e9d93479d945fc55e01757db0405922a3993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b6464b1d722dab84e0709170c16e9d93479d945fc55e01757db0405922a3993->leave($__internal_8b6464b1d722dab84e0709170c16e9d93479d945fc55e01757db0405922a3993_prof);

        
        $__internal_27419b6ff06f803f19704c946ccd5879f979fe776135e66422a44b3e01560741->leave($__internal_27419b6ff06f803f19704c946ccd5879f979fe776135e66422a44b3e01560741_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c7e5800fc07212f3bcfde11b72b2873f9135ccac1968c7b9d662c871d49e1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7e5800fc07212f3bcfde11b72b2873f9135ccac1968c7b9d662c871d49e1c6->enter($__internal_3c7e5800fc07212f3bcfde11b72b2873f9135ccac1968c7b9d662c871d49e1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99817ea0e34384c38ab4a50e7164df35067fbcfc5cb85cb87dfdba1ac3a8e46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99817ea0e34384c38ab4a50e7164df35067fbcfc5cb85cb87dfdba1ac3a8e46a->enter($__internal_99817ea0e34384c38ab4a50e7164df35067fbcfc5cb85cb87dfdba1ac3a8e46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_99817ea0e34384c38ab4a50e7164df35067fbcfc5cb85cb87dfdba1ac3a8e46a->leave($__internal_99817ea0e34384c38ab4a50e7164df35067fbcfc5cb85cb87dfdba1ac3a8e46a_prof);

        
        $__internal_3c7e5800fc07212f3bcfde11b72b2873f9135ccac1968c7b9d662c871d49e1c6->leave($__internal_3c7e5800fc07212f3bcfde11b72b2873f9135ccac1968c7b9d662c871d49e1c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_SymfonyAlex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
