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

<body>
<header>
    <div class="Title">
        <h1>Bienvenue sur notre site de vente en ligne de livres marxistes</h1>
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
<main>
    <div class="livres-phares">
        <h2>Nos livres phares</h2>
        <article class="livre-phare-1">
            <h3>Le Capital de Karl Marx</h3>
            <p>Une analyse approfondie du système capitaliste et de ses contradictions.</p>
        </article>
        <article class="livre-phare-2">
            <h3>Le Manifeste du Parti Communiste</h3>
            <p>Un appel à l'action pour la classe ouvrière du monde entier.</p>
        </article>
        <article class="livre-phare-3">
            <h3>L'état et la révolution</h3>
            <p>Introduction à la critique de l'État et à la théorie de la révolution proletarienne.</p>
        </article>
    </div>
    <div class="Nouveautes">
        <h2>Nouveautés</h2>
        <article class="nouveaute-1">
            <h3>Le Marxisme de Gramsci</h3>
            <p>Présentation de Antonio Gramsci et ses contributions au marxisme.</p>
        </article>
        <article class="nouveaute-2">
            <h3>Les Femmes, la révolution et le socialisme</h3>
            <p>Receuil de textes sur l'importance de la lutte féministe</p>
        </article>
    </div>
</main>
</body>
</html>