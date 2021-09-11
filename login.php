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
      <section class="form login">

        <header>Realtime Chat App</header>

        <form action="#">
          <div class="error-text">This is an error message</div>

          <div class="field input">
            <label>Email Address:</label>
            <input type="email" placeholder="Enter email address" />
          </div>

          <div class="field input">
            <label>Password:</label>
            <input type="password" placeholder="Enter new password" />
            <i class="fas fa-eye"></i>
          </div>

          <div class="field">
            <input class="button" type="submit" value="Continue to Chat"/>
          </div>
        </form>
        <div class="link">Not yet signed up? <a href="#">Signup now</a></div>
        
      </section>
    </div>

    <script src="./js/show-hide-pass.js"></script>
  </body>
</html>
