const searchBar = document.querySelector(".users .search input")
const searchBtn = document.querySelector(".users .search button")
const usersList = document.querySelector(".users .users-list")

searchBtn.onclick = () => {
    searchBar.classList.toggle("active")
    searchBar.focus();
    searchBtn.classList.toggle("active")
    searchBar.value = "";
}

searchBar.onkeyup = () => {
  let searchTerm = searchBar.value;
  if(searchTerm != "") {
    searchBar.classList.add("active");
  }else {
    searchBar.classList.remove("active");
  }
  // start's Ajax
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open("POST", "php/search.php");
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
            usersList.innerHTML = data;
      }
    }
  };
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

setInterval(() => {
  // Khởi tạo Ajax: phản hồi này đến từ tệp PHP mà không cần tải lại trang
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open("GET", "php/users.php");
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if(!searchBar.classList.contains("active")) {
          // nếu hoạt động đang hoạt động không chứa trong thanh tìm kiếm thì hãy thêm dữ liệu này
          usersList.innerHTML = data;
        }
    }
    }
  };
  xhr.send();
}, 2000) // this function will run frequently after 1000