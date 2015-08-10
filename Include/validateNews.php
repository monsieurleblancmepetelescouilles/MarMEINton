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
<?php

include '../Controller/DerController.php';

if (insertNews())
	echo 'Votre news à bien été publiée.';
else
	echo 'Echec de publication de votre news !';

?>