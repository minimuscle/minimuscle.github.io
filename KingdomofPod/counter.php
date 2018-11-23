<?php

/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("countlog.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

?>
<!--<div style="margin-left: auto; margin-right: auto; text-align: center; padding-top: 4em; padding-bottom: 3em; background-color: #eeeeee;">-->
<!--<h1>Total Visitors</h1>-->
<!--<h2><?=$count?></h2>-->
<!--</div>-->

<?php
// opens countlog.txt to change new hit number
$datei = fopen("countlog.txt","w");
fwrite($datei, $count);
fclose($datei);

?>