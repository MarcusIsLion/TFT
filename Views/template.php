<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="public/css/main.css" />
    <link rel="stylesheet" href="public/css/UnitCard.css" />
    <link rel="stylesheet" href="public/css/Bdn.css" />
    <link rel="stylesheet" href="public/css/Form.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->e($title) ?></title>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="?" class="nav-item">Accueil</a></li>
                <li class="nav-item">
                    Unités
                    <div class="dropdown">
                        <a href="?action=add-unit">Ajouter une unité</a>
                        <a href="?action=display-all-units">Afficher toutes les unités</a>
                    </div>
                </li>
                <li class="nav-item">
                    Origine
                    <div class="dropdown">
                        <a href="?action=add-origin">Ajouter une origine</a>
                    </div>
                </li>
                <li><a href="?action=search" class="nav-item">Search</a></li>
            </ul>
        </nav>
    </header>
    <!-- #contenu -->
    <main id="contenu">
        <?= $this->section('content') ?>
    </main>
    <footer>

    </footer>
</body>

</html>