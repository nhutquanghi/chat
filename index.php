<?php include_once "layout/header.php"; ?>

  <body>
    <div class="wrapper">
      <section class="form signup">

        <header>Realtime Chat App</header>

        <form action="#" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>

          <div class="name-details">
            <div class="field input">
              <label>First Name:</label>
              <input type="text" name="fname" placeholder="First name" required />
            </div>
            <div class="field input">
              <label>Last Name:</label>
              <input type="text" name="lname" placeholder="Last name" required />
            </div>
          </div>

          <div class="field input">
            <label>Email Address:</label>
            <input type="email" name="email" placeholder="Enter email address" required />
          </div>

          <div class="field input">
            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter new password" required aria-autocomplete="list" />
            <i class="fas fa-eye"></i>
          </div>

          <div class="field image">
            <label>Select Image:</label>
            <input type="file" name="image" />
          </div>

          <div class="field button">
            <input type="submit" value="Continue to Chat"/>
          </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">Login now</a></div>

      </section>
    </div>

    <script src="./js/show-hide-pass.js"></script>

    <script src="./js/signup.js"></script>
  </body>
</html>
