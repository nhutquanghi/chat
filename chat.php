<?php
  session_start();
  if(!isset($_SESSION['unique_id'])) { // nếu users cố tình trỏ đường dẫn tới users => trả users về login/signup
    header("location: login.php");
  }
?>
<?php include_once "layout/header.php"; ?>

  <body>
    <div class="wrapper">
      <section class="chat-area">

        <header>
          <?php 
            include_once "php/config.php";
            $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
            if(mysqli_num_rows($sql) > 0) {
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <img src="php/images/<?php echo $row['img'] ?>" alt="" />
          <div class="details">
            <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
            <p><?php echo $row['status'] ?></p>
          </div>
        </header>

        <div class="chat-box">
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing el itamet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="./assets/images/avatar.jpg" alt="">
            <div class="details"> 
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <form action="#" class="typing-area">
          <input type="text" placeholder="Type a message here...">
          <button><i class="fab fa-telegram-plane"></i></button>
        </form>
      </section>
    </div>
  </body>
</html>
