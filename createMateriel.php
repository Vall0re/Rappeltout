

<html>
    <head>
        <title>RappelMat | Ajouts Materiel</title>

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

        <!--Formulaire de création d'un matériel-->
        <div class="parentMat">
            <div class="div1Mat">
                <div class="divmatback">
                    <form method="post" action="verifMateriel.php">
                        <h2>Ajoutez un materiel</h2><br>
                        <label for="reference_materiel">Identifiant du materiel :</br></label>
                        <input type="text" autocomplete="off" id="reference_materiel" name="reference_materiel" required>
                        </br></br>
                        <label for="nom_mat">Nom du materiel :</br></label>
                        <input type="text" autocomplete="off" id="nom_materiel" name="nom_materiel" required>
                        </br></br>
                        <input type="submit" value="Ajoutez materiels"/>
                    </form>
                </div>
            </div>
            <div class="div2Mat">
                <div class="divmatback">
                    <form method="POST" action="rechercheMat.php">
                        <h2>Rechercher votre matériel par l'identifiant</h2></br>
                        <label for="valeur"> Identifiant: </label>
                        <input type="text" id="valeur" name="valeur" required></br></br>
                        <input type="submit" cursor="pointer" value="recherche" /></br>
                    </form>
                </div>
            </div>
            <div class="div3Mat">
                <div class="divmatback">
                    <form method="POST" action="gestionMateriel.php">
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