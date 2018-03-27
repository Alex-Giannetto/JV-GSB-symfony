<?php

/* GSBPlatformBundle:Pages:addVisite.html.twig */
class __TwigTemplate_6f2ed5cced5040e85d7e938edb3a03b48858a5a9411bb2c96ec8268f7f7c8212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GSBPlatformBundle::layout.html.twig", "GSBPlatformBundle:Pages:addVisite.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nomPage' => array($this, 'block_nomPage'),
            'card' => array($this, 'block_card'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GSBPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e905104228989ef8f4e34ccf6b771595a2fe6cfd95c71ebfddb20a73ff6a6930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e905104228989ef8f4e34ccf6b771595a2fe6cfd95c71ebfddb20a73ff6a6930->enter($__internal_e905104228989ef8f4e34ccf6b771595a2fe6cfd95c71ebfddb20a73ff6a6930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Pages:addVisite.html.twig"));

        $__internal_84726c5b71b699335f2894b727257083042f847683d604dcfb72057ffddfa3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84726c5b71b699335f2894b727257083042f847683d604dcfb72057ffddfa3a1->enter($__internal_84726c5b71b699335f2894b727257083042f847683d604dcfb72057ffddfa3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Pages:addVisite.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e905104228989ef8f4e34ccf6b771595a2fe6cfd95c71ebfddb20a73ff6a6930->leave($__internal_e905104228989ef8f4e34ccf6b771595a2fe6cfd95c71ebfddb20a73ff6a6930_prof);

        
        $__internal_84726c5b71b699335f2894b727257083042f847683d604dcfb72057ffddfa3a1->leave($__internal_84726c5b71b699335f2894b727257083042f847683d604dcfb72057ffddfa3a1_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d9288d51bd0d13254bd39f4e8798b942162a5f12942b4e015b6735bd8fabb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9288d51bd0d13254bd39f4e8798b942162a5f12942b4e015b6735bd8fabb26->enter($__internal_5d9288d51bd0d13254bd39f4e8798b942162a5f12942b4e015b6735bd8fabb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e31a7192f258bcfef344f7fb50ffd3f0ab179f8cd226deacca2dec772601bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e31a7192f258bcfef344f7fb50ffd3f0ab179f8cd226deacca2dec772601bc0->enter($__internal_2e31a7192f258bcfef344f7fb50ffd3f0ab179f8cd226deacca2dec772601bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 22
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "- Index
";
        
        $__internal_2e31a7192f258bcfef344f7fb50ffd3f0ab179f8cd226deacca2dec772601bc0->leave($__internal_2e31a7192f258bcfef344f7fb50ffd3f0ab179f8cd226deacca2dec772601bc0_prof);

        
        $__internal_5d9288d51bd0d13254bd39f4e8798b942162a5f12942b4e015b6735bd8fabb26->leave($__internal_5d9288d51bd0d13254bd39f4e8798b942162a5f12942b4e015b6735bd8fabb26_prof);

    }

    // line 25
    public function block_nomPage($context, array $blocks = array())
    {
        $__internal_3abff2b63ba6de1c411b87a7213d28fdf69a3a8e35263e8b24c909432c6d0248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abff2b63ba6de1c411b87a7213d28fdf69a3a8e35263e8b24c909432c6d0248->enter($__internal_3abff2b63ba6de1c411b87a7213d28fdf69a3a8e35263e8b24c909432c6d0248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        $__internal_a33b7e4eea860eb54cf90da355510fc9e2c71e53ed0a9aaf97033e31908b9423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33b7e4eea860eb54cf90da355510fc9e2c71e53ed0a9aaf97033e31908b9423->enter($__internal_a33b7e4eea860eb54cf90da355510fc9e2c71e53ed0a9aaf97033e31908b9423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        // line 26
        echo "    Ajouter une visite
";
        
        $__internal_a33b7e4eea860eb54cf90da355510fc9e2c71e53ed0a9aaf97033e31908b9423->leave($__internal_a33b7e4eea860eb54cf90da355510fc9e2c71e53ed0a9aaf97033e31908b9423_prof);

        
        $__internal_3abff2b63ba6de1c411b87a7213d28fdf69a3a8e35263e8b24c909432c6d0248->leave($__internal_3abff2b63ba6de1c411b87a7213d28fdf69a3a8e35263e8b24c909432c6d0248_prof);

    }

    // line 29
    public function block_card($context, array $blocks = array())
    {
        $__internal_159df1cf78ade0894960d5931e9585eabdfa1d15a7e4803603842f6c4bf538be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159df1cf78ade0894960d5931e9585eabdfa1d15a7e4803603842f6c4bf538be->enter($__internal_159df1cf78ade0894960d5931e9585eabdfa1d15a7e4803603842f6c4bf538be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        $__internal_fac1f73eba33d26cf20ac67315c8c226d9845f9bef12509089608b52615cf860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac1f73eba33d26cf20ac67315c8c226d9845f9bef12509089608b52615cf860->enter($__internal_fac1f73eba33d26cf20ac67315c8c226d9845f9bef12509089608b52615cf860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        // line 30
        echo "
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"grid2\">
        <div>
            <div class=\"form-group\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date"));
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control--date")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motif", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Motif"));
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

        </div>


        <div class=\"form-group\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bilan", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Bilan"));
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bilan", array()), 'widget', array("attr" => array("class" => "form-control form-control--textArea")));
        echo "
        </div>


        <div class=\"form-group\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecin", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Medecin"));
        echo "
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecin", array()), 'widget', array("attr" => array("class" => "form-control", "onChange" => "medecinSelect()")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecinRemplacant", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Medecin Remplacant"));
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecinRemplacant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medicament1", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Médicament n°1"));
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medicament1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medicament2", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Médicament n°2"));
        echo "
            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medicament2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <br>
    <div class=\"form-group\" style=\"position: relative; text-align: center\">
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentation", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Documentation"));
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentation", array()), 'widget', array("attr" => array("class" => "form-control--checkbox")));
        echo "
    </div>



        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "echantillons", array()), 'widget');
        echo "
        <a href=\"#\" id=\"add_category\" class=\"btn btn--view\">+</a>


    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn--validate")));
        echo "

    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <script>
        document.getElementById(\"gsb_platformbundle_rapportvisite_medecinRemplacant\").getElementsByTagName(\"option\")[1].disabled = true;

        function medecinSelect() {
            var selectedOptionMedecin = document.getElementById(\"gsb_platformbundle_rapportvisite_medecin\").value;
            var selectedOptionMedecinRemplacant = document.getElementById(\"gsb_platformbundle_rapportvisite_medecinRemplacant\").value;
            var options = document.getElementById(\"gsb_platformbundle_rapportvisite_medecinRemplacant\").getElementsByTagName(\"option\");
            var select = document.getElementById(\"gsb_platformbundle_rapportvisite_medecinRemplacant\");

            Medecin_selected = true;

            for (var i = 0; i < options.length; i++) {
                options[i].disabled = false;
                if (options[i].value == selectedOptionMedecin) {
                    options[i].disabled = true;
                    if (selectedOptionMedecin == selectedOptionMedecinRemplacant) {
                        select.selectedIndex = 0;
                    }
                }
            }
        }


    </script>


    ";
        // line 119
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    ";
        // line 122
        echo "    <script type=\"text/javascript\">


        \$(document).ready(function () {
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
            var \$container = \$('div#gsb_platformbundle_rapportvisite_echantillons');

            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = \$container.find(':input').length;

            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
            \$('#add_category').click(function (e) {
                addCategory(\$container);

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });

            // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
            if (index == 0) {
                addCategory(\$container);
            } else {
                // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
                \$container.children('div').each(function () {
                    addDeleteLink(\$(this));
                });
            }

            // La fonction qui ajoute un formulaire CategoryType
            function addCategory(\$container) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var template = \$container.attr('data-prototype')
                    .replace(/__name__label__/g, 'medoc' + (index))
                    .replace(/__name__/g, index)
                ;

                // On crée un objet jquery qui contient ce template
                var \$prototype = \$(template);

                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                addDeleteLink(\$prototype);

                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container.append(\$prototype);

                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index++;
            }

            // La fonction qui ajoute un lien de suppression d'une catégorie
            function addDeleteLink(\$prototype) {
                // Création du lien
                var \$deleteLink = \$('<button href=\"#\" class=\"btn btn--delete\">X</button>');

                // Ajout du lien
                \$prototype.append(\$deleteLink);

                // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
                \$deleteLink.click(function (e) {
                    \$prototype.remove();

                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
            }
        });
    </script>



";
        
        $__internal_fac1f73eba33d26cf20ac67315c8c226d9845f9bef12509089608b52615cf860->leave($__internal_fac1f73eba33d26cf20ac67315c8c226d9845f9bef12509089608b52615cf860_prof);

        
        $__internal_159df1cf78ade0894960d5931e9585eabdfa1d15a7e4803603842f6c4bf538be->leave($__internal_159df1cf78ade0894960d5931e9585eabdfa1d15a7e4803603842f6c4bf538be_prof);

    }

    public function getTemplateName()
    {
        return "GSBPlatformBundle:Pages:addVisite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 122,  248 => 119,  217 => 89,  212 => 87,  207 => 85,  200 => 81,  192 => 76,  188 => 75,  180 => 70,  176 => 69,  169 => 65,  165 => 64,  158 => 60,  154 => 59,  147 => 55,  143 => 54,  135 => 49,  131 => 48,  121 => 41,  117 => 40,  111 => 37,  107 => 36,  99 => 31,  96 => 30,  87 => 29,  76 => 26,  67 => 25,  54 => 22,  45 => 21,  35 => 1,  33 => 3,  11 => 1,);
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

{% form_theme form _self %}

{#{% block collection_widget %}#}
    {#<div id=\"gsb_platformbundle_rapportvisite_echantillons\" data-prototype=\"<div class= 'echantillon ' id= 'gsb_platformbundle_rapportvisite_echantillons_0 '><select class= 'form-control form-control--echantillon ' id= 'gsb_platformbundle_rapportvisite_echantillons_0_medicament1 ' name= 'gsb_platformbundle_rapportvisite[echantillons][0][medicament1] '></select><input class= 'form-control form-control--echantillon ' type= 'number ' id= 'gsb_platformbundle_rapportvisite_echantillons_0_quantite ' name= 'gsb_platformbundle_rapportvisite[echantillons][0][quantite] ' required= 'required ' min= '1 ' placeholder= 'Qte '></div>\">#}
        {#<div class=\"echantillon\" id=\"gsb_platformbundle_rapportvisite_echantillons_0\">#}

            {#<select class=\"form-control\" id=\"gsb_platformbundle_rapportvisite_echantillons_0_medicament1\" name=\"gsb_platformbundle_rapportvisite[echantillons][0][medicament1]\">#}

            {#</select>#}
            {#<input class=\"form-control form-control--echantillon\" type=\"number\" id=\"gsb_platformbundle_rapportvisite_echantillons_0_quantite\" name=\"gsb_platformbundle_rapportvisite[echantillons][0][quantite]\" required=\"required\" min=\"1\" placeholder=\"Qte\">#}
        {#</div>#}
    {#</div>#}
{#{% endblock collection_widget %}#}





{% block title %}
    {{ parent() }}- Index
{% endblock %}

{% block nomPage %}
    Ajouter une visite
{% endblock %}

{% block card %}

    {{ form_start(form) }}

    <div class=\"grid2\">
        <div>
            <div class=\"form-group\">
                {{ form_label(form.date, \"Date\", {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(form.date, {'attr': {'class': 'form-control--date'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.motif, \"Motif\", {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(form.motif, {'attr': {'class': 'form-control'}}) }}
            </div>

        </div>


        <div class=\"form-group\">
            {{ form_label(form.bilan, \"Bilan\", {'label_attr': {'class': 'control-label'}}) }}
            {{ form_widget(form.bilan, {'attr': {'class': 'form-control form-control--textArea'}}) }}
        </div>


        <div class=\"form-group\">
            {{ form_label(form.medecin, \"Medecin\", {'label_attr': {'class': 'control-label'}}) }}
            {{ form_widget(form.medecin, {'attr': {'class': 'form-control', \"onChange\" : \"medecinSelect()\"}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.medecinRemplacant, \"Medecin Remplacant\", {'label_attr': {'class': 'control-label'}}) }}
            {{ form_widget(form.medecinRemplacant, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.medicament1, \"Médicament n°1\", {'label_attr': {'class': 'control-label'}}) }}
            {{ form_widget(form.medicament1, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.medicament2, \"Médicament n°2\", {'label_attr': {'class': 'control-label'}}) }}
            {{ form_widget(form.medicament2, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    <br>
    <div class=\"form-group\" style=\"position: relative; text-align: center\">
        {{ form_label(form.documentation, \"Documentation\", {'label_attr': {'class': 'control-label'}}) }}
        {{ form_widget(form.documentation, {'attr': {'class': 'form-control--checkbox'}}) }}
    </div>



        {{ form_widget(form.echantillons) }}
        <a href=\"#\" id=\"add_category\" class=\"btn btn--view\">+</a>


    {{ form_widget(form.save, {'attr': {'class': 'btn btn--validate'}}) }}

    {{ form_rest(form) }}

    {{ form_end(form) }}

    <script>
        document.getElementById(\"gsb_platformbundle_rapportvisite_medecinRemplacant\").getElementsByTagName(\"option\")[1].disabled = true;

        function medecinSelect() {
            var selectedOptionMedecin = document.getElementById(\"gsb_platformbundle_rapportvisite_medecin\").value;
            var selectedOptionMedecinRemplacant = document.getElementById(\"gsb_platformbundle_rapportvisite_medecinRemplacant\").value;
            var options = document.getElementById(\"gsb_platformbundle_rapportvisite_medecinRemplacant\").getElementsByTagName(\"option\");
            var select = document.getElementById(\"gsb_platformbundle_rapportvisite_medecinRemplacant\");

            Medecin_selected = true;

            for (var i = 0; i < options.length; i++) {
                options[i].disabled = false;
                if (options[i].value == selectedOptionMedecin) {
                    options[i].disabled = true;
                    if (selectedOptionMedecin == selectedOptionMedecinRemplacant) {
                        select.selectedIndex = 0;
                    }
                }
            }
        }


    </script>


    {# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google
   mais si vous l'avez en local, changez simplement l'adresse. #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    {# Voici le script en question : #}
    <script type=\"text/javascript\">


        \$(document).ready(function () {
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
            var \$container = \$('div#gsb_platformbundle_rapportvisite_echantillons');

            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = \$container.find(':input').length;

            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
            \$('#add_category').click(function (e) {
                addCategory(\$container);

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });

            // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
            if (index == 0) {
                addCategory(\$container);
            } else {
                // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
                \$container.children('div').each(function () {
                    addDeleteLink(\$(this));
                });
            }

            // La fonction qui ajoute un formulaire CategoryType
            function addCategory(\$container) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var template = \$container.attr('data-prototype')
                    .replace(/__name__label__/g, 'medoc' + (index))
                    .replace(/__name__/g, index)
                ;

                // On crée un objet jquery qui contient ce template
                var \$prototype = \$(template);

                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                addDeleteLink(\$prototype);

                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container.append(\$prototype);

                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index++;
            }

            // La fonction qui ajoute un lien de suppression d'une catégorie
            function addDeleteLink(\$prototype) {
                // Création du lien
                var \$deleteLink = \$('<button href=\"#\" class=\"btn btn--delete\">X</button>');

                // Ajout du lien
                \$prototype.append(\$deleteLink);

                // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
                \$deleteLink.click(function (e) {
                    \$prototype.remove();

                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
            }
        });
    </script>



{% endblock %}

", "GSBPlatformBundle:Pages:addVisite.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_SymfonyAlex/src/GSB/PlatformBundle/Resources/views/Pages/addVisite.html.twig");
    }
}
