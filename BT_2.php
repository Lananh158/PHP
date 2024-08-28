<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$x = "Hello Lemiuoi";
//câu 1:
echo "1. Số ký tự là: " .strlen($x) ."<br>";
//câu 2:
echo "2. Số từ là: " .str_word_count($x) ."<br>";
//câu 3:
echo "3. Chuỗi sau khi đảo ngược là: " .strrev($x) ."<br>";
//câu 4:
echo "4. Chuỗi con trong 1 chuỗi là: " .strpos($x, "Lemiuoi") ."<br>";
//câu 5:
echo "5. Thay thế một chuỗi con trong một chuỗi là: " .str_replace("Hello", "Xin chào", $x) ."<br>";
//câu 6:
$b = "H";
$c = substr($x,0,1);
$d = substr($b,0,1);
if ($c == $d ) {
echo '6. Chuỗi này bắt đầu bằng chuỗi con khác' ."<br>" ;
}
else {
echo '6. Chuỗi này không bắt đầu bằng chuỗi con khác' ."<br>";
} 
//câu 7: 
echo "7. Chuyển một chuỗi thành chữ hoa: " .strtoupper($x) ."<br>";
//câu 8:
echo "8. Chuyển một chuỗi thành chữ thường: " .strtolower("HELLO LEMIUOI") ."<br>";
//Câu 9:
echo "9. Chuỗi in hoa chữ cái đầu : " .ucwords($x) ."<br>";
//Câu 10:
$str10 = "          Hello Lemiuoi    ";
echo "10. Chuỗi khi chưa xóa khoảng trắng:" .$str10 ."<br>";
echo "Chuỗi khi xóa khoảng trắng:" .trim($str10) ."<br>";
//Câu 11:
echo "11. Loại bỏ kí tự đầu tiên của một chuỗi:" .ltrim($str10) ."<br>";
//Câu 12:
echo "12. Loại bỏ kí tự cuối cùng của một chuỗi:" .rtrim($str10) ."<br>";
//Câu 13:
$str13 = "pink,white,blue";
$tachchuoi = explode(',',$str13);
echo "13. Tách chuỗi thành một mảng các phần tử: " ."<br>";
foreach ($tachchuoi as $str13) {
    echo  $str13 ."<br>";
};
//Câu 14:
$str14 = ["pink", "white", "blue"];
echo "14. Nối các phần tử của 1 mảng thành một chuỗi: " .implode("-",$str14) ."<br>";
//Câu 15:
$str15 = " nhaaa";
$chuoi_da_them = str_pad($x,strlen($x)+strlen($str15),$str15,STR_PAD_RIGHT);
echo "15. Thêm một chuỗi vào đầu hoặc cuối của một chuỗi: " .$chuoi_da_them ."<br>";
//Câu 16:
$str16 = strrchr($x,'Lemiuoi');
if ($str16 == false) {
    echo "16. Kí tự không tồn tại trong chuỗi" ."<br>";
}
else {
    echo "16. Kí tự tồn tại trong chuỗi" ."<br>";
}
//Câu 17:
$str17 = "babicutienekkkk";
$str17_1 = "t";
if (strstr($str17,$str17_1)) {
    echo "17. Chuỗi str17_1 nằm trong chuỗi str17" ."<br>";
}
else {
    echo "17. Chuỗi str17_1 không nằm trong chuỗi str17" ."<br>";
}
//Câu 18:
$str18 = "Hello, how are you?";
$replacement = "#";
echo "18. Thay thế các kí tự không phải là chữ cái, số bằng kí tự khác: " .preg_replace('/[^\w]/',$replacement,$str18) ."<br>";
//Câu 19:
$str20 = 30 ;
echo "19. " .$str20 ."<br>";
if (is_int($str20)) {
    echo "Chuỗi trên là số nguyên." ."<br>";
}
else {
    echo "Chuỗi trên không phải là số nguyên." ."<br>";
}
//Câu 20:
$email = "lemiuoi@gmail.com";

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo("20. $email là địa chỉ email hơp lệ");
	} else {
		echo("20. $email không là địa chỉ email hơp lệ");
	}


?> 

</body>
</html>