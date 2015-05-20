<html>
    <body>

        <form action="sinavOl.php" method="post">	

            Sorulacak soru sayisi:<input type="text" name="soruSayisi"/> <br /><br />

            zorluk derecesi: 
            <select name="zorluk">
                <option selected value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=4>4</option>
            </select> 

            sorunun kategorisi:		<select name="kategori">
                <option selected value="mat">Matematik</option>
                <option value="fen">Fen</option>
                <option value="kim">Kimya</option>
                <option value="biy">Biyoloji</option>
                <option value="tur">Türkçe</option>
            </select>   	
            <br />



            <input type="submit" name="submit" value="Basla" />
        </form>
    </body>


</html>