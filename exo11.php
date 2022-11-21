
<?php

$date="27-01-2004";

$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo $formatter->format(date_create($date))."<br>";


?>
