<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title><?php if(isset($title)) {echo $title;} else {echo "Associa";} ?></title>
</head>
<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/main">
            <span class="tag has-background-primary-light is-medium m-2">Associa</span>
        </a>
    </div>

    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/association">
                Mon Association
            </a>

            <a class="navbar-item" href="/association/events">
                Événements
            </a>

            <?php
            if (isset($_SESSION["assoc"]["isAdmin"]))
            {
                echo '<a class="navbar-item" href="/association/members">Membres</a>';
                echo '<a class="navbar-item" href="/association/parametres">Paramètres</a>';
            }
            ?>
        </div>
    </div>
    <div class="navbar-end">
        <div class="navbar-item">
            <div class="buttons">
                <?php
                if (isset($_SESSION["user"]))
                {
                    echo "<a class='button is-info' href='/users/profile'>".$_SESSION["user"]["firstname"]." ".$_SESSION["user"]["lastname"]."</a>";

                    if (isset($_SESSION["user"]["superAdmin"]))
                    {
                        echo "<a class='button is-danger' href='/admin'>Admin</a>";
                    }
                }

                else
                {
                    echo "<a class='button is-info' href='/users/login'>Connexion</a>";
                }
                ?>
            </div>
        </div>
    </div>
</nav>

<?= $content ?>

