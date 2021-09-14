<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    

    function checkLogin($email, $password, $conn) {
        if (!empty($email) && !empty($password)) {
            // kiểm tra user nhập vào email & password cho matched với bất kỳ hàng nào trong bảng email & password
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
            if(mysqli_num_rows($sql) > 0) { // nếu user chứng nhận xác thực phù hợp
                $row = mysqli_fetch_array($sql);
                $_SESSION['unique_id'] = $row['unique_id']; // sử dụng session user đã sử dụng unique_id trong tệp php khác
                echo "success";
            }else {
                echo "Email or Password is incorrect. Please try again!";
            }
        }else {
            echo "All input fields are require";
        }
    }

    checkLogin($email, $password, $conn);
?>