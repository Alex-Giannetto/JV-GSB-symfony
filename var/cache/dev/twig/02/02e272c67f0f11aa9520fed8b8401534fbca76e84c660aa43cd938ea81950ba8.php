<?php

/* GSBPlatformBundle::layout.html.twig */
class __TwigTemplate_534e453bc651b56578c147923db36d0280b94e9b19b1c8d112555d41bef408c0 extends Twig_Template
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
        $__internal_c706e18259c7e4cc87a1bc49a6bbfd048707b5405606b9ada349b8637331e343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c706e18259c7e4cc87a1bc49a6bbfd048707b5405606b9ada349b8637331e343->enter($__internal_c706e18259c7e4cc87a1bc49a6bbfd048707b5405606b9ada349b8637331e343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle::layout.html.twig"));

        $__internal_6470458c6eae96aea33584c2833eb0951fdc8b18061f34d540f691e4c7653bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6470458c6eae96aea33584c2833eb0951fdc8b18061f34d540f691e4c7653bbe->enter($__internal_6470458c6eae96aea33584c2833eb0951fdc8b18061f34d540f691e4c7653bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c706e18259c7e4cc87a1bc49a6bbfd048707b5405606b9ada349b8637331e343->leave($__internal_c706e18259c7e4cc87a1bc49a6bbfd048707b5405606b9ada349b8637331e343_prof);

        
        $__internal_6470458c6eae96aea33584c2833eb0951fdc8b18061f34d540f691e4c7653bbe->leave($__internal_6470458c6eae96aea33584c2833eb0951fdc8b18061f34d540f691e4c7653bbe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e59dff77b532a3df5deb322d50b46226b50b20b236d6f682a9ebdf5514b01ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e59dff77b532a3df5deb322d50b46226b50b20b236d6f682a9ebdf5514b01ad->enter($__internal_0e59dff77b532a3df5deb322d50b46226b50b20b236d6f682a9ebdf5514b01ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c52c3a19ec2d06532acb047abafe2c07ca98c1dff8320f2777a59795f6e300be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52c3a19ec2d06532acb047abafe2c07ca98c1dff8320f2777a59795f6e300be->enter($__internal_c52c3a19ec2d06532acb047abafe2c07ca98c1dff8320f2777a59795f6e300be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "- Rapport de Visite
";
        
        $__internal_c52c3a19ec2d06532acb047abafe2c07ca98c1dff8320f2777a59795f6e300be->leave($__internal_c52c3a19ec2d06532acb047abafe2c07ca98c1dff8320f2777a59795f6e300be_prof);

        
        $__internal_0e59dff77b532a3df5deb322d50b46226b50b20b236d6f682a9ebdf5514b01ad->leave($__internal_0e59dff77b532a3df5deb322d50b46226b50b20b236d6f682a9ebdf5514b01ad_prof);

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
