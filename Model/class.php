<?php


class MarmitonUser
{

	public $name;
	public $email;

	public function MarmitonUser($nom)
	{
		$name = $nom;


	}
}

class News
{
	public $author;
	public $title;
	public $text;
	public $date;

	public function News($nom, $titre, $texte, $datePublication)
	{
		$author = $nom;
		$title = $titre;
		$text = $texte;
		$date = $datePublication;
	}
}







?>