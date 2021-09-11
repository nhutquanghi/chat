const form = document.querySelector(".signup form")
const continueBtn = form.querySelector(".button input")

form.onsubmit = (e) => {
    e.preventDefault(); // preventing form from submitting (ngăn không cho biểu mẫu gửi) 
}

continueBtn.onclick = () => {
    // Khởi tạo Ajax: phản hồi này đến từ tệp PHP mà không cần tải lại trang
    let xhr = new XMLHttpRequest(); // Creating XML object
    xhr.open("POST", "php/signup.php");
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
            } 
        }
    }
    // chúng ta phải gửi dữ liệu biểu mẫu thông qua ajax tới php
    let formData = new FormData(form); // tạo đối tượng formData mới
    xhr.send(formData); // gửi data form đến php
}