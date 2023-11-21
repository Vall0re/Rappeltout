<?php
    require 'connexBD.php';
    require 'listmatsansdoc.php';
?>

<html>
    <head>
        <title>RappelMat | Ajouts Document</title>

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

        <div class="parentMat">
            <div class="div1Mat">
                <div class="divmatback">
                    <form method="post" action="verifDocument.php">
                        <h2>Ajoutez un document</h2></br>
                        <label for="date_exp">Date du rappel :</label>
                        <input type="date" id="date_exp" name="date_exp" required></br></br>

                        <label for="ref_materiel">Numero du materiel :</br></label>
                            <select id="ref_materiel" name="ref_materiel">
                                <option value="">*No Materiel*</option>
                                <?php if (!empty($doc)) : //Affichage de la liste des rappels 
                                foreach ($doc as $docs) : ?>
                                <option value="<?php echo $docs["ref_materiel"];?>"><?php echo $docs["nom_materiel"];?></option>
                                <?php endforeach; ?>
                                <?php else : ?>
                                    <div>Aucun doc de documents sur les materiaux , vous êtes à jour !</div>
                                <?php endif; ?>
                                </br>
                            </select></br>
                        <input type="submit" value="Créer" /></br>
                    </form>
                </div>
            </div>

            <div class="div2Mat">
                <div class="divmatback">
                    <form method="POST" action="rechercheDoc.php">
                        <h2>Rechercher votre document par l'identifiant</h2></br>
                        <label for="valeur"> Identifiant: </label>
                        <input type="text" id="valeur" name="valeur" required></br></br>
                        <input type="submit" cursor="pointer" value="recherche" /></br>
                    </form>
                </div>
            </div>
            <div class="div3Mat">
                <div class="divmatback">
                    <form method="POST" action="gestionDocument.php">
                        <h2>Gérer vos données</h2></br>
                        <input type="submit" cursor="pointer" value="Gestion ->" /></br>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer">
            <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/1200px-Logo_Nouvelle-Aquitaine_2019.svg.png" alt="logo"></a>
            <a href="https://www.education.gouv.fr/"><img src="images/2560px-Ministère-Éducation-Nationale-Jeunesse.svg.png" class="veste" alt="logo2"></a> 
        </footer>
        
    </body>
</html>