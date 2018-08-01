<?php
$teksts = array(); 
 
//kolejne teksty dodajemy wpisujac linijke: "$teksts[] = &#39;TWOJ TEKST&#39;;" 
$teksts[] = "Chcesz być prezenterem ?? To jest okazja ! Złóż podanie juz dziś"; 
$teksts[] = "Słuchasz najlepszego radia w sieci !!"; 
$teksts[] = "Zaproś znajomych na nasze wspaniałe radyjko !!"; 
$teksts[] = "Podanie na prezentera można składać na http://www.radio-muzyczka24.pl/podanie.php"; 
$teksts[] = "Właściciel radia Krzysieqq !!"; 

$ktory = array_rand($teksts); 

$ch = curl_init('http://ipserwerashoutcast:8000/admin.cgi?pass=hasloadminashoutcast&mode=updinfo&url=songurl&song='.$teksts[$ktory].'');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3');
curl_exec($ch);
curl_close($ch);
?>
