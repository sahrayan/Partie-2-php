
<?php
setlocale(LC_Time, 'fr_FR');
date_default_timezone_set('Europe/Paris');
$date="27-01-2004";

$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
echo $formatter->format(date_create($date))."<br>";


?>
