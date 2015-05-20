<html>
    <body>
        <form action="kullaniciKayit.php" method="post">
            <p>Nickname:    <br />   <input type="text" name="uye_adi" /></p>
            <p>Ad:          <br />   <input type="text" name="ad"  /></p>
            <p>Soyad:       <br />   <input type="text" name="soyad"  /></p>
            Seciniz:		<select name="rol_fk">
                <option selected value=1>ogrenci</option>
                <option  value=2>editor</option>
                <option  value=3>yonetici</option>
            </select>
            <p>Email:       <br />   <input type="email" name="eposta"  /></p>
            <p>cep telefonu:<br />   <input type="tel" name="cep_tel"  /></p>
            <p>Dogum tarihi:<br />   <input type="date" name="dogum_tarihi"  /></p>
            <p>Sifre:       <br />   <input type="password" name="sifre" /></p>
            <p>Sifre tekrar:<br />   <input type="password" name="sifre_yeniden" /></p>
            <p><input type="submit" name="submit" value="Kaydi tamamla" /></p>
        </form>
    </body>
</html>
