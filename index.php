<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Le conditionnel en PHP</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images\favicon.png" />
        <!-- link rel="stylesheet" type="text/css" href="css\reset.css" /-- >  <!--Le reset ou normalize permet 
        de s'assurer que les navigateurs aient le même style de départ--> 
        <link rel="stylesheet" type="text/css" href="css\style.css" />    
         
    </head>
    <body>
        
    <?php

        /*
        echo '<h2>Opérateurs logiques</h2>';
        $vrai = true;
        $faux = false;
        echo '<pre>';
        echo 'ET logique : VRAI si les deux opérandes sont vraies<br>';
        echo '$vrai &amp;&amp; $vrai : '; var_dump($vrai && $vrai);
        echo '$vrai &amp;&amp; $faux : '; var_dump($vrai && $faux);
        echo '$faux &amp;&amp; $vrai : '; var_dump($faux && $vrai);
        echo '$faux &amp;&amp; $faux : '; var_dump($faux && $faux);
        echo '</pre>';

        echo '<pre>';
        echo 'OU logique : VRAI si les une des opérandes est vraie<br>';
        echo '$vrai || $vrai : '; var_dump($vrai || $vrai);
        echo '$vrai || $faux : '; var_dump($vrai || $faux);
        echo '$faux || $vrai : '; var_dump($faux || $vrai);
        echo '$faux || $faux : '; var_dump($faux || $faux);
        echo '</pre>';

        echo '<pre>';
        echo 'NON logique : inversion vrai / faux<br>';
        echo '!$vrai : '; var_dump(!$vrai);
        echo '!$faux : '; var_dump(!$faux);
        echo '</pre>';
        */


        // $test=false;
        /*
        $test = "avgvbrezbtzr";

        // Je ne rentre dans la condition que si $test est vrai

       /*  $test est faux si et seulement
            $test=false;
            $test=0;
            $test="";
            $test=null;
        * /
        if ($test) {
            echo "Je rentre bien dans la condition<br>";
        }
        echo 'Après la condition<br>';
        */

        /*
        //$message_erreur = "Il y a eu une erreur";
        $message_erreur = "";
        
        // On nomme une variable qui contiendra un message d'erreur s'il y a une erreur.
        // Si il y a une erreur, on affiche l'erreur, puis on coupe l'execution du programme
        if ($message_erreur) {
            echo $message_erreur;
            //die();
            exit(); // Coupe l'exection du script
        }
        echo 'Après la condition<br>';


        // Le point d'exclamation permet d'inverser le boolean.
            // Si $test est vrai, !$test est faux
            // Si $test est faux, !$test est vrai
        if (!$message_erreur){
            echo "congratulation, il n'y a pas eu d'erreur !<br>";
        }
        */
        

        // Forme complete du if
        /*
        $variable = 9;

        if ($variable == 1) {
            echo '$variable est égale à 1<br>';
        } elseif ($variable > 1) {
            echo '$variable est supérieure à 1<br>';
        } else {
            echo '$variable est inférieure à 1<br>';
        }
        */

        // Forme ternaire
        // 
        /*$nb = 1; 
        echo $nb .' stagiaire' . ($nb > 1 ? 's' : '') . '<br>';
        $resultat = ($test) ? 
                    ($resultatSiVrai) : 
                    ($resultatSiFaux);
        */
        /*
        $monnaie = 6;
        $fruit = ($monnaie <= 5) ? "mangue" : "orange";
        echo '$fruit opérateur ternaire : ' . $fruit . '<br>';
        if ($monnaie <= 5) {
            $fruit = "mangue";
        } else {
            $fruit = "orange";
        }
        echo '$fruit if/else : '  . $fruit . '<br>';
        */

        /*
        $test = 0;

        switch($test){
            case 0:
                echo "La variable $test est egale a 0<br>";
                break;
            case 1:
                echo "La variable $test est egale a 1<br>";
                break;
            case 2:
                echo "La variable $test est egale a 2<br>";
                break;
            case 3:
                echo "La variable $test est egale a 3<br>";
                break;
            case 4:
                echo "La variable $test est egale a 4<br>";
                break;
            default:
                echo "Ce nombre n'est pas compris entre 0 et 4<br>";
        }
        */

        echo '<p>';
        $aspirateur = true;
        echo "valeur \$aspirateur : # $aspirateur #<br>";
        echo 'valeur $aspirateur : '; var_dump($aspirateur); echo '<br>';
        echo 'valeur $aspirateur : ';
        if($aspirateur) echo 'vrai'; else echo 'faux';
        echo '<br>';
        echo 'valeur $aspirateur : ' . ($aspirateur ? 'vrai' : 'faux') . '<br>';


        echo '<p>';
        $aspirateur = false;
        echo "valeur \$aspirateur : # $aspirateur #<br>";
        echo 'valeur $aspirateur : '; var_dump($aspirateur); echo '<br>';
        echo 'valeur $aspirateur : ';
        if($aspirateur) echo 'vrai'; else echo 'faux';
        echo '<br>';
        echo 'valeur $aspirateur : ' . ($aspirateur ? 'vrai' : 'faux') . '<br>';

        echo '<p>';
        $aspirateur = true;
        echo 'L\'aspirateur ' . ($aspirateur ? 'a' : 'n\'a pas') . ' été passé.';

        echo '<p>';
        $aspirateur = false;
        echo 'L\'aspirateur ' . ($aspirateur ? 'a' : 'n\'a pas') . ' été passé.';

    ?>


    </body>
</html>