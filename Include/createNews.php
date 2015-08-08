<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>MEIN MARMITON</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="../View/css/mein.css">
<link href="../View/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<script type="text/javascript" charset="utf-8" src="../View/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" charset="utf-8" src="../View/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="../View/js/user.js"></script>
<script type="text/javascript" charset="utf-8" src="../View/js/jquery-2.1.3.min.js"></script>

</head>

<!-- MENU ?? -->




<form id="createNewsForm" action="validateNews.php" method="POST">

		<label> Auteur : <input type="text" name="author" id="newsAuthor" class="form-control" placeholder="Nom" required></label> <br \>
		<label> Titre : <input type="text" name="title" class="form-control" id="newsTitle" placeholder="Titre" required></label> <br \>
		
		<label> Texte : <textarea name="text" class="form-control" rows="6" cols="42" id="newsText" required></textarea></label> <br \>
		<button type ="submit" id = "opentoast" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-envelope"></span> Envoyer</button> 

		<button type = "reset" class="btn btn-warning btn-xs">Effacer</button>

</form>