<?php


function afficherInput($nomsInput){
    $resultat = "";
    foreach($nomsInput as $name){
        $resultat .= "<label for='$name'><br>$name</label><br>
        <input type='text' name=$name><br>";
    }
    return $resultat;
}
function alimenterListeDeroulante($elements){
    echo "<br><select>";
   foreach($elements as $value)
   {
   echo '<option value='.$value.'>'.$value.'</option>';
 
   }
   echo "</select>";
   
}
echo "<form>";
$nomsInput = array("Nom","Prénom","Adresse mail","Ville","Sexe");
echo afficherInput($nomsInput);
$elements = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");
alimenterListeDeroulante($elements);
echo '<br><input type="button" value="Validé"/>';
echo "</form>";


?>