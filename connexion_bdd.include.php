<?php
/* Requête permettant de se connecter à la base de données */
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=openclassrooms;charset=utf8', 'root', '' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>