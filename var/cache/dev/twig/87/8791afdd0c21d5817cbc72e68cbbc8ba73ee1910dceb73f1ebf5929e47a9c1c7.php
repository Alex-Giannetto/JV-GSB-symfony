<?php

/* GSBPlatformBundle:Default:index.html.twig */
class __TwigTemplate_a3482bc36804dfc89fc06d2d4c7ce67965fc19938358e911fa34c291f3de21bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GSBPlatformBundle::layout.html.twig", "GSBPlatformBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GSBPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc4d4866218aa7c33ae196733cff5922bce6a9ebf27f1426245522fab526e78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4d4866218aa7c33ae196733cff5922bce6a9ebf27f1426245522fab526e78a->enter($__internal_bc4d4866218aa7c33ae196733cff5922bce6a9ebf27f1426245522fab526e78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Default:index.html.twig"));

        $__internal_61823dbe9c7e6645ef5623b65549320443560db6012ba49dc783309a2a245c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61823dbe9c7e6645ef5623b65549320443560db6012ba49dc783309a2a245c6a->enter($__internal_61823dbe9c7e6645ef5623b65549320443560db6012ba49dc783309a2a245c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc4d4866218aa7c33ae196733cff5922bce6a9ebf27f1426245522fab526e78a->leave($__internal_bc4d4866218aa7c33ae196733cff5922bce6a9ebf27f1426245522fab526e78a_prof);

        
        $__internal_61823dbe9c7e6645ef5623b65549320443560db6012ba49dc783309a2a245c6a->leave($__internal_61823dbe9c7e6645ef5623b65549320443560db6012ba49dc783309a2a245c6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24bd94d3b1973cd7815c681af168e389068d6d0e49ae266b14264fda1c1858b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24bd94d3b1973cd7815c681af168e389068d6d0e49ae266b14264fda1c1858b1->enter($__internal_24bd94d3b1973cd7815c681af168e389068d6d0e49ae266b14264fda1c1858b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2651297fc5a0ba794ab2a398c892cef0ae82bba989a870221fd62329b094f129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2651297fc5a0ba794ab2a398c892cef0ae82bba989a870221fd62329b094f129->enter($__internal_2651297fc5a0ba794ab2a398c892cef0ae82bba989a870221fd62329b094f129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Rapport Visite
";
        
        $__internal_2651297fc5a0ba794ab2a398c892cef0ae82bba989a870221fd62329b094f129->leave($__internal_2651297fc5a0ba794ab2a398c892cef0ae82bba989a870221fd62329b094f129_prof);

        
        $__internal_24bd94d3b1973cd7815c681af168e389068d6d0e49ae266b14264fda1c1858b1->leave($__internal_24bd94d3b1973cd7815c681af168e389068d6d0e49ae266b14264fda1c1858b1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a39a3df1acca9af03e292aeef7a9b2fe7dd8cd23f1ed95c4436f726265854fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39a3df1acca9af03e292aeef7a9b2fe7dd8cd23f1ed95c4436f726265854fbe->enter($__internal_a39a3df1acca9af03e292aeef7a9b2fe7dd8cd23f1ed95c4436f726265854fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_733fc43d2531bb6a8436e8c56b54c8669851c0e4548d28b4f5e7a074dd5c10de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733fc43d2531bb6a8436e8c56b54c8669851c0e4548d28b4f5e7a074dd5c10de->enter($__internal_733fc43d2531bb6a8436e8c56b54c8669851c0e4548d28b4f5e7a074dd5c10de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        
        $__internal_733fc43d2531bb6a8436e8c56b54c8669851c0e4548d28b4f5e7a074dd5c10de->leave($__internal_733fc43d2531bb6a8436e8c56b54c8669851c0e4548d28b4f5e7a074dd5c10de_prof);

        
        $__internal_a39a3df1acca9af03e292aeef7a9b2fe7dd8cd23f1ed95c4436f726265854fbe->leave($__internal_a39a3df1acca9af03e292aeef7a9b2fe7dd8cd23f1ed95c4436f726265854fbe_prof);

    }

    public function getTemplateName()
    {
        return "GSBPlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"GSBPlatformBundle::layout.html.twig\" %}

{% block title %}
    Rapport Visite
{% endblock %}

{% block body %}

{% endblock %}", "GSBPlatformBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_Symfony/src/GSB/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
