<html>
    <body>
        <?php
        if (isset($_POST['submit'])) {
            include("dbBaglan.php");
            //veitabanında kullanıcıyı arama
            $uye_adi = mysqli_real_escape_string($db_baglanti_durumu, $_POST['uye_adi']);
            $sif = hash('md5', mysqli_real_escape_string($db_baglanti_durumu, $_POST['sifre']));
            $sql = mysqli_query($db_baglanti_durumu, "SELECT id,uye_adi,ad,soyad,sifre FROM Uyeler 
        WHERE uye_adi='$uye_adi' AND sifre='$sif'");

            if (mysqli_num_rows($sql) == 1) {
                $satir = mysqli_fetch_array($sql);
                session_start();
                $_SESSION['uye_id'] =  $satir['id'];
                $_SESSION['uye_adi'] = $satir['uye_adi'];
                $_SESSION['ad'] =      $satir['ad'];
                $_SESSION['soyad'] =   $satir['soyad'];
                $_SESSION['logged'] = TRUE;
                header("Location: userspage.php"); 
                exit;
            } 
            else {header("Location: loginSayfasi.php"); exit; }
        } 
        else {header("Location: index.php"); exit; }//form butonuna basılmazsa
        ?> 
    </body>
</html>