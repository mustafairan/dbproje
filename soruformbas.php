<html>
<body>
    
<?php include ("sinavOl.php"); ?>


<form method="post">
            Soru Metni:<?php echo "soru= ".$soru;

             
            ?>secenek1:   				

            <input type="radio" name="sec" value=1 /><?php echo " secenek_satir[secenek] =".$secenek_satir['secenek'];
            ?>secenek2:   				

            <input type="radio" name="sec" value=2 /><?php echo " secenek_satir[secenek] =".$secenek_satir['secenek'];
            ?>secenek3:   				

            <input type="radio" name="sec" value=3/><?php echo " secenek_satir[secenek] =".$secenek_satir['secenek'];
            ?>secenek4:  				

            <input type="radio" name="sec" value=4 /><?php echo " secenek_satir[secenek] =".$secenek_satir['secenek'];
            ?>secenek5:   				

            <input type="radio" name="sec" selected value=5 /><?php echo " secenek_satir[secenek] =".$secenek_satir['secenek'];
            ?><br />
           <?php echo " begeni=% ".$begeni; ?>


            <input type="submit" name="submit" value="Kaydet" />
</form>

</body>
</html>