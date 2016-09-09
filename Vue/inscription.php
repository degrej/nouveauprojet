<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription</title>
    </head>

    <body>
        <h2>Page de test</h2>
        <form action="home.php" method="POST"> <!-- action permet de dire la page vers la quel on souhaite être redirigé. -->
            <p><label>Nom : </label><input type="text" name="nom" /></p>
            <p><label>Prénom <input type="text" name="prenom"/></label></p>
			<p><label>Adresse mail <input type="text" name="mail"/></label></p>
			<p><label>Mot de passe <input type="password" name="password"/></label></p>
			<p><label>Confirmer mot de passe <input type="password" name="confirm_password"/></label></p>
            <p><input type="submit"/></p>
        </form>
    </body>
</html>