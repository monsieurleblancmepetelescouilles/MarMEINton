<?php

include '../Include/header.php';
include '../Model/class.php';


echo 'Bonjour';

$mec = new MarmitonUser("zedfg");

//$mec->MarmitonUser::MarmitonUser("azeae");

$mec->name = "Michel";

echo " ".$mec->name;


include 'recherche.php';

echo '<div id="test">On test des trucs</div> <button type="button" onclick="loadXMLDoc()">Change Content</button>';


echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br />';













include '../Include/footer.php';
?>