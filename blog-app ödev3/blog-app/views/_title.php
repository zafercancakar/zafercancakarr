<?php
    $data = getData();
    $activeMovies = array_filter($data["movies"], function($movie) {
        return $movie["is-active"];
    });
    $ozet = count($data["categories"]).' kategoride '.count($activeMovies).' film listelenmiştir';
    echo $ozet;
    const baslik = "Popüler Filmler";
    ?>
?>
    
<h1 class="mb-4"><?php echo baslik?></h1>
<p class="text-muted">
    <?php echo $ozet?>
</p>