<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <?php
    //1. Menghitung umur, dari tanggal lahir dikurang tanggal sekarang
    $tahun_lahir = 2006;
    $tahun_sekarang = 2025;

    $hasil = $tahun_sekarang - $tahun_lahir;
    echo "Umur kamu adalah $hasil tahun.<br>";
    
    //2. Mengubah mata uang dollar ke rupiah
    $nilai_kurs = 17000;
    $nilai_dollar = 5;

    $rupiah = $nilai_dollar * $nilai_kurs;
    echo "$". $nilai_dollar. " = Rp ". number_format($rupiah);

    //3. Mengkonversi suhu Celsius ke Fahrenheit
    $celsius = 30;
    $fahrenheit = ($celsius * 9/5) + 32;

    echo "<br>$celsius °C = $fahrenheit °F<br>";

    //4. Menghitung luas lingkaran
    $jari_jari = 7;
    const PI = 3.14;

    echo "PI * $jari_jari * $jari_jari";
    //5. Menampilkan list perkalian 1 sd 5 (pisah file)
    ?>
</body>
</html>