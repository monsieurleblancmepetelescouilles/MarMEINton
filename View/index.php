<?php

  include '../Include/header.php';
  include '../Model/class.php';

  echo 'Bonjour';

  $mec = new MarmitonUser("zedfg");

  //$mec->MarmitonUser::MarmitonUser("azeae");

  $mec->name = "Michel";

  echo " ".$mec->name;

  include 'recherche.php';

  echo '<div id="test">';

  include '../Include/news.php';

  echo '</div>';
  echo '<button type="button" onclick="show_prompt()">Change Content</button>';

  echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
  <br /><br /><br /><br /><br /><br /><br /><br /><br />';

  include '../Include/footer.php';
?>