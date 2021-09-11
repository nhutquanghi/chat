<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat Application</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="wrapper">
      <section class="chat-area">

        <header>
          <a href="#" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <img src="./assets/images/avatar.jpg" alt="" />
          <div class="details">
            <span>Name user</span>
            <p>Active now</p>
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
