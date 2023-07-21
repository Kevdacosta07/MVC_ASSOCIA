<section class="hero is-info has-text-centered">
    <div class="hero-body">
        <p class="title">
            Créer un événement
        </p>
        <p class="subtitle">
            Partager votre événement à tous les membres!
        </p>
    </div>
</section>

<?php if(isset($error))
{


    echo '<div class="is-flex is-justify-content-center mt-6">';
    if ($error == "success")
    {
        echo '<p class="pt-0 p-5 card has-background-primary has-text-white">Événement créé!</p>';
        header("refresh: 2; url=../../association/events");
    }

    else
    {
        echo '<p class="pt-0 p-5 card has-background-danger has-text-black">'.$error.'</p>';
    }
    echo '</div>';
}

?>

<form class="p-6 is-flex is-flex-direction-column is-align-items-center is-justify-content-center" method="post" action="">
    <div class="card m-3" style="width: 30%">
        <header class="card-header has-background-info-dark">
            <p class="card-header-title is-size-4 is-centered has-text-light">Votre événement</p>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label" for="lastname">Titre de l'événement</label>
                    <div class="control">
                        <input class="input" type="text" name="title" placeholder="Titre de l'événement" value="<?php if (isset($_POST["title"])) {echo $_POST["title"];} ?>">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="firstname">Description de l'événement</label>
                    <div class="control">
                        <textarea class="textarea" name="content" placeholder="Description"><?php if (isset($_POST["content"])) {echo $_POST["content"];} ?></textarea>
                    </div>
                </div>

            </div>
        </div>
        <footer class="card-footer control">
            <button class="button card-footer-item is-primary" type="submit"><strong>Créer</strong></button>
        </footer>
    </div>
</form>