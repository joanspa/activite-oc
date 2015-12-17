<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Mini-chat !</title>
	</head>
	<body>
		<h1>Mini-chat !</h1>
		<form action="minichat_post.php" method="post" accept-charset="utf-8">
			<p><label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" placeholder"Entrez votre pseudo ici..." <?php if(isset($_COOKIE['pseudo'])){ echo 'value='.$_COOKIE['pseudo'];}?> /></p>
			<p><label for="message">Message : </label><textarea name="message" id="message" cols="45" rows="6" placeholder"Entrez votre message ici..."></textarea></p>
			<p><input type="submit" value="Envoyer" /> <a href="minichat.php"><button type="button">Rafraichir</button></a></p>
		</form>

		<p>
			<?php
				/* Connexion à la Base de données */
				include('connexion_bdd.include.php');

				/* Requête SQL permettant de sélectionner les 10 derniers messages de la conversation */
				$req = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_creation, \'[%d/%m/%Y à %Hh%imin%ss]\') AS date FROM minichat ORDER BY id DESC LIMIT 0, 10');

				/* Boucle permettant d'afficher les 10 derniers messages de la conversation */
				while($donnees = $req->fetchObject())
				{
			?>
					<p>
						<?php echo $donnees->date; ?><strong> <?php echo htmlspecialchars($donnees->pseudo); ?></strong> : <?php echo nl2br(htmlspecialchars($donnees->message)); ?>
					</p>
			<?php
				}

				$req->closeCursor();
			?>
		</p>
	</body>
</html>