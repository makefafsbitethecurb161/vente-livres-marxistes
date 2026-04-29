<!DOCTYPE html>
<html lang="fr-FR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vente en Ligne de livres marxistes</title>
<link rel="stylesheet" href="..\styles.css">
</head>

<!-- 
Pour lancer le serveur local :
Ecrire 'PowerShell' dans le dossier du projet
php -S localhost:8000

lien vers le site : 
http://localhost:8000/index.php
-->

<!--
AJOUTER REF A BDD
-->

<body>
<header>
    <div class="Title-bloc">
        <div class="Title">
            <h1>Bienvenue sur notre site de vente en ligne de livres marxistes</h1>
        </div>
        <img src="../img/pngegg.png" alt="image 1" class="image-header">
    </div>
    <nav>
        <ul class="Menu">
            <a href="..\index.php" class= "Menu-1"><li>Accueil</li></a>
            <a href="..\catalogue.php" class= "Menu-2"><li>Catalogue</li></a>
            <a href="..\panier.php" class= "Menu-3"><li>Panier</li></a>
            <a href="..\contact.php" class= "Menu-4"><li>Contact</li></a>
        </ul>
    </nav>
</header>
<div class="content-wrapper">
    <main>
        <div class="livres-phares">
            <h2>Nos livres phares</h2>
            <article class="livre-phare-1" 
                    data-sidebar-title="Le Capital" 
                    data-sidebar-text="Un aperçu des fondements de l'économie politique et de la critique du capitalisme."
                    data-sidebar-img="./img/Livres/DAS-KAPITAL.jpg"
                    data-sidebar-Qdc="“Le capitalisme n'a aucune valeur historique, aucun droit historique à la vie, aucune raison d'être sociale, qu'autant qu'il fonctionne comme capital personnifié. Ce n'est qu'à ce titre que la nécessité transitoire de sa propre existence est impliquée dans la nécessité transitoire du mode de production capitaliste. Le but déterminant de son activité n'est donc ni la valeur d'usage ni la jouissance, mais bien la valeur d'échange et son accroissement continu. Agent fanatique de l'accumulation, il force les hommes, sans merci ni trêve, à produire pour produire, et les pousse ainsi instinctivement à développer les puissances productrices et les conditions matérielles qui seules peuvent former la base d'une société nouvelle et supérieure. Le capitaliste n'est respectable qu'autant qu'il est le capital fait homme. Dans ce rôle il est, lui aussi, comme le thésauriseur, dominé par sa passion aveugle pour la richesse abstraite, la valeur. Mais ce qui chez l'un paraît être une manie individuelle est chez l'autre l'effet du mécanisme social dont il n'est qu'un rouage.”">
                <h3>Le Capital de Karl Marx</h3>
                <p>Une analyse approfondie du système capitaliste et de ses contradictions.</p>
            </article>
            <article class="livre-phare-2" 
                    data-sidebar-title="Le Manifeste du Parti Communiste" 
                    data-sidebar-text="Découvrez l'appel historique à l'unité de la classe ouvrière et l'abolition de la propriété privée."
                    data-sidebar-img="./img/Livres/COMUNIST-MANIFESTO.jpg"
                    data-sidebar-Qdc="“Un spectre hante l'Europe : le spectre du communisme. Toutes les puissances de la vieille Europe se sont unies en une sainte alliance pour chasser ce spectre : le pape et le tsar, Metternich et Guizot, les radicaux de France et les policiers d'Angleterre. Où est le parti d'opposition qui n'ait pas été traité de communiste par ses adversaires au pouvoir ? Où est le parti d'opposition qui n'ait pas lancé à son tour le nom de communiste contre les partis adverses au pouvoir, contre ses ennemis de classe ? Deux choses sont désormais certaines : le spectre du communisme hante l'Europe, et il est temps que les communistes exposent ouvertement leurs vues, leurs objectifs, leurs tendances, et qu'ils opposent au spectre du communisme un manifeste du parti lui-même.”">
                <h3>Le Manifeste du Parti Communiste</h3>
                <p>Un appel à l'action pour la classe ouvrière du monde entier.</p>
            </article>
            <article class="livre-phare-3" 
                    data-sidebar-title="L'état et la révolution" 
                    data-sidebar-text="Lire la critique de l'État bourgeois et les raisons d'une révolution prolétarienne."
                    data-sidebar-img="./img/Livres/STATE-AND-REVOLUTION.jpg"
                    data-sidebar-Qdc="“Tant que l'Etat existe, il n'y a pas de liberté. Quand il y aura la liberté, il n'y aura plus d'Etat. Ces mots ne sont pas de Bakounine, ni de Malatesta, ni de Proudhon : ils sont de Lénine, réfugié en Finlande à l'été 1917 avant le déclenchement de la révolution d'Octobre. Il a utilisé son temps à l'écart de l'action pour reprendre et élargir ses notes sur la théorie de l'État, déjà énoncée dans les Thèses d'avril. dans L'Etat et la révolution, Lénine convoque les textes de Marx et Engels sur la Commune de Paris. Il les utilise pour combattre les opportunistes de droite, les chefs de la IIe Internationale qui soutiennent la guerre en cours. Il réduit au minimum les divergences entre anarchistes et marxistes : non, le marxisme n'est pas un étatisme, il vise au contraire au dépérissement de l'Etat - avec une phase de transition, la dictature du prolétariat, dont la Commune parisienne est un moment paradigmatique. Pour reprendre la formule de Marx à propos de Hegel, Lénine est aujourd'hui traité en 'chien crevé'. Dans sa présentation, Laurent Lévy montre ce que cette pensée politique garde d'original et d'actuel.”">
                <h3>L'état et la révolution</h3>
                <p>Introduction à la critique de l'État et à la théorie de la révolution proletarienne.</p>
            </article>
        </div>
        <div class="Nouveautes">
            <h2>Nouveautés</h2>
            <article class="nouveaute-1" 
                    data-sidebar-title="Gramsci et la théorie" 
                    data-sidebar-text="Explorez les idées d'Antonio Gramsci sur l'hégémonie culturelle et la stratégie révolutionnaire."
                    data-sidebar-img="./img/Livres/GRAMSCI-AND-THEORY.jpg"
                    data-sidebar-Qdc="“Antonio Gramsci s'est imposé comme un penseur incontournable du XXe siècle, au point qu'il semble aujourd'hui repris par l'ensemble du spectre politique. À partir d'une lecture des Cahiers de prison, Juan Dal Maso reconstruit la cohérence de sa pensée et montre que cette dernière ne se laisse ni démembrer ni extraire de son cadre marxiste et révolutionnaire. L'auteur examine en particulier la notion d'hégémonie et en propose une relecture originale à partir de ses relations avec la théorie de la révolution permanente, formulée en particulier par Léon Trotsky. Cet essai rigoureux et concis s'adresse aussi bien à celui qui découvre Gramsci qu'au connaisseur de son œuvre. Il intéressera tous ceux qui se demandent si le marxisme de Gramsci peut encore nous guider sur les voies de la révolution aujourd'hui.”">
                <h3>Le Marxisme de Gramsci</h3>
                <p>Présentation de Antonio Gramsci et ses contributions au marxisme.</p>
            </article>
            <article class="nouveaute-2" 
                    data-sidebar-title="Féminisme et révolution" 
                    data-sidebar-text="Un recueil essentiel sur l'intersection du mouvement féminin et de la lutte socialiste."
                    data-sidebar-img="./img/Livres/FEMINISM-AND-REVOLUTION.jpg"
                    data-sidebar-Qdc="“ De la Commune de Paris à la révolution russe, des générations de marxistes et de militant·es ont lutté pour l'émancipation des femmes, en articulant leurs luttes à celles du monde du travail. Si au cours du XXe siècle, ce féminisme socialiste s'est imposé comme un courant théorique et politique majeur, il est aujourd'hui largement méconnu. Ces textes fondateurs de Karl Marx, Friedrich Engels, Eleanor Marx, Clara Zetkin, Rosa Luxemburg, Inès Armand, Alexandra Kollontaï, Lénine et Léon Trotsky, dont certains étaient jusqu'alors inédits en français, sont pour la première fois rassemblés dans un même recueil. Ils sont introduits par Josefina Martínez et Diana Assunção qui retracent l'histoire de ce courant, discutent ses apports au regard des débats féministes contemporains et appellent à renouer avec le féminisme socialiste, dans une perspective anticapitaliste et anti-impérialiste. Josefina Martinez et Diana Assunção sont militantes féministes et révolutionnaires, membres du collectif international Du pain et des roses (Pan y Rosas)”">
                <h3>Les Femmes, la révolution et le socialisme</h3>
                <p>Receuil de textes sur l'importance de la lutte féministe.</p>
            </article>
        </div>
    </main>
    <div id="sideblock" class="sideblock"> </div>
</div>

<script>
    const sideblock = document.getElementById('sideblock');
    const articles = document.querySelectorAll('main article');

    articles.forEach(article => {
        article.addEventListener('click', () => {
            const title = article.dataset.sidebarTitle || 'Informations';
            const text = article.dataset.sidebarText || 'Cliquez sur un livre pour afficher des détails spécifiques.';
            const Qdc = article.dataset.sidebarQdc || '-- Aucun texte de quatrième de couverture disponible pour ce livre. --';
            const img = article.dataset.sidebarImg || './img/Livres/PLACEHOLDER.png';
            sideblock.innerHTML = `<div class="sidebar-content">
                                        <img src="${img}" alt="Image du livre" class="sidebar-image-livre">
                                        <div class="sidebar-text">
                                            <h3>${title}</h3>
                                            <p>${text}</p>
                                            <div class="sidebar-quatrieme-de-couverture">
                                                <h4>${Qdc}</h4>
                                            </div>
                                        </div>
                                    </div>`;
        });
    });
</script>
</body>
</html>