<?php

//echo '<div id="divNews">';






					echo'<section><div id="article">';





						try
{
	$bdd = new PDO('mysql:host=localhost;dbname=marmiton', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


	$bdd->query('SET NAMES UTF8');
$check = $bdd->query('SELECT * FROM news');



while($listingDesNews = $check->fetch())
{

	$DateDuLaNews = preg_replace('#([0-9]{4})-([0-9]{2})-([0-9]{2})#', '$3/$2/$1', $listingDesNews['date']);

	$TitreActuel = $listingDesNews['title'];


	for($i=0; $i<strlen($TitreActuel); $i++)
	{
		if($TitreActuel[$i]===' ')
		{
			$TitreActuel[$i] = '-';
		}

	}

	$TexteLimite = $listingDesNews['text'];

if(strlen($listingDesNews['text']) >= 320)
{

	$TexteLimite = substr( $listingDesNews['text'], 0, 320)."...";

}



	echo '<div id="news"> <div id="titrenews"> <a href = "lecture.php?news='.$listingDesNews['id'].'"> <h3>' . $listingDesNews['title'].'</h3> </a></div> <br \>'; 
	echo '	<div id="infonews">Rédigé le : <strong>'.$DateDuLaNews.'</strong>, par : <strong>'.$listingDesNews['author'].'</strong> </div> <hr /> ';
	echo ' <textenews>'.$TexteLimite.'</textenews>';
	echo ' </div>';

}

			




			?>



                </div>



            			<div id="buttonNewNews">

				<button align= "center"  onclick="toggleNewNews()">Nouvelle news !</button>

			</div>




                
            </section>







            <script type="text/javascript">


           


            </script>

