<?php
$date = new DateTime('2017-7-15', new DateTimeZone('Asia/Jakarta'));
echo $date->format('Y-m-d H:i:sP') . "\n";

$date->setTimezone(new DateTimeZone('Asia/Jakarta'));
echo $date->format('Y-m-d H:i:sP') . "\n";
?>

<?php
$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));
?>