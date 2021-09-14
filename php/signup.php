<?php 
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Kiểm tra user có nhập hay không
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        // kiểm tra email của người dùng có hợp lệ hay không ?
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Nếu email là hợp lệ
            // kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay chưa
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0) { // nếu email đã tồn tại
                echo "$email - This email already exist!";
            } else {
                // kiểm tra tệp tải lên của người dùng hay không
                if(isset($_FILES['image'])) { // nếu file đã upload
                    $img_name = $_FILES['image']['name']; // nhận 'tên hình ảnh' do người dùng tải lên
                    $tmp_name = $_FILES['image']['tmp_name']; // đây là tên tạm thời được sử dụng để lưu/di chuyển tệp trong thư mục

                    // làm nổ đi image và nhận được phần mở rộng cuối cùng như jpg png
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); // code here sẽ nhận được phần mở rộng của một tệp image do người dùng tải lên

                    $extentions = ['png', 'jpeg', 'jpg']; // khởi tạo mảng chứa đuôi image
                    if(in_array($img_ext, $extentions) === true) { // kiểm tra nếu người dùng đã upload img ext là phù hợp với array extentions
                        $time = time(); // return về một thời gian hiện hành
                                        // cần hàm time() này vì khi user tải img lên từ thư mục, 
                                        // chúng ta sẽ đổi tên tệp người dùng theo time hiện tại để all img file sẽ có một tên duy nhất
                        
                        // di chuyển người dùng đã tải lên img vào thư mục cụ thể
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)) { // nếu user upload img thì move vào folder thành công
                            $status = "Active now"; // mỗi user khi đã sign up thì status sẽ active now
                            $random_id = rand(time(), 10000000); // tạo random id cho user

                            // chèn tất cả dữ liệu user vào table
                            $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, fname, lname, email, password, img, status)
                                                VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                            if($sql2) { // nếu những dữ liệu này được chèn vào
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id']; // sử dụng session user đã sử dụng unique_id trong tệp php khác
                                    echo "success";
                                }
                            } else {
                                echo "Something went wrong!";
                            } 
                        }

                    } else {
                        echo "Please select an image file - png, jpeg, jpg!";
                    }

                } else {
                    echo "Please select an image file!";
                }

            }
        } else {
            echo "$email - This is not a valid email!";
        }
    } else {
        echo "All input field are required!";
    }
?>