<?php
if (isset($_POST['add']) == 'Ajouter un article'){    
    print_r($_POST);
    echo $_POST['name'];
    foreach ($_POST as $key => $val){
        if (isset($key) && $key !== 'add'){
            $to_add[$key] = $_POST[$key];
        }
    }
    print_r($to_add);
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gerer le site</title>
    <link rel = "stylesheet"
    type = "text/css"
    href = "back.css" />
</head>
<body>
        <!-- <div id="left-col">
                <a href="#">Categorie 1</a>
                <a href="#">Categorie 2</a>
                <a href="#">Categorie 3</a>
                <a href="#">Categorie 4</a>
                <a href="#">Categorie 5</a>
                
        </div> -->
    <div id="top_bar">
            <a href="index.html">Homepage</a>
    </div>
   
    <div id="full_body">
                    <div class="header">
                             <ul class="menu">
                                <li class="dropdown"><span>Mon compte</span>
                                    <ul class="features-menu">
                                        <li><a href="#">Voir mon compte</a></li>
                                        <li><a href="#">Se deconnecter</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Categories</span>
                                    <ul class="features-menu">
                                        <li><a href="add_article.html">Ajouter des articles</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Statistiques</span>
                                    <ul class="features-menu">
                                        <li><a href="#">Statistiques utilisateurs</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Contacts</span>
                                    <ul class="features-menu">
                                        <li><a href="#">Messages utilisateurs</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
    <div id="middle-col">
            <div class="login-page">
                    <div class="form">
                        <form class="login-form" action="#" method="POST">
                            <p>Nom de l'article : </p><input type="text" name="name">
                            <p>Categories : </p>Homme<input type="checkbox" name="Homme" value="check">
                            Femme<br><input type="checkbox" name="Femme" value="check"> 
                            Chaussures<br><input type="checkbox" name="Chaussures" value="check">
                            Vestes<br><input type="checkbox" name="Vestes" value="check">
                            Pull <br><input type="checkbox" name="Pull" value="check">
                            <p>Prix de l'article : </p><input type="number" name="price" min="1" max="999">
                            <p> Photo : </p>
                            <p>Description de l'article : </p><input type="text" name="desc">

                            <input id = "login" type="submit" name="add" value ="Ajouter un article">
                        </form>
                    </div>
                </div>
    </div>
</div>
    </body>
</html>                     