<?php

//mysql baglantisi acma
$db_konum = "localhost";
$db_kullanici = "root";
$db_sifre = "rootmysql";
$db_ismi = "soru_cevap";

$db_baglanti_durumu = mysqli_connect($db_konum, $db_kullanici, $db_sifre, $db_ismi);
//hata olması durumu
if (!$db_baglanti_durumu) {
    die("veritabanina baglanilamadi" . mysqli_error()); //die scripti sonlandirir
} else {
    print "baglanti basarili";
}
?>