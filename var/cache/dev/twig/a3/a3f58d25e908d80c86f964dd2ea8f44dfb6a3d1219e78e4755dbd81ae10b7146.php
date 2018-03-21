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
        $__internal_ce4a8746ed2b6357fc3f8afa6f21271b5733f740a2aabb5ecdfacfad6d35197e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4a8746ed2b6357fc3f8afa6f21271b5733f740a2aabb5ecdfacfad6d35197e->enter($__internal_ce4a8746ed2b6357fc3f8afa6f21271b5733f740a2aabb5ecdfacfad6d35197e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Pages:addVisite.html.twig"));

        $__internal_5db7c7ecddd74da4c570540afd9c26f0a8e9d7546a1020932bb82ceed442fcae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db7c7ecddd74da4c570540afd9c26f0a8e9d7546a1020932bb82ceed442fcae->enter($__internal_5db7c7ecddd74da4c570540afd9c26f0a8e9d7546a1020932bb82ceed442fcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Pages:addVisite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce4a8746ed2b6357fc3f8afa6f21271b5733f740a2aabb5ecdfacfad6d35197e->leave($__internal_ce4a8746ed2b6357fc3f8afa6f21271b5733f740a2aabb5ecdfacfad6d35197e_prof);

        
        $__internal_5db7c7ecddd74da4c570540afd9c26f0a8e9d7546a1020932bb82ceed442fcae->leave($__internal_5db7c7ecddd74da4c570540afd9c26f0a8e9d7546a1020932bb82ceed442fcae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21da0bf6aa468968b99c4084ba6507a03bb1396a46c96f3081cf8d1260d76367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21da0bf6aa468968b99c4084ba6507a03bb1396a46c96f3081cf8d1260d76367->enter($__internal_21da0bf6aa468968b99c4084ba6507a03bb1396a46c96f3081cf8d1260d76367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_478f3bdefa6d50410ea18c0eee478fd2cb8a8e76db8670bdc9c6728fbbf17c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478f3bdefa6d50410ea18c0eee478fd2cb8a8e76db8670bdc9c6728fbbf17c84->enter($__internal_478f3bdefa6d50410ea18c0eee478fd2cb8a8e76db8670bdc9c6728fbbf17c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "- Index
";
        
        $__internal_478f3bdefa6d50410ea18c0eee478fd2cb8a8e76db8670bdc9c6728fbbf17c84->leave($__internal_478f3bdefa6d50410ea18c0eee478fd2cb8a8e76db8670bdc9c6728fbbf17c84_prof);

        
        $__internal_21da0bf6aa468968b99c4084ba6507a03bb1396a46c96f3081cf8d1260d76367->leave($__internal_21da0bf6aa468968b99c4084ba6507a03bb1396a46c96f3081cf8d1260d76367_prof);

    }

    // line 7
    public function block_nomPage($context, array $blocks = array())
    {
        $__internal_5c544b4621c204f2b5f055ad08cb047cc2488bf0192c176c32fdd95dc1ae081b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c544b4621c204f2b5f055ad08cb047cc2488bf0192c176c32fdd95dc1ae081b->enter($__internal_5c544b4621c204f2b5f055ad08cb047cc2488bf0192c176c32fdd95dc1ae081b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        $__internal_bb4edd2e29f538858eed8a43416fc4235d6458d3a44d838817534536a9e068b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4edd2e29f538858eed8a43416fc4235d6458d3a44d838817534536a9e068b1->enter($__internal_bb4edd2e29f538858eed8a43416fc4235d6458d3a44d838817534536a9e068b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        // line 8
        echo "    Ajouter une visite
";
        
        $__internal_bb4edd2e29f538858eed8a43416fc4235d6458d3a44d838817534536a9e068b1->leave($__internal_bb4edd2e29f538858eed8a43416fc4235d6458d3a44d838817534536a9e068b1_prof);

        
        $__internal_5c544b4621c204f2b5f055ad08cb047cc2488bf0192c176c32fdd95dc1ae081b->leave($__internal_5c544b4621c204f2b5f055ad08cb047cc2488bf0192c176c32fdd95dc1ae081b_prof);

    }

    // line 11
    public function block_card($context, array $blocks = array())
    {
        $__internal_4d8568786dad8af4e0e1ef568338b7198fdbaf9325665c03e0f51f0623b391c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8568786dad8af4e0e1ef568338b7198fdbaf9325665c03e0f51f0623b391c8->enter($__internal_4d8568786dad8af4e0e1ef568338b7198fdbaf9325665c03e0f51f0623b391c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        $__internal_19a924274a6f1c9661ddca3301b46654af4ef2870495a316aa18bb8a4da62782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a924274a6f1c9661ddca3301b46654af4ef2870495a316aa18bb8a4da62782->enter($__internal_19a924274a6f1c9661ddca3301b46654af4ef2870495a316aa18bb8a4da62782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        // line 12
        echo "


    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "





    <div class=\"grid2\">
        <div>
            <div class=\"form-group\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date"));
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control--date")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motif", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Motif"));
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bilan", array()), 'label', array("label_attr" => array("class" => "control-label "), "label" => "Bilan"));
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bilan", array()), 'widget', array("attr" => array("class" => "form-control form-control--textArea")));
        echo "
            </div>
        </div>

        <div>
            <div class=\"form-group\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecin", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Medecin"));
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecin", array()), 'widget', array("attr" => array("class" => "form-control", "onChange" => "medecinSelect()")));
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecinRemplacant", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Medecin Remplacant"));
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecinRemplacant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecinRemplacant", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Medecin Remplacant"));
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "medecinRemplacant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

    </div>




    ";
        // line 60
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <script>
        function medecinSelect() {
            console.log(\"select\");
        }
    </script>



    ";
        // line 71
        echo "    <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>


    ";
        // line 76
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    ";
        // line 79
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
            var \$container = \$('div#gsb_platformbundle_rapportvisite_echantillons');

            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = \$container.find(':input').length;

            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
            \$('#add_category').click(function(e) {
                addCategory(\$container);

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });

            // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
            if (index == 0) {
                addCategory(\$container);
            } else {
                // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
                \$container.children('div').each(function() {
                    addDeleteLink(\$(this));
                });
            }

            // La fonction qui ajoute un formulaire CategoryType
            function addCategory(\$container) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var template = \$container.attr('data-prototype')
                    .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
                    .replace(/__name__/g,        index)
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
                var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

                // Ajout du lien
                \$prototype.append(\$deleteLink);

                // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
                \$deleteLink.click(function(e) {
                    \$prototype.remove();

                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
            }
        });
    </script>



";
        
        $__internal_19a924274a6f1c9661ddca3301b46654af4ef2870495a316aa18bb8a4da62782->leave($__internal_19a924274a6f1c9661ddca3301b46654af4ef2870495a316aa18bb8a4da62782_prof);

        
        $__internal_4d8568786dad8af4e0e1ef568338b7198fdbaf9325665c03e0f51f0623b391c8->leave($__internal_4d8568786dad8af4e0e1ef568338b7198fdbaf9325665c03e0f51f0623b391c8_prof);

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
        return array (  204 => 79,  200 => 76,  195 => 71,  181 => 60,  169 => 50,  165 => 49,  158 => 45,  154 => 44,  147 => 40,  143 => 39,  134 => 33,  130 => 32,  124 => 29,  120 => 28,  114 => 25,  110 => 24,  98 => 15,  93 => 12,  84 => 11,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    {{ parent() }}- Index
{% endblock %}

{% block nomPage %}
    Ajouter une visite
{% endblock %}

{% block card %}



    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}





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
            <div class=\"form-group\">
                {{ form_label(form.bilan, \"Bilan\", {'label_attr': {'class': 'control-label '}}) }}
                {{ form_widget(form.bilan, {'attr': {'class': 'form-control form-control--textArea'}}) }}
            </div>
        </div>

        <div>
            <div class=\"form-group\">
                {{ form_label(form.medecin, \"Medecin\", {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(form.medecin, {'attr': {'class': 'form-control', \"onChange\" : \"medecinSelect()\"}}) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.medecinRemplacant, \"Medecin Remplacant\", {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(form.medecinRemplacant, {'attr': {'class': 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.medecinRemplacant, \"Medecin Remplacant\", {'label_attr': {'class': 'control-label'}}) }}
                {{ form_widget(form.medecinRemplacant, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

    </div>




    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}

    <script>
        function medecinSelect() {
            console.log(\"select\");
        }
    </script>



    {#{{ form_row(form.echantillons) }}#}
    <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>


    {# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google
   mais si vous l'avez en local, changez simplement l'adresse. #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    {# Voici le script en question : #}
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
            var \$container = \$('div#gsb_platformbundle_rapportvisite_echantillons');

            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = \$container.find(':input').length;

            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
            \$('#add_category').click(function(e) {
                addCategory(\$container);

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });

            // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
            if (index == 0) {
                addCategory(\$container);
            } else {
                // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
                \$container.children('div').each(function() {
                    addDeleteLink(\$(this));
                });
            }

            // La fonction qui ajoute un formulaire CategoryType
            function addCategory(\$container) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var template = \$container.attr('data-prototype')
                    .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
                    .replace(/__name__/g,        index)
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
                var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

                // Ajout du lien
                \$prototype.append(\$deleteLink);

                // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
                \$deleteLink.click(function(e) {
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
