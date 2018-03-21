<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4a16af1f828bb307c5395975d683a120f18e05dae8931d0a6766d2890f45acbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a16af1f828bb307c5395975d683a120f18e05dae8931d0a6766d2890f45acbc->enter($__internal_4a16af1f828bb307c5395975d683a120f18e05dae8931d0a6766d2890f45acbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a47a7ea6dde7630aea4b88a4494829736557d3ccd84023048493d4ea14706221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47a7ea6dde7630aea4b88a4494829736557d3ccd84023048493d4ea14706221->enter($__internal_a47a7ea6dde7630aea4b88a4494829736557d3ccd84023048493d4ea14706221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a16af1f828bb307c5395975d683a120f18e05dae8931d0a6766d2890f45acbc->leave($__internal_4a16af1f828bb307c5395975d683a120f18e05dae8931d0a6766d2890f45acbc_prof);

        
        $__internal_a47a7ea6dde7630aea4b88a4494829736557d3ccd84023048493d4ea14706221->leave($__internal_a47a7ea6dde7630aea4b88a4494829736557d3ccd84023048493d4ea14706221_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43bce46cf8e42b66ec9a7d7cb3b5986b546a0038ff8e93c80a0755483db44dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43bce46cf8e42b66ec9a7d7cb3b5986b546a0038ff8e93c80a0755483db44dfd->enter($__internal_43bce46cf8e42b66ec9a7d7cb3b5986b546a0038ff8e93c80a0755483db44dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c3bad33c159144f14f288a7a7bc8c4334f221fe9c68a3a349a4c9ba7f9f2fc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bad33c159144f14f288a7a7bc8c4334f221fe9c68a3a349a4c9ba7f9f2fc0b->enter($__internal_c3bad33c159144f14f288a7a7bc8c4334f221fe9c68a3a349a4c9ba7f9f2fc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c3bad33c159144f14f288a7a7bc8c4334f221fe9c68a3a349a4c9ba7f9f2fc0b->leave($__internal_c3bad33c159144f14f288a7a7bc8c4334f221fe9c68a3a349a4c9ba7f9f2fc0b_prof);

        
        $__internal_43bce46cf8e42b66ec9a7d7cb3b5986b546a0038ff8e93c80a0755483db44dfd->leave($__internal_43bce46cf8e42b66ec9a7d7cb3b5986b546a0038ff8e93c80a0755483db44dfd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b1d21de38729eaacace8ae0ec5e502f88a1643c49d84a60de1c4e74e966ba92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1d21de38729eaacace8ae0ec5e502f88a1643c49d84a60de1c4e74e966ba92->enter($__internal_6b1d21de38729eaacace8ae0ec5e502f88a1643c49d84a60de1c4e74e966ba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54442ee2ff0fc66c768471e63e45b44d3a8042cf2362d6537580f04c4ebea1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54442ee2ff0fc66c768471e63e45b44d3a8042cf2362d6537580f04c4ebea1d9->enter($__internal_54442ee2ff0fc66c768471e63e45b44d3a8042cf2362d6537580f04c4ebea1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_54442ee2ff0fc66c768471e63e45b44d3a8042cf2362d6537580f04c4ebea1d9->leave($__internal_54442ee2ff0fc66c768471e63e45b44d3a8042cf2362d6537580f04c4ebea1d9_prof);

        
        $__internal_6b1d21de38729eaacace8ae0ec5e502f88a1643c49d84a60de1c4e74e966ba92->leave($__internal_6b1d21de38729eaacace8ae0ec5e502f88a1643c49d84a60de1c4e74e966ba92_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_262ae774c5a47959d5060afe45474636a2c1521e596258bdcc5cc8da8ac72336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262ae774c5a47959d5060afe45474636a2c1521e596258bdcc5cc8da8ac72336->enter($__internal_262ae774c5a47959d5060afe45474636a2c1521e596258bdcc5cc8da8ac72336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2668c82d3586a0e86f09d44acc9f8d42020e5a22d3d3e501b89540b78fd47046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2668c82d3586a0e86f09d44acc9f8d42020e5a22d3d3e501b89540b78fd47046->enter($__internal_2668c82d3586a0e86f09d44acc9f8d42020e5a22d3d3e501b89540b78fd47046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2668c82d3586a0e86f09d44acc9f8d42020e5a22d3d3e501b89540b78fd47046->leave($__internal_2668c82d3586a0e86f09d44acc9f8d42020e5a22d3d3e501b89540b78fd47046_prof);

        
        $__internal_262ae774c5a47959d5060afe45474636a2c1521e596258bdcc5cc8da8ac72336->leave($__internal_262ae774c5a47959d5060afe45474636a2c1521e596258bdcc5cc8da8ac72336_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_SymfonyAlex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
