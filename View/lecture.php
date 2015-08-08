<?php

include '../Include/header.php';

	echo'<section><div id="article">';


	if(isset($_GET['news']))
	{

		//retransformation pour recuperer les espaces, puis test avec le nom et le champ de la bdd

$newsId = $_GET['news'];

/*
	for($i=0; $i<strlen($TitreActuel); $i++)
	{
		if($TitreActuel[$i]==='-')
		{
			$TitreActuel[$i] = ' ';
		}

	}*/




		try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=marmiton', 'root', '');
	}
		catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}


	$bdd->query('SET NAMES UTF8');
	$lanews = $bdd->prepare('SELECT * FROM news WHERE id = :leid');

	$lanews->execute(array('leid'=>$newsId) );


if($bool = $lanews->fetch())
{

	$DateDeLaNews = preg_replace('#([0-9]{4})-([0-9]{2})-([0-9]{2})#', '$3/$2/$1', $bool['date']);



	echo '<div id="news"> <div id="titrenews"> <h3>' . $bool['title'].'</h3> </div> <br \>'; 
	echo '	<div id="infonews">Rédigé le : <strong>'.$DateDeLaNews.'</strong>, par : <strong>'.$bool['author'].'</strong> </div> <hr /> ';
	echo ' <textenews>'.$bool['text'].'</textenews>';
	echo ' </div>';




}
else
{

	echo 'Cette news n\'existe pas !!<br \>';
}







	
}//if isset
else
{
	echo 'Aucune news n\'a été choisie !<br \>';
}
	



	echo '<button type="button" class="btn btn-info" onclick="retourIndex()">Retour</button>';

	echo '</div></section>';



include '../Include/footer.php';

?>