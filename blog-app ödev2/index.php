<?php

$kategori = array("Macera", "Dram", "Komedi", "Korku", "Bilim Kurgu");

$filmler = array(
    "1" => array(
        "baslik" => "Paper Lives",
        "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim" => "1.jpeg",
        "yorumSayisi" => "0",
        "begeniSayisi" => "Beğeni: 85",
        "vizyon" => true,
        "url" => "Paper-Lives"
    ),
    "2" => array(
        "baslik" => "Walking Dead",
        "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim" => "2.jpeg",
        "yorumSayisi" => "55",
        "begeniSayisi" => "0",
        "vizyon" => false,
        "url" => "Walking-Dead"
    )
    // Daha fazla film eklenebilir
);

function filmEkle(&$filmler, string $baslik, string $aciklama, string $resim, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $vizyon = false, string $url = "demo")
{
    $filmler[] = array(
        "baslik" => $baslik,
        "aciklama" => $aciklama,
        "resim" => $resim,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "vizyon" => $vizyon,
        "url" => $url
    );
}

filmEkle($filmler, "Yeni Film 1", "ilk açıklama", "1.jpeg");
filmEkle($filmler, "Yeni Film 2", "ikinci açıklama", "2.jpeg");
const LIMIT = 85;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Film Listesi</title>
</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <?php
                    foreach ($kategori as $kategoriler) {
                        echo '<li class="list-group-item">' . $kategoriler . '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-9">
                <?php
                foreach ($filmler as $id => $film) {
                ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <img class="img-fluid" src="img/<?php echo $film["resim"]; ?>">
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?php echo $film["url"]; ?>"><?php echo $film["baslik"]; ?></a></h5>
                                    <p class="card-text">
                                        <?php
                                        if (strlen($film["aciklama"]) > LIMIT) {
                                            echo substr($film["aciklama"], 0, LIMIT) . "...";
                                        } else {
                                            echo $film["aciklama"];
                                        }
                                        ?>
                                    </p>
                                    <div>
                                        <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                        <?php if ($film["yorumSayisi"] > 0) { ?>
                                            <span class="badge bg-success"><?php echo $film["yorumSayisi"]; ?> yorum</span>
                                        <?php } ?>
                                        <span class="badge bg-success"><?php echo $film["begeniSayisi"]; ?> beğeni</span>
                                        <span class="badge bg-success">
                                            <?php echo $film["vizyon"] ? "vizyonda" : "vizyonda değil"; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>