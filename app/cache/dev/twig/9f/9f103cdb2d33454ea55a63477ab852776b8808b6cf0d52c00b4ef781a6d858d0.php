<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_7e9056c5ab7b0c8fcf41757dafd12f11d60a24a311d9752310549347c2a27045 extends Twig_Template
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
        $__internal_080c96ea43a9ed052bc366022a06bcfc887da770d6ee8b8ab190f242c98d0818 = $this->env->getExtension("native_profiler");
        $__internal_080c96ea43a9ed052bc366022a06bcfc887da770d6ee8b8ab190f242c98d0818->enter($__internal_080c96ea43a9ed052bc366022a06bcfc887da770d6ee8b8ab190f242c98d0818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    <div class=\"col-md-4\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input class=\"btn btn-default\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Retour</a>
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
        // line 224
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_080c96ea43a9ed052bc366022a06bcfc887da770d6ee8b8ab190f242c98d0818->leave($__internal_080c96ea43a9ed052bc366022a06bcfc887da770d6ee8b8ab190f242c98d0818_prof);

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
        return array (  258 => 224,  38 => 7,  34 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     <div class="col-md-4">*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-default" type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*         <a href="{{ path('fos_user_profile_show') }}">Retour</a>*/
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
