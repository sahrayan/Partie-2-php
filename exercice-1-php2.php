<style>
    .red {
        color: red;
    }    
</style>

<?php
$text = "Mon texte en paramètre";

 echo convertirMajRouge($text);

function convertirMajRouge($text) {

    $maj = mb_strtoupper($text); // convertir en maj
    $maj = "<p class='red'>". $maj. "</p>"; // modifie la couleur  en utilisant CSS 'red'
    return $maj; //renvoie le resultat 

}
?>