<?php
include 'dbBaglan.php';

// yeni eklenen soruları onaylama gerekirse duzenleme
function soru_duzenle($db, $soru_id) {

    $sorgu1 = "SELECT * FROM soru WHERE soru.id='" . $soru_id . "'"; //sadece gerekli kolonlar seçilmeli
    $sonuc1 = mysqli_query($db, $sorgu1);
    $soru_eski_satir = mysqli_fetch_array($sonuc1);

    $sorgu2 = "SELECT * FROM secenekler WHERE soru_fk='" . $soru_id . "' ORDER BY id DESC"; //sadece gerekli kolonlar seçilmeli
    $sonuc2 = mysqli_query($db, $sorgu2);
    $secenek_sayisi = mysqli_num_rows($sonuc2);

    
    $sorgu3 = "SELECT * FROM zorluk_derecesi WHERE id='" . $soru_eski_satir["zorluk_derecesi_fk"] . "'"; //sadece gerekli kolonlar seçilmeli
    $sorgu3_2 = "SELECT * FROM zorluk_derecesi ORDER BY id ASC";
    $sonuc3 = mysqli_query($db, $sorgu3);
    $sonuc3_2 = mysqli_query($db, $sorgu3_2);
    $zorluk_sayisi = mysqli_num_rows($sonuc3_2);

    $sorgu4 = "SELECT * FROM soru_kategorileri WHERE id='" . $soru_eski_satir["soru_kategori_fk"] . "'"; //sadece gerekli kolonlar seçilmeli
    $sorgu4_2 = "SELECT * FROM soru_kategorileri ORDER BY id ASC ";
    $sonuc4 = mysqli_query($db, $sorgu4);
    $sonuc4_2 = mysqli_query($db, $sorgu4_2);
    $kategori_sayisi = mysqli_num_rows($sonuc4_2);
    
    ?>

    <form action = "#" method = "post">

        Soru Metni:<br /> <textarea name = "soru_texti" rows = "13" cols = "44"   /><?php echo $soru_eski_satir[2]; ?> </textarea><br /><br />

    <?php
    for ($i = 1; $i <= $secenek_sayisi; $i++) {
        $secenek_array = mysqli_fetch_assoc($sonuc2);
        ?>
        secenek:

        <input type = "radio" name =<?php echo $secenek_array["id"] . "_dogru_mu" ?>  <?php if ($secenek_array["dogru_mu"]) {
            echo "checked";
        } ?>  /> 
        <input type = "text"  name =<?php echo $secenek_array["id"] ?>   value=<?php echo $secenek_array["secenek"] ?>  /><br /><br />
    <?php } ?>

    zorluk derecesi:
    <select name = "zorluk"  >
        <?php
        for ($b = 1; $b <= $zorluk_sayisi; $b++) {
            $zorluk_eski_satir = mysqli_fetch_array($sonuc3_2);
            ?>
            <option value = <?php echo $zorluk_eski_satir["id"]; ?> <?php if ($zorluk_eski_satir["zorluk"] == $b) {
            echo "selected";
        } else {
            
        } ?> > <?php echo $zorluk_eski_satir["zorluk"]; ?> </option>
        <?php } ?>
    </select> 

    sorunun kategorisi: <select name = "kategori"  >
    <?php
    for ($a = 1; $a <= $kategori_sayisi; $a++) {
        $kategori_eski_satir = mysqli_fetch_array($sonuc4_2);
        ?>
            <option value =<?php echo $soru_eski_satir["id"]; ?>  <?php if ($soru_eski_satir["soru_kategori_fk"] == $a) {echo "selected";} ?> > <?php echo $kategori_eski_satir["kategori_ismi"]; ?> </option>
    <?php } ?>
    </select>
    <br />

    <br />
    <select name = "onay" >
        <option value = 0 <?php if ($soru_eski_satir["onay"] == 0) {
        echo "selected";
    } ?> >onaylanmadi</option>
        <option value = 1 <?php if ($soru_eski_satir["onay"] == 1) {
        echo "selected";
    } ?> >onaylandi</option>
    </select>

    <?php
    /*

      $sorgu1="UPDATE soru SET soru='" .$_POST[""]."' , onay='".$_POST[""]. "' , soru_kategori_fk='".$_POST[""]. "' ,

      zorluk_derecesi_fk='".$_POST[""]. "WHERE id='".$_POST[""]."'";

      $sorgu2="UPDATE secenekler SET dogru_mu='" .$_POST[""]."' , secenek='".$_POST[""]."' WHERE id='".$_POST[""]."'";
      mysqli_query($db, $sorgu1);
      mysqli_query($db, $sorgu2);


     */
}

//soru_duzenle($db_baglanti_durumu, 32);


function yeni_eklenen_uyeler($db) {

    $sorgu = "SELECT id FROM uyeler WHERE aktif_mi='FALSE'";
    $id = array();
    $idler = array();
    $i = 1;
    $sonuc = mysqli_query($db, $sorgu);
    $sayi = mysqli_num_rows($sonuc);

    while ($i <= $sayi) {
        $id = mysqli_fetch_array($sonuc);
        array_push($idler, $id["id"]);
        $i++;
    }
    return $idler;
}

//print_r(yeni_eklenen_sorular($db_baglanti_durumu));
function yeni_eklenen_sorular($db) {

    $sorgu = "SELECT id FROM soru WHERE onay='FALSE'";
    $id = array();
    $idler = array();
    $i = 1;
    $sonuc = mysqli_query($db, $sorgu);
    $sayi = mysqli_num_rows($sonuc);

    while ($i <= $sayi) {
        $id = mysqli_fetch_array($sonuc);
        array_push($idler, $id["id"]);
        $i++;
    }
    return $idler;
}

//print_r(yeni_eklenen_sorular($db_baglanti_durumu));



function uye_duzenle($db, $uye_id) {

    $sorgu1 = "SELECT * FROM uyeler WHERE id='" . $uye_id . "'";
    $sonuc1 = mysqli_query($db, $sorgu1);
    $uyeler_eski_satir = mysqli_fetch_array($sonuc1);
    $sorgu2 = "SELECT * FROM rol WHERE id='" . $uyeler_eski_satir["rol_fk"] . "'";
    $sonuc2 = mysqli_query($db, $sorgu2);
    $rol_eski_satir = mysqli_fetch_array($sonuc2);

    //eski degerleri forma bas sonra submit edilenleri asagıdaki seklde güncelle
    ?>
    <form action = "#" method = "post">

        <p>Nickname: <br /> <input type = "text" name = "uye_adi" value= <?php echo $uyeler_eski_satir["uye_adi"]; ?> /></p>
        <p>Ad:       <br /> <input type = "text" name = "ad" value= <?php echo $uyeler_eski_satir ["ad"]; ?> />          </p>
        <p>Soyad: <br /> <input type = "text" name = "soyad" value= <?php echo $uyeler_eski_satir ["soyad"]; ?> /></p>

        Seciniz: <select name = "rol_fk" >
            <option value = 1 <?php
                if ($rol_eski_satir["id"] == 1) {
                    echo "selected";
                }
                ?> >ogrenci</option>
            <option value = 2 <?php
                if ($rol_eski_satir["id"] == 2) {
                    echo "selected";
                }
                ?> >ogretmen</option>
        </select>
        <p>Email: <br /> <input type = "text" name = "eposta" value= <?php echo $uyeler_eski_satir["eposta"]; ?> /></p>
        <p>cep telefonu:<br /> <input type = "text" name = "cep_tel" value= <?php echo $uyeler_eski_satir["cep_tel"]; ?> /></p>
        <p>Dogum tarihi:<br /> <input type = "date" name = "dogum_tarihi" value= <?php echo $uyeler_eski_satir["dogum_tarihi"]; ?> /></p>

        <p>Aktiflik durumunu degistir:<br /> <select name = "aktiflik"    >

                <option value = 0 <?php
    if (!($uyeler_eski_satir["aktif_mi"])) {
        echo "selected";
    }
    ?> >pasif</option>
                <option value = 1 <?php
    if ($uyeler_eski_satir["aktif_mi"]) {
        echo "selected";
    }
    ?> >aktif</option>

            </select></p>


    <?php
    if ($_POST) {
        //echo "<br/>uyeadi ".$_POST["uye_adi"] ."<br/>ad ".$_POST["ad"]."<br/>soyad ".$_POST["soyad"]."<br/>rol_fk ".$_POST["rol_fk"]."<br/>eposta ".$_POST["eposta"]."<br/>cep_tel ".$_POST["cep_tel"]."<br/>dogum tarihi ".$_POST["dogum_tarihi"];

        $sorgu = "UPDATE uyeler SET ad= '" . $_POST["ad"] . "' , aktif_mi='" . $_POST["aktiflik"] . "' , cep_tel='" . $_POST["cep_tel"] . "' , dogum_tarihi='" . $_POST["dogum_tarihi"] . "' , 
                                        eposta='" . $_POST["eposta"] . "' , rol_fk='" . $_POST["rol_fk"] . "' , 
                                         soyad='" . $_POST["soyad"] . "' , uye_adi='" . $_POST["uye_adi"] . "' WHERE id='" . $uye_id . "'";

        $sonuc = mysqli_query($db, $sorgu);
    }
}

//uye_duzenle($db_baglanti_durumu, 55);
?>
<?php
/*
  //kullanıcı ismine , adı soyadına göre arama yapıp sonuclar içinden gerekeni işaretleme secenegı sunacak, veritabanında gerekli
  // yerler değiştirecek fonksiyon
  //arama bilgileri form ile alınacak , doldurulan kutulara göre arama yapacak, sonucları ekrana basıp tekrar secım yaptıracak.

  function uye_bul() {
  $uye_id
  $uye_adi
  $ad
  $soyad
  //form ile arama bilgisi al
  }
 */
//foreach(yeni_eklenen_sorular($db_baglanti_durumu) as $yeni_soru_id){
//  soru_duzenle($db_baglanti_durumu, $yeni_soru_id);
//}
//sayfa yeni eklenen uyeler için sadece  bu fonksiuyonu cagıracak 
function yeni_uyeleri_onayla($db_baglanti_durumu){
foreach (yeni_eklenen_uyeler($db_baglanti_durumu) as $yeni_uye_id) {
    uye_duzenle($db_baglanti_durumu, $yeni_uye_id);          
}
?>
 <p><input type = "submit" name = "uyelertamam" value = "Kaydet" /><br/></p>


    </form ><?php } 
//sayfa yeni sorular uyeler için sadece  bu fonksiuyonu cagıracak 
    function yeni_sorulari_onayla($db_baglanti_durumu){
foreach (yeni_eklenen_sorular($db_baglanti_durumu) as $yeni_soru_id) {
    soru_duzenle($db_baglanti_durumu, $yeni_soru_id);    echo "<br/>";      
}
?>
    <p><input type = "submit" name = "sorulartamam" value = "Kaydet" /><br/></p>


    </form ><?php }yeni_sorulari_onayla($db_baglanti_durumu) ?>
    
    
    
    

