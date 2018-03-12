<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ee38b5059b5f1c07f36908c21120aee5804c8b4b2d64f2165fbccaf4aae1cd56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0fc220711fa02d52db15b8ab3f016c7272b24e9c29bb3b76e1124e216c80e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fc220711fa02d52db15b8ab3f016c7272b24e9c29bb3b76e1124e216c80e0a->enter($__internal_d0fc220711fa02d52db15b8ab3f016c7272b24e9c29bb3b76e1124e216c80e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b14c9dbac96241d52292f4ec015033cd4ce0f7c268429523f6888df7049d8858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14c9dbac96241d52292f4ec015033cd4ce0f7c268429523f6888df7049d8858->enter($__internal_b14c9dbac96241d52292f4ec015033cd4ce0f7c268429523f6888df7049d8858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0fc220711fa02d52db15b8ab3f016c7272b24e9c29bb3b76e1124e216c80e0a->leave($__internal_d0fc220711fa02d52db15b8ab3f016c7272b24e9c29bb3b76e1124e216c80e0a_prof);

        
        $__internal_b14c9dbac96241d52292f4ec015033cd4ce0f7c268429523f6888df7049d8858->leave($__internal_b14c9dbac96241d52292f4ec015033cd4ce0f7c268429523f6888df7049d8858_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b4209f51f2fdcde06283509ae5e994bea70d180ae27bfed36bd7eb48c231e7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4209f51f2fdcde06283509ae5e994bea70d180ae27bfed36bd7eb48c231e7a8->enter($__internal_b4209f51f2fdcde06283509ae5e994bea70d180ae27bfed36bd7eb48c231e7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae238378811f3a0ef2d6dbf0827dc76f1f99a73481159f8c8889ca752630ef07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae238378811f3a0ef2d6dbf0827dc76f1f99a73481159f8c8889ca752630ef07->enter($__internal_ae238378811f3a0ef2d6dbf0827dc76f1f99a73481159f8c8889ca752630ef07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ae238378811f3a0ef2d6dbf0827dc76f1f99a73481159f8c8889ca752630ef07->leave($__internal_ae238378811f3a0ef2d6dbf0827dc76f1f99a73481159f8c8889ca752630ef07_prof);

        
        $__internal_b4209f51f2fdcde06283509ae5e994bea70d180ae27bfed36bd7eb48c231e7a8->leave($__internal_b4209f51f2fdcde06283509ae5e994bea70d180ae27bfed36bd7eb48c231e7a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
