<?php
require_once 'functions.php';
require_once 'model/database.php';

$id = $_GET["id"];

$categorie = getEntity("categorie", $id);
$liste_photos = getAllPhotosbyCategorie($id);

getHeader($categorie["titre"], "Description de la catégorie"); ?>

<header>
    <div class="row col_center">
        <?php getMenu(); ?>
    </div>
</header>

<main class="container">

    <h1>Catégorie : <?php echo $categorie["titre"]; ?></h1>
    
    <section id="photos">
        <div id="photos_content" class="row col_center">
            <?php foreach ($liste_photos as $photo) : ?>
                <?php include 'include/photo.inc.php'; ?>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<?php getFooter(); ?>