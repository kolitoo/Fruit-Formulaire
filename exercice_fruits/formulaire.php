<?php 
include 'inc/fonctions.inc.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire 2</title>

    <!-- google fonts : roboto et playfair display-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulaire Calcul fruits</h1>
    <div class="conteneur">
        <form method="POST" action="" >
            <label for="fruit">Merci de choisir un fruit</label>
            <select name="fruit" id="fruit">
                <option>Cerises</option>
                <option>Kiwis</option>
                <option>Pommes</option>
                <option>Oranges</option>
            </select><br><br>

            <label for="poids">Merci de saisir un poids</label>
            <input type="text" name="poids" id="poids" value=""><br><br>

            <hr>
            <input type="submit" id="valider" value="Calculer">
        </form>
        <hr>
        <?php 
            // var_dump($_POST);
            if (isset($_POST['fruit']) && isset($_POST['poids'])) {
                $fruit = trim($_POST['fruit']);
                $poids = trim($_POST['poids']);
                $poids = str_replace(',', '.', $poids);
                $poids = str_replace(' ', '', $poids);

                if(is_numeric($poids)) {
                    echo calcul($fruit, $poids);
                } else {
                    echo '<div class="erreur">Attention, le poids doit être numérique</div>';
                }
                
            }
        
        
        ?>
    </div>
</body>
</html>
