const passField = document.querySelector(".form input[type='password']");
const toggleBtn = document.querySelector(".form .field i");


toggleBtn.onclick = () => {
    // Kiểm tra nếu user nhập type == password, khi muốn hiển thị pass user ấn vào icon => type change thành text
    if(passField.type == "password") {
        passField.type = "text";
        toggleBtn.classList.add("active");
    }else {
        passField.type = "password"
        toggleBtn.classList.remove("active");
    }
} 