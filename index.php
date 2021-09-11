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
      <section class="form signup">

        <header>Realtime Chat App</header>

        <form action="#" enctype="multipart/form-data">
          <div class="error-text">This is an error message</div>

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
            <input type="password" name="password" placeholder="Enter new password" required />
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
        <div class="link">Already signed up? <a href="#">Login now</a></div>

      </section>
    </div>

    <script src="./js/show-hide-pass.js"></script>

    <script src="./js/signup.js"></script>
  </body>
</html>
