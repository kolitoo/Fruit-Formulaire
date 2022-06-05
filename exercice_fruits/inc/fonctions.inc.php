<?php
    // il est conseillé de ne pas fermer la balise php lorsque l'on écrit que du php

    function calcul($fruit, $poids) {

        // au cas où, on transforme le fruit en minuscule car une majuscule pourrait être bloquante
        $fruit = strtolower($fruit);

        // mise en place d'une condition sur la valeur de $fruit pour récupérer son prix au kilo
        if ($fruit == 'cerises') {
            $prix_kg = 4.23;
        } elseif($fruit == 'pommes') {
            $prix_kg = 3.14;
        } elseif($fruit == 'kiwis') {
            $prix_kg = 5.09;
        } elseif($fruit == 'oranges') {
            $prix_kg = 2.84;
        } else {
            return 'Ce fruit n\'est pas  disponible<br>';
        }

        $resultat = round( ($poids * $prix_kg / 1000), 2);
        // round() permet d'arrondir une valeur, le deuxième argument représente le nombre de décimales acceptées

        // ucfirst() permet de passer la première lettre d'une chaine en majuscule        
        return 'Les ' . ucfirst($fruit) . ' coutent ' . $resultat . ' € pour un poids de ' . $poids . ' grammes<br>';
    }

    // pour l'exécuter
    // echo calcul('cerises', 500);

