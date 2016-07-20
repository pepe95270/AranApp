<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_3775ae5add9fa3d5d9f057769442642bc98cb1a4781bc833683c0c660d9684c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0f3dcce4b8ef523e2bbcafac6533817eccea390e067fcac5092f633680303d6 = $this->env->getExtension("native_profiler");
        $__internal_a0f3dcce4b8ef523e2bbcafac6533817eccea390e067fcac5092f633680303d6->enter($__internal_a0f3dcce4b8ef523e2bbcafac6533817eccea390e067fcac5092f633680303d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

<script type=\"text/javascript\">

    \$(document).ready(function() {

        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.

        var \$container = \$('div#fos_user_profile_form_tags');


        // On ajoute un lien pour ajouter une nouvelle catégorie

        var \$addLink = \$('<a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une langue parlée</a>');

        \$container.append(\$addLink);


        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.

        \$addLink.click(function(e) {

            addCategory(\$container);

            e.preventDefault(); // évite qu'un # apparaisse dans l'URL

            return false;

        });


        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement

        var index = \$container.find(':input').length;



        // Pour chaque catégorie déjà existante, on ajoute un lien de suppression

        \$container.children('div').each(function() {

            addDeleteLink(\$(this));
        });


        // La fonction qui ajoute un formulaire Categorie

        function addCategory(\$container) {

            // Dans le contenu de l'attribut « data-prototype », on remplace :

            // - le texte \"__name__label__\" qu'il contient par le label du champ

            // - le texte \"__name__\" qu'il contient par le numéro du champ

            var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Langue n°' + (index+1))

                    .replace(/__name__/g, index));


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

            \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');


            // Ajout du lien

            \$prototype.append(\$deleteLink);


            // Ajout du listener sur le clic du lien

            \$deleteLink.click(function(e) {

                \$prototype.remove();
                index--;

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL

                return false;

            });

        }

    });

</script>
<script type=\"text/javascript\">

    \$(document).ready(function() {

        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.

        var \$container = \$('div#fos_user_profile_form_villehebergement');


        // On ajoute un lien pour ajouter une nouvelle catégorie

        var \$addLink = \$('<a href=\"#\" id=\"add_ville\" class=\"btn btn-default\">Ajouter une ville</a>');

        \$container.append(\$addLink);


        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.

        \$addLink.click(function(e) {

            addVille(\$container);

            e.preventDefault(); // évite qu'un # apparaisse dans l'URL

            return false;

        });


        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement

        var index = \$container.find(':input').length;



        // Pour chaque catégorie déjà existante, on ajoute un lien de suppression

        \$container.children('div').each(function() {

            addDeleteLink(\$(this));
        });


        // La fonction qui ajoute un formulaire Categorie

        function addVille(\$container) {

            // Dans le contenu de l'attribut « data-prototype », on remplace :

            // - le texte \"__name__label__\" qu'il contient par le label du champ

            // - le texte \"__name__\" qu'il contient par le numéro du champ

            var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Ville n°' + (index+1))

                    .replace(/__name__/g, index));


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

            \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');


            // Ajout du lien

            \$prototype.append(\$deleteLink);


            // Ajout du listener sur le clic du lien

            \$deleteLink.click(function(e) {

                \$prototype.remove();
                index--;

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL

                return false;

            });

        }

    });

</script>
";
        // line 223
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a0f3dcce4b8ef523e2bbcafac6533817eccea390e067fcac5092f633680303d6->leave($__internal_a0f3dcce4b8ef523e2bbcafac6533817eccea390e067fcac5092f633680303d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 223,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* */
/* <script type="text/javascript">*/
/* */
/*     $(document).ready(function() {*/
/* */
/*         // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.*/
/* */
/*         var $container = $('div#fos_user_profile_form_tags');*/
/* */
/* */
/*         // On ajoute un lien pour ajouter une nouvelle catégorie*/
/* */
/*         var $addLink = $('<a href="#" id="add_category" class="btn btn-default">Ajouter une langue parlée</a>');*/
/* */
/*         $container.append($addLink);*/
/* */
/* */
/*         // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/* */
/*         $addLink.click(function(e) {*/
/* */
/*             addCategory($container);*/
/* */
/*             e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/* */
/*             return false;*/
/* */
/*         });*/
/* */
/* */
/*         // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/* */
/*         var index = $container.find(':input').length;*/
/* */
/* */
/* */
/*         // Pour chaque catégorie déjà existante, on ajoute un lien de suppression*/
/* */
/*         $container.children('div').each(function() {*/
/* */
/*             addDeleteLink($(this));*/
/*         });*/
/* */
/* */
/*         // La fonction qui ajoute un formulaire Categorie*/
/* */
/*         function addCategory($container) {*/
/* */
/*             // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/* */
/*             // - le texte "__name__label__" qu'il contient par le label du champ*/
/* */
/*             // - le texte "__name__" qu'il contient par le numéro du champ*/
/* */
/*             var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Langue n°' + (index+1))*/
/* */
/*                     .replace(/__name__/g, index));*/
/* */
/* */
/*             // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/* */
/*             addDeleteLink($prototype);*/
/* */
/* */
/*             // On ajoute le prototype modifié à la fin de la balise <div>*/
/* */
/*             $container.append($prototype);*/
/* */
/* */
/*             // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/* */
/*             index++;*/
/* */
/*         }*/
/* */
/* */
/*         // La fonction qui ajoute un lien de suppression d'une catégorie*/
/* */
/*         function addDeleteLink($prototype) {*/
/* */
/*             // Création du lien*/
/* */
/*             $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/* */
/*             // Ajout du lien*/
/* */
/*             $prototype.append($deleteLink);*/
/* */
/* */
/*             // Ajout du listener sur le clic du lien*/
/* */
/*             $deleteLink.click(function(e) {*/
/* */
/*                 $prototype.remove();*/
/*                 index--;*/
/* */
/*                 e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/* */
/*                 return false;*/
/* */
/*             });*/
/* */
/*         }*/
/* */
/*     });*/
/* */
/* </script>*/
/* <script type="text/javascript">*/
/* */
/*     $(document).ready(function() {*/
/* */
/*         // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.*/
/* */
/*         var $container = $('div#fos_user_profile_form_villehebergement');*/
/* */
/* */
/*         // On ajoute un lien pour ajouter une nouvelle catégorie*/
/* */
/*         var $addLink = $('<a href="#" id="add_ville" class="btn btn-default">Ajouter une ville</a>');*/
/* */
/*         $container.append($addLink);*/
/* */
/* */
/*         // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/* */
/*         $addLink.click(function(e) {*/
/* */
/*             addVille($container);*/
/* */
/*             e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/* */
/*             return false;*/
/* */
/*         });*/
/* */
/* */
/*         // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/* */
/*         var index = $container.find(':input').length;*/
/* */
/* */
/* */
/*         // Pour chaque catégorie déjà existante, on ajoute un lien de suppression*/
/* */
/*         $container.children('div').each(function() {*/
/* */
/*             addDeleteLink($(this));*/
/*         });*/
/* */
/* */
/*         // La fonction qui ajoute un formulaire Categorie*/
/* */
/*         function addVille($container) {*/
/* */
/*             // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/* */
/*             // - le texte "__name__label__" qu'il contient par le label du champ*/
/* */
/*             // - le texte "__name__" qu'il contient par le numéro du champ*/
/* */
/*             var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Ville n°' + (index+1))*/
/* */
/*                     .replace(/__name__/g, index));*/
/* */
/* */
/*             // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/* */
/*             addDeleteLink($prototype);*/
/* */
/* */
/*             // On ajoute le prototype modifié à la fin de la balise <div>*/
/* */
/*             $container.append($prototype);*/
/* */
/* */
/*             // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/* */
/*             index++;*/
/* */
/*         }*/
/* */
/* */
/*         // La fonction qui ajoute un lien de suppression d'une catégorie*/
/* */
/*         function addDeleteLink($prototype) {*/
/* */
/*             // Création du lien*/
/* */
/*             $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/* */
/*             // Ajout du lien*/
/* */
/*             $prototype.append($deleteLink);*/
/* */
/* */
/*             // Ajout du listener sur le clic du lien*/
/* */
/*             $deleteLink.click(function(e) {*/
/* */
/*                 $prototype.remove();*/
/*                 index--;*/
/* */
/*                 e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/* */
/*                 return false;*/
/* */
/*             });*/
/* */
/*         }*/
/* */
/*     });*/
/* */
/* </script>*/
/* {{ form_end(form) }}*/
/* */
