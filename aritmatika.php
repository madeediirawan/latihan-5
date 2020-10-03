<h1> SELAMAT DATANG </h1>
<h2> Barisan Aritmatika </h2>
<form  method="POST" action="">

Inputan awal  <input type="text" name="na" value="<?=isset($_POST['na']) ? $_POST['na'] : ''?>"><br><br>
Nilai Input yang berbeda  <input type="text" name="nb" value="<?=isset($_POST['nb']) ? $_POST['nb'] : ''?>"><br><br>
Nilai dari Suku yang di cari  <input type="text" name="nc" value="<?=isset($_POST['nc']) ? $_POST['nc'] : ''?>"><br><br>

<input type="submit" name="submit" value="Hasil">
</form>
<hr>
<h3>Hasil Aritmatika</h3>
<?php
if (isset($_POST['submit'])){
$na = $_POST['na'];
$nb = $_POST['nb'];
$nc = $_POST['nc'];
echo "Inputan Awal = ". $na;
echo "<br> Nilai Input yang berbeda = ". $nb;
echo "<br> Hasil Nilai Aritmatika : " ;
for ($i=1 ; $i<=$nc; $i++){
    $hasil = $na + ($nb*($i-1));
    echo "<br>".$hasil;
}
$hasilsuku = $na + ($nc-1) * $nb;
echo "<br> <br> Nilai Suku ke- ". $nc;
echo "<br>".$hasilsuku;
}
?>