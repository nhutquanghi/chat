<?php 
    $conn = mysqli_connect("localhost", "root", "", "db_chatapp");
    // Kiểm tra nếu connect thành công thì echo "Database connected" ngược lại show error
    if (!$conn) {
        echo "Database connected" . mysqli_connect_error();
    }
?>