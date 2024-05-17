<!-- paper lives filminde sadece ilk harf büyük diğerleri küçük uygulandı
walking dead filminde ilk 50 harf sonrasında ... uygulandı
lucifer filminde her ikisi uygulandı
strtolower(str_replace(' ', '-', kullanılarak ilk önce küçük harfe çevrildi sonrasında arada bosluk olamıyacağı için
str_replace ile url bilgilerbosluk yerine - koyularak eklendi
satır sayıları 91 116 ve 144
10.satırda define "BASLIK  ile sabit oluşturuldu 70 .satırda h1 etiketine alındı -->

<?php
define("BASLIK", "Film Listesi");
$kategori = array("Macera", "Dram", "Komedi", "Korku");

array_push($kategori, "Fantastik");
sort($kategori);

$filmler = array(
    "1" => array(
        "baslik" => "Paper Lives",
        "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim" => "1.jpeg",
        "yorumSayisi" => "Yorum: 55",
        "begeniSayisi" => "Beğeni: 85",
        "vizyon" => "Viyonda: Evet"
         ),
    "2" => array(
        "baslik" => "Walking Dead",
        "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim" => "2.jpeg",
        "yorumSayisi" => "Yorum: 55",
        "begeniSayisi" => "Beğeni: 85",
        "vizyon" => "Viyonda: Evet"
    )
);

$yeni_film = array(
    "baslik" => "Lucifer",
    "aciklama" => "Başlangıçta Lucifer adlı melek cennetten kovuldu ve sonsuza dek cehenneme mahkum edıldı ta ki tatile çıkmaya karar verinceye dek.",
    "resim" => "3.jpeg",
    "yorumSayisi" => "Yorum: 55",
    "begeniSayisi" => "Beğeni: 85",
    "vizyon" => "Viyonda: Evet"
);

$filmler["0"] = $yeni_film;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori[0] ?></li>
                    <li class="list-group-item"><?php echo $kategori[1] ?></li>
                    <li class="list-group-item"><?php echo $kategori[2] ?></li>
                    <li class="list-group-item"><?php echo $kategori[3] ?></li>
                    <li class="list-group-item"><?php echo $kategori[4] ?></li>
                </ul>
            </div>
            <div class="col-9">
            <h1><?php echo BASLIK ?></h1>
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["1"]["resim"]}\">" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmler["1"]["baslik"] ?></h5>
                                <p class="card-text">
                                    <?php $aciklama = $filmler["1"]["aciklama"];
                                    $aciklama = ucfirst(strtolower($aciklama));
                                    echo $aciklama; ?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $filmler["1"]["yorumSayisi"] ?></span>
                                    <span class="badge bg-success"><?php echo $filmler["1"]["begeniSayisi"] ?></span>
                                    <span class="badge bg-success"><?php echo $filmler["1"]["vizyon"] ?></span>
                                    <span class="badge bg-success">urlbilgisi=><?php echo strtolower(str_replace(' ', '-', $filmler["1"]["baslik"])) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["2"]["resim"]}\">" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmler["2"]["baslik"] ?></h5>
                                <p class="card-text">
                                    <?php $aciklama = $filmler["1"]["aciklama"];
                                    $aciklama_kisalt = strlen($aciklama) > 50 ? substr($aciklama, 0, 50) . "..." : $aciklama;
                                    echo $aciklama_kisalt; ?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $filmler["2"]["yorumSayisi"] ?></span>
                                    <span class="badge bg-success"><?php echo $filmler["2"]["begeniSayisi"] ?></span>
                                    <span class="badge bg-success"><?php echo $filmler["2"]["vizyon"] ?></span>
                                    <span class="badge bg-success">urlbilgisi=><?php echo strtolower(str_replace(' ', '-', $filmler["2"]["baslik"])) ?></span>   
                                </div>
                                <div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["0"]["resim"]}\">" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmler["0"]["baslik"] ?></h5>
                                <p class="card-text">
                                    <?php $aciklama = $filmler["0"]["aciklama"];
                                    $aciklama_kisalt = strlen($aciklama) > 50 ? substr($aciklama, 0, 50) . "..." : $aciklama;
                                    echo ucfirst(strtolower($aciklama_kisalt)); ?> 

                                     </p> 
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $filmler["0"]["yorumSayisi"] ?></span>
                                    <span class="badge bg-success"><?php echo $filmler["0"]["begeniSayisi"] ?></span>
                                    <span class="badge bg-success"><?php echo $filmler["0"]["vizyon"] ?></span>
                                    <span class="badge bg-success">urlbilgisi=><?php echo strtolower(str_replace(' ', '-', $filmler["0"]["baslik"])) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>