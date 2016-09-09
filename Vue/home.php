<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Acceuil</title>
    </head>

    <body>
        <h2>Page d'acceuil</h2>
        <p>Bonjour 
			<?php 
				echo htmlspecialchars($_POST['prenom']); 
				// permet de récupérer le prénom de la page d'avant. récupération de ce qui est dans le name du form
			?>
		</p>
        <?php
            if (isset($_POST['contact']))
            {
                echo '<p>Vous avez accepté d\'être contacter par notre site, et nous vous en remercions.</p>';
            }
            else
            {
                echo '<p>Vous n\'avez pas accepté d\'être contacter par notre site, quel dommage.</p>';
            }
        ?>
    </body>
</html>