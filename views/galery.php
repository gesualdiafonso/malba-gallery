<?php 
// require_once("includes/utilities/controllers/Obras.php");

// require_once 'includes/utilities/controllers/Obras.php';


// $miObjeto = new Obras();

// $galeriaCompleta = $miObjeto->galeria_completa();

// echo "<pre>";
// print_r($galeriaCompleta);
// echo "</pre>";

// $galeriaCompleta = Obras::galeria_completa();


?>

<section>
    <h2 class="title-galery">Galeria de Colección, Artes, Esculturas, Posters, Ventas...</h2>
    <div class="line-decor"></div>
    <div class="uk-child-width-1-4 uk-grid-small uk-margin-auto" uk-grid>

        <?php foreach($galeriaCompleta as $obra) {?>
            <div class="uk-card uk-card-defaul uk-card-body uk-card-hover uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-padding uk-align-center">
                <div class="uk-card-media-top uk-text-center">
                    <img class="img-card" src="<?php echo $obra->getImage(); ?>"  alt="<?php echo $obra->getName() . ", " . $obra->getInforme(); ?>">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title"><?php echo $obra->getTitle(); ?></h3>
                    <p><?php echo $obra->getDescription(); ?></p>
                    <div>
                        <span><?php echo $obra->getPublication(); ?></span>
                        <span><?php echo $obra->getAuthor(); ?></span>
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