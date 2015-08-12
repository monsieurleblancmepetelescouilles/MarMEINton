<?php

function checkPOST()
{
	if (isset($_POST['author']) && isset($_POST['title']) && isset($_POST['text']))
		return true;
	return false;
}


function insertNews()
{
	date_default_timezone_set('Europe/Paris');
	$today = date('Y-m-d', time());

	if (!checkPOST()) 
		return false;
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=marmiton', 'root', '');
		$bdd->query("SET NAMES 'utf8'");

	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

	$write = $bdd->prepare('INSERT INTO marmiton.news (Id, author, title, text, date) VALUES (NULL, :lepseudo, :letitre, :letext, :ladate);');
	$bool = $write->execute(array('lepseudo' => $_POST['author'], 'letitre' => $_POST['title'], 'letext' => $_POST['text'], 'ladate' => $today ));

	$write->closeCursor();

	return $bool;
	}










?>