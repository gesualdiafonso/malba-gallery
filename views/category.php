<?php 

// $obras = Obras::categoria($filter);

$categoriaFormatada = Obras::formataCategoria($filter);


// echo "<pre>";
// print_r($obras);
// echo "</pre>";

?>
<section>
    <h2>Nuestra sección de <strong><?= $categoriaFormatada ?></strong></h2>
    <div class="line-decor"></div>
    <div class="uk-child-width-1-4 uk-grid-small uk-margin-auto" uk-grid>

        <?php foreach($obras as $obra) {?>
            <div class="uk-card uk-card-defaul uk-card-body uk-card-hover uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-padding uk-align-center">
                <div class="uk-card-media-top uk-text-center">
                    <img  class="img-card" src="<?= $obra->getImage(); ?>" alt="<?= $obra->getName() . ", " . $obra->getInforme(); ?>">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title"><?= $obra->getTitle(); ?></h3>
                    <div class="">
                        <h4><?= $obra->getAuthor(); ?></h4>
                        <p><?= $obra->getDescription(); ?></p>
                    </div>
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
</section>
