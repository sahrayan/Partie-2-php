<?php
$elements = array("Monsieur","Madame","Mademoiselle");
$zeub = array("rayan","toi","moi");
alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements){
    
   foreach($elements as $value)
   {
   echo '<input type="checkbox" name="'.$value.'">'.$value.'</option><br>';
   }

}
?>
