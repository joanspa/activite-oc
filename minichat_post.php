<?php
	/* Connexion à la Base de données */
	include('connexion_bdd.include.php');
	
	/* Si les données sont valides, on effectue la requete SQL */
	if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
	{
		/* Requete SQL préparée permettant d'ajouter le nouveau message posté en se préservant des failles */
		$requete = $bdd->prepare('INSERT INTO minichat(pseudo, message, date_creation) VALUES (:pseudo, :message, NOW())');
		$requete->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
		$requete->bindParam(':message', $_POST['message'], PDO::PARAM_STR);
		$requete->execute();

		/* On crée un cookie permettant de retenir le pseudo (durée de vie de 10 minutes) */
		setcookie('pseudo', $_POST['pseudo'], time() + 600);
	}
	/* On redirige l'utilisateur vers la page du chat avec son message ajouté dans la conversation */	
	header('Location: minichat.php');

?>