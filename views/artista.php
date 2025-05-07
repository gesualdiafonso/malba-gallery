<?php
// $artista = Artista::artista_ids($artistaSelecionado);

// $artist = Artista::artista_ids($artistaSelecionado);

// echo "<pre>";
// print_r($artista);
// echo "</pre>";



$artistaName = Artista::getTitleById($artistaSelecionado);

// echo "<pre>";
// print_r($artistaName);
// echo "</pre>";

$obrasArtista = Obras::galeriaPorAutor($artistaSelecionado);

// echo "<pre>";
// print_r($artistaName);
// echo "</pre>";

?>

<section class="uk-section artista-section uk-padding">
    <div class="uk-grid-large uk-flex-middle" uk-grid>
        <div class="uk-width-1-1 uk-width-1-3@s artista-img">
            <img class="uk-border-rounded" src="<?= $artista->getImage(); ?>" alt="<?= $artista->getTitle(); ?>">
        </div>
        <div class="uk-width-1-1 uk-width-2-3@s">
            <h2 class="uk-heading-bullet"><?= $artistaName; ?></h2>
            <p class="uk-text-muted"><?= $artista->getBiografia(); ?></p>
            <span class="uk-text-warning"><?= $artista->getEstilo(); ?></span>
            <p class="uk-text-meta"><?= $artista->getCritica() ?></p>
        </div>
    </div>
    <div class="uk-slider-container-offest uk-padding" uk-slider>
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                <div class="uk-slider-items uk-child-width-1-3@s uk-grid">
                <?php foreach($obrasArtista as $obra) {?>
                    <div class="uk-card uk-card-body uk-card-hover uk-padding">
                        <div class="uk-card-media-top uk-text-center">
                            <img class="img-card" src="<?= $obra->getImage(); ?>" alt="<?= $obra->getName() . ", " . $obra->getInforme(); ?>">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title"><?= $obra->getTitle(); ?></h3>
                            <p><?= $obra->getDescription(); ?></p>
                            <span><?= $obra->getPublication(); ?></span>
                            <span><?= $obra->getAuthor(); ?></span>
                            <div class="uk-width-auto uk-text-center uk-align-center">
                                <span class="uk-h3 uk-text-warning"><?= $obra->getFormattedPrice(); ?></span>
                            </div>
                            <div class="uk-width-auto uk-text-center">
                                <a class="uk-button uk-button-text" href="index.php?section=producto&id=<?= $obra->getId() ?>">Comprar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover control" href uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover control" href uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </div>
</section>