<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Bài 3:
    $year = date("Y");
    if ($year % 2 == 0) {
        echo "Năm nay là năm chẵn." ."<br>";
    } else {
        echo "Năm nay là năm lẻ." ."<br>";
    }

    //Bài 4:
    for ($i=1;$i<=100;$i++) {
        echo $i ."<br>";
    }

    //Bài 5:
    for ($i=1;$i<=100;$i++) {
        if ($i % 2 == 0){
            echo "<strong>$i</strong>" ."<br>";
        } else {
            echo $i ."<br>";
        }
    }
    ?>
    <?php
    //Bài 6:
    $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
    foreach ($nam as $n) {
        echo $n . "<br>"; 
    }

    ?>
</body>
</html>