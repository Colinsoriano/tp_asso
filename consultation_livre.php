<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Tp association</title>
</head>

<body class="text-bg-dark">

    <?php
    include 'biblio.php';
    ?>

    <header class=" text-center"><a href="index.html" title="Bienvenu sur l'intranet de votre association préférée"><img src=" bandeau_top.jpg"></a>
    </header>

    <div class="container">
        <div class="m-3 text-center row">
            <div class="dropdown col">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Accès membre
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="devenir_mbre.html">Inscription</a></li>
                    <li><a class="dropdown-item" href="esp_mbre.html">Connexion</a></li>
                </ul>
            </div>

            <div class="dropdown col">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Espace non membre
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="consultation_livre.php">Consultation des livres</a></li>
                    <li><a class="dropdown-item" href="recherche_livres.html">Recherche de livre</a></li>
                </ul>
            </div>

            <div class="dropdown col">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Espace membre
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="esp_mbre.html">Ajout de livres</a></li>
                    <li><a class="dropdown-item" href="esp_mbre.html">Modification livre</a></li>
                    <li><a class="dropdown-item" href="esp_mbre.html">Suppression livre</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <p>Consulter les livres</p>
        <?php
        $livre = $db->prepare('SELECT * FROM livre');
        $livre->execute();
        $livre = $livre->fetchAll();
        print_r(array_keys($livre[0]));
        $colomnname = array_keys($livre[0]);
        ?>

        <table>
            <thead>
                <tr>
                    <?php for ($i = 0; $i < count($colomnname); $i++) : ?>
                        <td><?php $colomnname[$i]; ?></td>
                    <?php endfor; ?>
                </tr>
            </thead>
        </table>
    </div>



    <!-- <footer class="text-center">Bandeau footer</footer> -->
</body>

</html>