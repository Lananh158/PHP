<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <?php
     function echoLine($text)
     {
        echo $text ."<br/>";
     }

     $ten = array(
        1 => "Nhung",
        2 => "Oanh",
        3 => "Phong",
        4 => "Phụng",
        5 => "Phương",
        6 => "Phượng",
        7 => "Quang",
        8 => "Quyên",
        9 => "Quỳnh",
        10 => "Tâm",
     );

    $random_key = array_rand($ten); 
    $random_ten = $ten[$random_key];
    echo "STT: " .$random_key ." - " .$random_ten;

     ?>

</body>
</html>