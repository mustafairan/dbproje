<?php
//dogru soru numaralarını donduren fonksiyon
function soru_kontrol($soru_durum,$soru_id){
    //soru dogru işaretlenirse1,yanlış işaretlenirse 0, boş bırakılırsa o sorunun indexine -1 basacağız.
$durum=array_push($durum,$soru_id=>$soru_durum);
return $durum;
}

//dogru yanlıs soruların belirtilip puan hesaplanmasi
function sinav_sonrasi(){
         
         $dogru_sayisi=count(dogrular());
         $yanlis_sayisi=count(yanlislar());
         //dogru yanlıs ve bos ve soru sayısını kullanıcı gecmisine kaydetme

}


                
//soruları uyenin puanlanması

?>