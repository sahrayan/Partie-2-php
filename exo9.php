<?php
$elements = array("Masculin","Féminin","autre");
alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements){
    echo "<fieldset>";
   foreach($elements as $value)
   {
   echo '<input type="radio" id="'.$value.'" name="'.$value.'" value="'.$value.'"  >'.$value.'</option><br>';
   
   }
echo "</fieldset>";
}
?>
