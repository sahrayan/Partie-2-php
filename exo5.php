
<?php
$nomsInput = array("Nom","Prénom","Ville");
echo afficherInput($nomsInput);
function afficherInput($nomsInput){
    foreach($nomsInput as $name){
        $resultat.= "<label for='$name'><br>$name</label><br>
        <input type='text' name= $name<br>";
    }
    return $resultat;
}


?>

<thead>
<meta charset="utf-8" />
<title>
Formulaire html
</title>
</thead>
<tbody>
<form action="reponse.php" method="GET"><br>
Votre Nom :<input type="text" name="nom"><br>
Votre Prénom :<input type="text" name="prénom"><br>
Votre Ville :<input type="text" name="ville"><br>
<p>
<input type=submit value="Envoyer">
</form>
</tbody>