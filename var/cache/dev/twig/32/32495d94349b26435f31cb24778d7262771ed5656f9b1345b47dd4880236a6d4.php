<?php

/* GSBPlatformBundle::layout.html.twig */
class __TwigTemplate_b0b9762800f59e2843be02a4670cbbcb682ef6ff7e5c5ed4df9effebf370a820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSBPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89e50471ff6332e41b59c7eea3ea5959f382b26d7ea2d7cabf26cb2a70c77858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e50471ff6332e41b59c7eea3ea5959f382b26d7ea2d7cabf26cb2a70c77858->enter($__internal_89e50471ff6332e41b59c7eea3ea5959f382b26d7ea2d7cabf26cb2a70c77858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle::layout.html.twig"));

        $__internal_cfd5b121a95127ddae351950ca30726089a707c945f21f8e7754efa5e91c343b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd5b121a95127ddae351950ca30726089a707c945f21f8e7754efa5e91c343b->enter($__internal_cfd5b121a95127ddae351950ca30726089a707c945f21f8e7754efa5e91c343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e50471ff6332e41b59c7eea3ea5959f382b26d7ea2d7cabf26cb2a70c77858->leave($__internal_89e50471ff6332e41b59c7eea3ea5959f382b26d7ea2d7cabf26cb2a70c77858_prof);

        
        $__internal_cfd5b121a95127ddae351950ca30726089a707c945f21f8e7754efa5e91c343b->leave($__internal_cfd5b121a95127ddae351950ca30726089a707c945f21f8e7754efa5e91c343b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_654d7fee6b12518a4eb17621e821da07a715969b96e16ea320e240b7a80f1233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654d7fee6b12518a4eb17621e821da07a715969b96e16ea320e240b7a80f1233->enter($__internal_654d7fee6b12518a4eb17621e821da07a715969b96e16ea320e240b7a80f1233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b4937b6c4a96bcac58cd5517323562a755c3ad25707e4f651b5435e7418c417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4937b6c4a96bcac58cd5517323562a755c3ad25707e4f651b5435e7418c417->enter($__internal_1b4937b6c4a96bcac58cd5517323562a755c3ad25707e4f651b5435e7418c417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "- Rapport de Visite
";
        
        $__internal_1b4937b6c4a96bcac58cd5517323562a755c3ad25707e4f651b5435e7418c417->leave($__internal_1b4937b6c4a96bcac58cd5517323562a755c3ad25707e4f651b5435e7418c417_prof);

        
        $__internal_654d7fee6b12518a4eb17621e821da07a715969b96e16ea320e240b7a80f1233->leave($__internal_654d7fee6b12518a4eb17621e821da07a715969b96e16ea320e240b7a80f1233_prof);

    }

    public function getTemplateName()
    {
        return "GSBPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}
    {{ parent() }}- Rapport de Visite
{% endblock %}
", "GSBPlatformBundle::layout.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_SymfonyAlex/src/GSB/PlatformBundle/Resources/views/layout.html.twig");
    }
}
