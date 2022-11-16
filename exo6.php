

<?php
$elements = array("Monsieur","Madame","Mademoiselle");
$zeub = array("rayan","toi","moi");
alimenterListeDeroulante($elements);
alimenterListeDeroulante($zeub);
function alimenterListeDeroulante($elements){
    echo "<select>";
   foreach($elements as $value)
   {
   echo '<option value='.$value.'>'.$value.'</option>';
   }
   echo "</select>";
}
?>

