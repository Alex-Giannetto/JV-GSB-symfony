<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_de7c9b3f820e3da97bc82d5e676c6c0673cf120645d11b6dc58da939415e3bd5 extends Twig_Template
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
        $__internal_7b5c6f91ce9e6ac8ecfbe05d849c4f9cc97e076a316468b0ef4a39e17e23f728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5c6f91ce9e6ac8ecfbe05d849c4f9cc97e076a316468b0ef4a39e17e23f728->enter($__internal_7b5c6f91ce9e6ac8ecfbe05d849c4f9cc97e076a316468b0ef4a39e17e23f728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_10e8ecce0fa264b0f8501a522bed3b33169388162b725fb38f223fa3af8e6e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e8ecce0fa264b0f8501a522bed3b33169388162b725fb38f223fa3af8e6e7b->enter($__internal_10e8ecce0fa264b0f8501a522bed3b33169388162b725fb38f223fa3af8e6e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5c6f91ce9e6ac8ecfbe05d849c4f9cc97e076a316468b0ef4a39e17e23f728->leave($__internal_7b5c6f91ce9e6ac8ecfbe05d849c4f9cc97e076a316468b0ef4a39e17e23f728_prof);

        
        $__internal_10e8ecce0fa264b0f8501a522bed3b33169388162b725fb38f223fa3af8e6e7b->leave($__internal_10e8ecce0fa264b0f8501a522bed3b33169388162b725fb38f223fa3af8e6e7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5d9ef8196852d1a36c15f171e90302065aee26446167ccf7e0aa7d70d22de39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d9ef8196852d1a36c15f171e90302065aee26446167ccf7e0aa7d70d22de39->enter($__internal_e5d9ef8196852d1a36c15f171e90302065aee26446167ccf7e0aa7d70d22de39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_575b0322490a14bbd0d2ad9101838ac831aee3c75cf570a35671e044df4b59b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575b0322490a14bbd0d2ad9101838ac831aee3c75cf570a35671e044df4b59b1->enter($__internal_575b0322490a14bbd0d2ad9101838ac831aee3c75cf570a35671e044df4b59b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_575b0322490a14bbd0d2ad9101838ac831aee3c75cf570a35671e044df4b59b1->leave($__internal_575b0322490a14bbd0d2ad9101838ac831aee3c75cf570a35671e044df4b59b1_prof);

        
        $__internal_e5d9ef8196852d1a36c15f171e90302065aee26446167ccf7e0aa7d70d22de39->leave($__internal_e5d9ef8196852d1a36c15f171e90302065aee26446167ccf7e0aa7d70d22de39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5340ac1772ec40271ab2b0f35091748705be80c2fdaba93aa127d1e1a83c56db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5340ac1772ec40271ab2b0f35091748705be80c2fdaba93aa127d1e1a83c56db->enter($__internal_5340ac1772ec40271ab2b0f35091748705be80c2fdaba93aa127d1e1a83c56db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b19121de2c936d6fa4cae6eb7a817fca9fa94889736ce0f937b21a39797e8896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19121de2c936d6fa4cae6eb7a817fca9fa94889736ce0f937b21a39797e8896->enter($__internal_b19121de2c936d6fa4cae6eb7a817fca9fa94889736ce0f937b21a39797e8896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b19121de2c936d6fa4cae6eb7a817fca9fa94889736ce0f937b21a39797e8896->leave($__internal_b19121de2c936d6fa4cae6eb7a817fca9fa94889736ce0f937b21a39797e8896_prof);

        
        $__internal_5340ac1772ec40271ab2b0f35091748705be80c2fdaba93aa127d1e1a83c56db->leave($__internal_5340ac1772ec40271ab2b0f35091748705be80c2fdaba93aa127d1e1a83c56db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf2bd198000b42af50e1c70f8c70e7e874968ce15bf4fab28431c55252ff8a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2bd198000b42af50e1c70f8c70e7e874968ce15bf4fab28431c55252ff8a17->enter($__internal_bf2bd198000b42af50e1c70f8c70e7e874968ce15bf4fab28431c55252ff8a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ac5dac9fde8633c3cab4df1a2cb52f1fb36a3b6bd4bd407212b18df8e7c6ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac5dac9fde8633c3cab4df1a2cb52f1fb36a3b6bd4bd407212b18df8e7c6ed8->enter($__internal_0ac5dac9fde8633c3cab4df1a2cb52f1fb36a3b6bd4bd407212b18df8e7c6ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ac5dac9fde8633c3cab4df1a2cb52f1fb36a3b6bd4bd407212b18df8e7c6ed8->leave($__internal_0ac5dac9fde8633c3cab4df1a2cb52f1fb36a3b6bd4bd407212b18df8e7c6ed8_prof);

        
        $__internal_bf2bd198000b42af50e1c70f8c70e7e874968ce15bf4fab28431c55252ff8a17->leave($__internal_bf2bd198000b42af50e1c70f8c70e7e874968ce15bf4fab28431c55252ff8a17_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
