const form = document.querySelector(".typing-area");
const inputField = form.querySelector(".input-field");
const sendBtn = form.querySelector("button");
const chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
  e.preventDefault(); // preventing form from submitting (ngăn không cho biểu mẫu gửi)
};

sendBtn.onclick = () => {
  // Khởi tạo Ajax: phản hồi này đến từ tệp PHP mà không cần tải lại trang
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open("POST", "php/insert-chat.php");
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        inputField.value = ""; // khi đã chèn lộn xộn vào cơ sở dữ liệu, sau đó để trống trường đầu vào
      }
    }
  };
  // chúng ta phải gửi dữ liệu biểu mẫu thông qua ajax tới php
  let formData = new FormData(form); // tạo đối tượng formData mới
  xhr.send(formData); // gửi data form đến php
}

setInterval(() => {
  // Khởi tạo Ajax: phản hồi này đến từ tệp PHP mà không cần tải lại trang
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open("POST", "php/get-chat.php");
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        chatBox.innerHTML = data;
      }
    }
  };
  // chúng ta phải gửi dữ liệu biểu mẫu thông qua ajax tới php
  let formData = new FormData(form); // tạo đối tượng formData mới
  xhr.send(formData); // gửi data form đến php
}, 500) // this function will run frequently after 500ms