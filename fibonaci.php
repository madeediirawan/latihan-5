<h1> SELAMAT DATANG </h1>
<h2> Deret Fibonaci </h2>
<b> "Menghitung Deret Fibonaci" </b> <br> <br>
<form method="POST">
    Deret Pertama : <input type="text" name="a" value="<?=isset($_POST['a']) ? $_POST['a'] : ''?>"><br><br>
    Deret Kedua : <input type="text" name="b" value="<?=isset($_POST['b']) ? $_POST['b'] : ''?>"><br><br>
    Jumlah Deret : <input type="text" name="c" value="<?=isset($_POST['c']) ? $_POST['c'] : ''?>"><br><br>
    <input type="submit" name= "submit" value="Hasil">
</form>
<?php
if (isset($_POST["submit"])){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
echo "Nilai Inputan User : <br> <br>";
echo "Deret Pertama = ".$a ."<br>";
echo "Deret Kedua = ". $b ."<br> <br>" ; 
echo $c. " Hasil Deret Fibonacci Yang Ditemukan : <br>";
for ($i=0 ; $i<$c; $i++){
    $hasil = $a + $b;
    echo "<br>".$hasil;

    $a = $b;
    $b = $hasil;
}
}
?>