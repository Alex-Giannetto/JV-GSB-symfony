<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8bd5edbfd29f3e939e921db485e54e78eaf2ca2efc1a47455521b9c66b7017de extends Twig_Template
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
        $__internal_dea8b3ff9916fd2e0f0719074b54a0cdd9a5e4dd6e7960b8af73bb75a6452d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea8b3ff9916fd2e0f0719074b54a0cdd9a5e4dd6e7960b8af73bb75a6452d80->enter($__internal_dea8b3ff9916fd2e0f0719074b54a0cdd9a5e4dd6e7960b8af73bb75a6452d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_518fe2ea43063ce47865b290a2c762d448b84899f003879515b1f90885cf9d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518fe2ea43063ce47865b290a2c762d448b84899f003879515b1f90885cf9d15->enter($__internal_518fe2ea43063ce47865b290a2c762d448b84899f003879515b1f90885cf9d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea8b3ff9916fd2e0f0719074b54a0cdd9a5e4dd6e7960b8af73bb75a6452d80->leave($__internal_dea8b3ff9916fd2e0f0719074b54a0cdd9a5e4dd6e7960b8af73bb75a6452d80_prof);

        
        $__internal_518fe2ea43063ce47865b290a2c762d448b84899f003879515b1f90885cf9d15->leave($__internal_518fe2ea43063ce47865b290a2c762d448b84899f003879515b1f90885cf9d15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_645678b3d355b82934277b6ed1fa7a6385b55b67a144b96f778b1dbcc162aab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645678b3d355b82934277b6ed1fa7a6385b55b67a144b96f778b1dbcc162aab9->enter($__internal_645678b3d355b82934277b6ed1fa7a6385b55b67a144b96f778b1dbcc162aab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0a46729c9ebe0583175134e29d389fa4b67659c5db48867d394781fb1010c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a46729c9ebe0583175134e29d389fa4b67659c5db48867d394781fb1010c04->enter($__internal_e0a46729c9ebe0583175134e29d389fa4b67659c5db48867d394781fb1010c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e0a46729c9ebe0583175134e29d389fa4b67659c5db48867d394781fb1010c04->leave($__internal_e0a46729c9ebe0583175134e29d389fa4b67659c5db48867d394781fb1010c04_prof);

        
        $__internal_645678b3d355b82934277b6ed1fa7a6385b55b67a144b96f778b1dbcc162aab9->leave($__internal_645678b3d355b82934277b6ed1fa7a6385b55b67a144b96f778b1dbcc162aab9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08a0a084ea6c78ac615edc13363ee57521c7a05aa63af745c7fcedf3d50ac7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a0a084ea6c78ac615edc13363ee57521c7a05aa63af745c7fcedf3d50ac7d8->enter($__internal_08a0a084ea6c78ac615edc13363ee57521c7a05aa63af745c7fcedf3d50ac7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_25dee29db4cdc4fdcb297b3558dbe126d3ca1dc153d0b20d7009c9987ca39c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dee29db4cdc4fdcb297b3558dbe126d3ca1dc153d0b20d7009c9987ca39c66->enter($__internal_25dee29db4cdc4fdcb297b3558dbe126d3ca1dc153d0b20d7009c9987ca39c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_25dee29db4cdc4fdcb297b3558dbe126d3ca1dc153d0b20d7009c9987ca39c66->leave($__internal_25dee29db4cdc4fdcb297b3558dbe126d3ca1dc153d0b20d7009c9987ca39c66_prof);

        
        $__internal_08a0a084ea6c78ac615edc13363ee57521c7a05aa63af745c7fcedf3d50ac7d8->leave($__internal_08a0a084ea6c78ac615edc13363ee57521c7a05aa63af745c7fcedf3d50ac7d8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1044f0c0796b18882d959ec90a213a559baa83b5c9f82308d3f51c0b37a97f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1044f0c0796b18882d959ec90a213a559baa83b5c9f82308d3f51c0b37a97f50->enter($__internal_1044f0c0796b18882d959ec90a213a559baa83b5c9f82308d3f51c0b37a97f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bbe0052e61196da9f90d18d3b5baa0539a923d220060711d200d25894e78b751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe0052e61196da9f90d18d3b5baa0539a923d220060711d200d25894e78b751->enter($__internal_bbe0052e61196da9f90d18d3b5baa0539a923d220060711d200d25894e78b751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bbe0052e61196da9f90d18d3b5baa0539a923d220060711d200d25894e78b751->leave($__internal_bbe0052e61196da9f90d18d3b5baa0539a923d220060711d200d25894e78b751_prof);

        
        $__internal_1044f0c0796b18882d959ec90a213a559baa83b5c9f82308d3f51c0b37a97f50->leave($__internal_1044f0c0796b18882d959ec90a213a559baa83b5c9f82308d3f51c0b37a97f50_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
