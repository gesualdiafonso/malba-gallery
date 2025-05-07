<?php 

$artistas = Artista::artistas();

?>

<section class="uk-flex uk-flex-column uk-flex-row@m">
    <div class="uk-width-1-1@s uk-width-1-2@l uk-padding uk-padding-small uk-padding-remove-vertical">
        <h2 class="uk-heading-line uk-text-center uk-margin-small-top title">Bienvenido a un proyecto MALBA</h2>
        <p>Nuestra meta es expandir el alcance de arte latino-americana al ofrecer una plataforma digital exclusiva para la comercialización de las obras de artistas locales.</p>
        <p>El e-commerce del MALBA tiene como propósito de valorizar y brindar visibilidad a nuevas expressões artísticas, conectando talentos emergentes y estabelecidos al público.</p>
        <p>Esta iniciativa fortalece nuestro ecosistema cultura, promoviendo el reconocimiento y la sustentabilidad de producciones artísticas en Argentina.</p>
    </div>
    <div class="uk-width-1-1@s uk-width-1-2@l uk-padding uk-text-center">
        <img class="uk-box-shadow-hover-xlarge uk-box-shadow-hover-xlarge" src="public/images/artistas.jpg" alt="Artistas Reconocidos Argentinos, Christian Montenegro, XUl Solar, Ad Minoliti y Antonio Berni">
    </div>
</section>
<section class="uk-align-center uk-padding">
    <h2 class="uk-text-center">Valor del Proyecto</h2>
    <p>El comercio electrónico del MALBA amplía el acceso al arte ofreciendo un espacio seguro para la comercialización de obras originales. Además de apoyar económicamente a los artistas locales, la plataforma pone en contacto a coleccionistas y aficionados con la producción artística argentina, reforzando el compromiso del museo con la preservación y el crecimiento de la escena cultural latinoamericana.</p>
</section>
<section class="carousel">
    <div class="uk-padding">
        <h2 class="uk-heading-medium artist-title uk-text-line uk-text-left uk-padding-large uk-padding-remove-horizontal">Nuestros artistas</h2>
        <div class="uk-slider-container-offest" uk-slider>
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                <div class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                    
                    <?php foreach ($artistas as $authores) : ?>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body card-body">
                                <img class="img-card-artist uk-text-center" src="<?= $authores->getImage() ?>" alt="<?= $authores->getTitle() ?>">
                                <h3 class="uk-card-title uk-text-center"><?= $authores->getTitle() ?></h3>
                                <p class="uk-text-default uk-padding-large uk-padding-remove-horizontal"><?= $authores->biografia_reducida()?></p>
                                <a class="uk-button uk-button-text" href="index.php?section=artista&artist=<?= $authores->getId() ?>">Ver mas...</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover control" href uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover control" href uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>
    </div>
</section>