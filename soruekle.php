<?php

include("dbBaglan.php");
include("soruEkleForm.php");


$soru_texti = $_POST['soru_texti'];
$secenek1 = $_POST['secenek1'];
$secenek2 = $_POST['secenek2'];
$secenek3 = $_POST['secenek3'];
$secenek4 = $_POST['secenek4'];
$sec = $_POST['sec'];
session_start();
if (!$_SESSION['logged']) {
    header("Location: loginSayfasi.php");
    exit;
} else {
    echo "soru eklede SESSION uye_id=" . $_SESSION['uye_id'];
//$kategori_ismi=$_POST['kategori']; yanlış

    $zorluk = $_POST['zorluk'];

    $onay = 1;

//soru tablosuna
//ekleyen_fk,soru_kategori_fk,zorluk_derecesi fk,soru tablosuna

    $ekleyen_fk = $_SESSION['uye_id'];
    echo "ekleyen fk=" . $ekleyen_fk;
    $sql = mysqli_query($db_baglanti_durumu, "SELECT id , zorluk FROM zorluk_derecesi WHERE zorluk= '$zorluk' LIMIT 1");
    $satir = mysqli_fetch_array($sql);
    $zorluk_derecesi_fk = $satir['id'];

    $gecici = 0;
    $sorgu = "INSERT INTO soru(soru,ekleyen_fk,soru_kategori_fk,zorluk_derecesi_fk,onay) 
		VALUES ('" . $soru_texti . "','" . $ekleyen_fk . "','" . $_POST['kategori'] . "','" . $zorluk_derecesi_fk . "','" . $onay . "')";

    mysqli_query($db_baglanti_durumu, $sorgu);
    $soru_id = mysqli_insert_id($db_baglanti_durumu);

//secenekler tablosuna
//id,dogru_mu,secenek,soru_fk
    switch ($_POST['sec']) {
        case 1:
            $dogru_mu1 = 1;
            $dogru_mu2 = 0;
            $dogru_mu3 = 0;
            $dogru_mu4 = 0;
            $dogru_mu5 = 0;

            break;
        case 2:
            $dogru_mu1 = 0;
            $dogru_mu2 = 1;
            $dogru_mu3 = 0;
            $dogru_mu4 = 0;
            $dogru_mu5 = 0;

            break;
        case 3:
            $dogru_mu1 = 0;
            $dogru_mu2 = 0;
            $dogru_mu3 = 1;
            $dogru_mu4 = 0;
            $dogru_mu5 = 0;

            break;
        case 4:
            $dogru_mu1 = 0;
            $dogru_mu2 = 0;
            $dogru_mu3 = 0;
            $dogru_mu4 = 1;
            $dogru_mu5 = 0;

            break;
        case 5:
            $dogru_mu1 = 0;
            $dogru_mu2 = 0;
            $dogru_mu3 = 0;
            $dogru_mu4 = 0;
            $dogru_mu5 = 1;

            break;
    }

    $sorgu = "INSERT INTO secenekler(dogru_mu,secenek,soru_fk) 
	     VALUES ('" . $dogru_mu1 . "','" . $_POST['secenek1'] . "','" . $soru_id . "'),
		    ('" . $dogru_mu2 . "','" . $_POST['secenek2'] . "','" . $soru_id . "'),
		    ('" . $dogru_mu3 . "','" . $_POST['secenek3'] . "','" . $soru_id . "'),
		    ('" . $dogru_mu4 . "','" . $_POST['secenek4'] . "','" . $soru_id . "'),
		    ('" . $dogru_mu5 . "','" . $_POST['secenek5'] . "','" . $soru_id . "');";
    mysqli_query($db_baglanti_durumu, $sorgu);

//soru kategorileri tablosundan
//id
//kategori_ismi
//cekilerek soru kategorisi_fk ona gore alınıp id degeri oraya basılacak 
}
?>