<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="css/error.css">
    <title>Error ... </title>
</head>
<body>
    <section>
        <img src="images/error.png"/>
        <?php
            if(isset($_GET['login_error']))
            {
                echo "Identifiant ou mot de passe incorect !";
                echo "<br/>";
                echo "<br/>";
                echo "<br/>";
                echo "<button><a href='form_connexion.php'>Retour</a></button>";
            }
            elseif(isset($_GET['login_doesnt_exists']))
            {
                echo "Ce compte n'existe pas !";
                echo "<br/>";
                echo "<br/>";
                echo "<br/>";
                echo "<button><a href='form_connexion.php'>Retour</a></button>";
            }
            elseif(isset($_GET['login_already_exists']))
            {
                echo "Identifiant déjà utilisé !";
                echo "<br/>";
                echo "<br/>";
                echo "<br/>";
                echo "<button><a href='form_registration.php'>Retour</a></button>";
            }
            elseif(isset($_GET['different_password']))
            {
                echo "Les mots de passe ne sont pas identiques !";
                echo "<br/>";
                echo "<br/>";
                echo "<br/>";
                echo "<button><a href='form_registration.php'>Retour</a></button>";
            }
            elseif(isset($_GET['extension']))
            {
                echo "L'extension de l'image n'est pas autorisée !";
                echo "<br/>";
                echo "<br/>";
                echo "<br/>";
                echo "<button><a href='personal_space.php'>Retour</a></button>";
            }
            elseif(isset($_GET['size']))
            {
                echo "L'image est trop lourde !";
                echo "<br/>";
                echo "<br/>";
                echo "<br/>";
                echo "<button><a href='personal_space.php'>Retour</a></button>";
            }
            elseif(isset($_GET['upload']))
            {
                echo "Une erreur est survenue durant l'envoi de l'image !";
                echo "<br/>";
                echo "<br/>";
                echo "<br/>";
                echo "<button><a href='MySpace.php'>Retour</a></button>";
            }
        ?>
    </section>
</body>
</html>