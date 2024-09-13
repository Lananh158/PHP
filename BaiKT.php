<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
     //Câu 8:
     function giaiptbachai($a,$b,$c){
        if ($a == 0) {
            if ($b == 0) {
                return ($c == 0) ? "Phương trình có vô số nghiệm" : "Phương trình vô nghiệm";
            } else {
                return "Phương trình có một nghiệm = " . (-$c/$b);
            }
        }
        $delta = $b * $b - 4 * $a * $c;
        
        if ($delta > 0) {
            $x1= (-$b + sqrt($delta))/(2*$a);
            $x2= (-$b - sqrt($delta))/(2*$a);
            return "Phương trình có 2 nghiệm phân biệt x1=$x1 và x2=$x2";
        }
        if ($delta == 0) {
            $x= -$b /(2*$a);
            return "Phương trình có nghiệm kép x=$x";
        }
        return "Phương trình vô nghiệm";
    }
    echo giaiptbachai(0,2,-1) ."<br>";
    echo giaiptbachai(5,2,-1) ."<br>";

    //Câu 9:
    echo "<pre>";
    function inHCNrong($height, $width) {
        for ($i = 1; $i <= $height; $i++) {
            for ($j = 1; $j <= $width; $j++) {
                if ($i == 1 || $i == $height || $j == 1 || $j == $width) {
                    echo "*";
                } else {
                    echo " ";
                }
            }
            echo PHP_EOL;
        }
    }
    inHCNrong(5, 7);

    //Câu 10:
    function TinhTBCcuamang($array){
        if (empty($array)){
            return 0;
        }
        $sum = array_sum($array);
        $count = count($array);
        $average = $sum/$count;
        return $average;
    }
    $array = [1,2,3,4,5,6,7,8,9,10];
    echo "Trung bình cộng của mảng là: " .TinhTBCcuamang($array) ."<br>";

    
    ?>
</body>
</html>