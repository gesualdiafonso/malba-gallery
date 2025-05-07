<?php

if (isset($_GET['id'])) {
    $obraId = (int) $_GET['id']; // segurança: sempre converta para inteiro
} else{
    echo "<p>ID seleccionado no fue encontrado.</p>";
}

$obrasId = Obras::galeria_id($obraId);


?>

<section>
    <div class="card">
        <div class="card-image">
            <img class="card-img" src="<?= $obrasId->getImage(); ?>" alt="">
        </div>
        <div>
            <div class="body-card">
                <h2 class="card-title"><?= $obrasId->getTitle(); ?></h2>
                <p class="card-descrpt"><?php echo $obrasId->getDescription() . " " . "De" . " " . $obrasId->getAuthor(); ?></p>
                <h3 class="card-publi"><?= $obrasId->getPublication(); ?></h3>
                <span class="uk-h3 uk-text-warning"><?= $obrasId->getFormattedPrice(); ?></span>
            </div>
            <div class="card-links">
                <a class="uk-button uk-button-text" href="index.php?section=artista&artist=<?= $obrasId->getArtista() ?>">Ver mas...</a>
                <a class="uk-button uk-button-text" href="index.php?section=envio">Comprar</a>
            </div>
        </div>
    </div>
</section>
