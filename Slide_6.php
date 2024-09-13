<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Slide 6
    $conn = mysqli_connect('localhost', 'root', '', 'baitap5');
    // Kết nối tới MySQL server
    
    if (!$conn){
        die("Unable to connect to MySQL: " . mysqli_connect_error());
    }
    // Nếu kết nối thất bại thì đưa ra thông báo lỗi
    
    $sql_stmt = "SELECT * FROM my_contacts";
    $result = mysqli_query($conn, $sql_stmt);
    
    if (!$result)
        die("Database access failed: " . mysqli_connect_error());
    // Thông báo lỗi nếu thực thi thất bại
    
    $rows = mysqli_num_rows($result);
    
    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {
            echo 'ID: ' . $row['id'] . '<br>';
            echo 'Full Names: ' . $row['full_names'] . '<br>';
            echo 'Gender: ' . $row['gender'] . '<br>';
            echo 'Contact No: ' . $row['contact_no'] . '<br>';
            echo 'Email: ' . $row['email'] . '<br>';
            echo 'City: ' . $row['city'] . '<br>';
            echo 'Country: ' . $row['country'] . '<br><br>';
        }
    }

    //Thêm dữ liệu vào bảng
    $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Poseidon','Male','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    
    $result = mysqli_query($conn, $sql_stmt); 
    
    if (!$result) {
        die("Adding record failed: " . mysqli_connect_error()); 
    } else {
        echo "Poseidon has been successfully added to your contacts list";
    }

    //Cập nhật dữ liệu vào bảng
    $sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
    $sql_stmt .= "WHERE `id` = 5";
    
    $result = mysqli_query($conn,$sql_stmt);

    if (!$result) {
        die("Deleting record failed: " . mysqli_connect_error());
    } else {
        echo "ID number 5 has been successfully updated";
    }

    //Xóa dữ liệu
    $id = 5; 
    
    $sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
    $result = mysqli_query($conn,$sql_stmt); 
    
    if (!$result) {
        die("Deleting record failed: " . mysqli_connect_error());
    } else {
        echo "ID number $id has been successfully deleted";
    }

    
    mysqli_close($conn); // Đóng kết nối CSDL
    
    ?>
</body>
</html>