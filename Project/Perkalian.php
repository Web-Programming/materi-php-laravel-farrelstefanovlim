<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian 1 sampai dengan 5</title>
</head>
<body>
    <?php
    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= 10; $j++){
            $hasil = $i * $j;
            echo "$i x $j = $hasil<br>"; 
        }
        echo "<br>";
    }
    ?>
</body>
</html>