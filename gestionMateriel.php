<?php

require 'class/MaterielClass.php';
require 'connexBD.php';

// Création de l'objet Materiel et connexion à la base de données
$Materiel = new Materiel("", "", "", "");
$Materiel->connex($connexion);

// Récupération de tous les enregistrements de la table materiel
$resultats = $Materiel->findAll();

?>

<html>
    <head>
        <title>RappelMat | Page Administrateur</title>

        <!-- meta -->
        <meta charset="utf-8"/>

        <!-- Link -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header class="header">
            <a href="index.php" class="logo">Rappel<span>Mat</span></a>

            <nav class="navbar">
                <a href="admin.php" class="active">Accueil</a>
                <a href="createMateriel.php">Ajouts Materiels</a>
                <a href="createDocument.php">Ajouts documents</a>
                <a href="index.html" onclick="if(!confirm('Voulez-vous vous déconnecter ?')) return false">Deconnexion</a>
            </nav>
        </header>
        
        <div class="gestMat">
            <table>
                <thead>
                    <tr>
                        <th>Référence</th>
                        <th>Nom</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultats as $resultat): ?>
                        <tr>
                            <td><?php echo $resultat['ref_materiel']; ?></td>
                            <td><?php echo $resultat['nom_materiel']; ?></td>
                            <td><a href="updateMat.php">Modifier</a></td>
                            <td><a href="supprimerMat.php?ref=<?php echo $resultat['ref_materiel']; ?>">Supprimer</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <footer class="footer">
            <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/1200px-Logo_Nouvelle-Aquitaine_2019.svg.png" alt="logo"></a>
            <a href="https://www.education.gouv.fr/"><img src="images/2560px-Ministère-Éducation-Nationale-Jeunesse.svg.png" class="veste" alt="logo2"></a> 
        </footer>

    </body>
</html>

