<?php
$elements = array("choix 1","choix 2","choix 3");
alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements){
    
   foreach($elements as $value)
   {
   echo '<input type="checkbox" name="'.$value.'">'.$value.'</option><br>';
   }

}
?>
