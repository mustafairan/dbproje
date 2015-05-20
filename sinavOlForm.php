<html>
    <body>

        <form action="sinavOl2.php" method="post">	

            Sorulacak soru sayisi:<input type="text" name="soruSayisi"/> <br /><br />

            zorluk derecesi: 
            <select name="zorluk">
                <option selected value=1>kolay</option>
                <option value=2>orta</option>
                <option value=3>zor</option>
            </select> 

            sorunun kategorisi:		<select name="kategori">
                <option selected value=1>Matematik</option>
                <option value=2>Fizik</option>
                <option value=3>Kimya</option>
                <option value=4>Biyoloji</option>
                <option value=5>Türkçe</option>
            </select>   	
            <br />



            <input type="submit" name="submit" value="Basla" />
        </form>
    </body>


</html>