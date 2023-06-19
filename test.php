<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $identifiant = $_POST['identifiant'];
    $motdepasse = $_POST['motdepasse'];

    // Vérifier les identifiants (exemple simplifié)
    if ($identifiant === 'utilisateur' && $motdepasse === 'motdepasse') {
        // Authentification réussie, rediriger vers la page d'accueil
        header('Location: accueil.php');
        exit;
    } else {
        // Identifiants invalides, afficher un message d'erreur
        $erreur = "Identifiant ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Page de Connexion</title>
</head>

<body>
    <h1>Connexion</h1>

    <?php if (isset($erreur)) : ?>
        <p style="color: red;"><?php echo $erreur; ?></p>
    <?php endif; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="identifiant">Identifiant :</label>
            <input type="text" id="identifiant" name="identifiant" required>
        </div>

        <div>
            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="motdepasse" required>
        </div>

        <div>
            <input type="submit" value="Se connecter">
        </div>
    </form>

    <p><a href="resetpassword.php">Réinitialiser mon mot de passe</a></p>
</body>

</html>