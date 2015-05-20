<html>
    <body>
        //üyenin kayıt tarihi de (üye onaylanınca) eklenecek

        <?php
        include("kayitForm.php");

        if (isset($_POST['submit'])) {
            include("dbBaglan.php");//veritabanına bağlanma
            # kullanıcı adının zaten alınıp alınmadıgını kontrol
            $sorgu = sprintf("SELECT uye_adi FROM Uyeler WHERE uye_adi='%s' LIMIT 1", mysqli_real_escape_string($db_baglanti_durumu, $_POST['uye_adi']));
            $sql = mysqli_query($db_baglanti_durumu, $sorgu);
            $satir = mysqli_fetch_array($db_baglanti_durumu, $sql);
            #Bos bırakılan alanları kontrol et , parola eslesiyor mu
            if ($satir || empty($_POST['uye_adi']) || empty($_POST['ad']) || empty($_POST['soyad']) || empty($_POST['eposta']) || empty($_POST['sifre']) || empty($_POST['sifre_yeniden']) || $_POST['sifre'] != $_POST['sifre_yeniden']) {
                # bos alan yada parola uyusmazlıgında
                $error = '<p>';
                if (empty($_POST['uye_adi'])) {$error .= 'Kullanici adi bos gecilemez<br>';}
                if (empty($_POST['ad'])) {$error .= 'Isim bos gecilemez<br>';}
                if (empty($_POST['soyad'])) {$error .= 'Soyad bos gecilemez<br>';}
                if (empty($_POST['eposta'])) {$error .= 'Eposta bos gecilemez<br>';}
                if (empty($_POST['sifre'])) {$error .= 'Parola bos gecilemez<br>';}
                if (empty($_POST['sifre_yeniden'])) {$error .= 'Parolani yeniden yazmalisin<br>';}
                if ($_POST['sifre'] != $_POST['sifre_yeniden']) {$error .= 'Parolalar eslesmedi<br>';}
                if ($satir) {$error .= 'Kullanici ismi zaten var<br>';}
                $error .= '</p>';
            } else {# bos alan yoksa ve parolalar eslesırse oturum olustur ve değişkenleri ata
                $sorgu = sprintf("INSERT INTO Uyeler (uye_adi,ad,soyad,eposta,sifre,cep_tel,dogum_tarihi,rol_fk,onay)
					VALUES('%s','%s','%s','%s',MD5('%s'),'%s','%s','%s','%s')", mysqli_real_escape_string($db_baglanti_durumu, $_POST['uye_adi']), mysqli_real_escape_string($db_baglanti_durumu, $_POST['ad']), mysqli_real_escape_string($db_baglanti_durumu, $_POST['soyad']), mysqli_real_escape_string($db_baglanti_durumu, $_POST['eposta']), mysqli_real_escape_string($db_baglanti_durumu, $_POST['sifre']), mysqli_real_escape_string($db_baglanti_durumu, $_POST['cep_tel']), mysqli_real_escape_string($db_baglanti_durumu, $_POST['dogum_tarihi']), mysqli_real_escape_string($db_baglanti_durumu, $_POST['rol_fk']),0
                        ) or die(mysqli_error());
                $sql = mysqli_query($db_baglanti_durumu, $sorgu);
                //echo $sorgu;
                header("Location: loginSayfasi.php");//kullanıcıyı login sayfasına yonlendır
                exit;
            }}
# yukarda ayarlananları cıktı al sonra variable ı yık
        if (isset($error)) {
            echo $error;
            unset($error);
        }
        header("Location: kayitForm.php");
        ?>
    </body>
</html>