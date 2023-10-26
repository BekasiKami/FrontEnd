<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/signup.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- left col register -->
      <div class="left">
        <div class="left-wrapper">
          <img src="../assets/images/logo.svg" alt="logo" class="logo" />
          <h1>Sign up</h1>
          <form action="#" class="form-login">
            <div class="form-input">
              <div class="top-input-wrapper">
                <input type="text" placeholder="Full name" />
                <input type="email" placeholder="Email" />
                <input type="text" placeholder="Username" />
              </div>

              <div class="gender-wrapper">
                <p>Gender</p>
                <input type="radio" name="gender" id="male" />
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" />
                <label for="female">Female</label>
                <input type="radio" name="gender" id="notprefer" />
                <label for="notprefer">Prefer not to say</label>
              </div>
              <div class="password-wrapper">
                <input type="password" placeholder="Password" />
                <input type="password" placeholder="Confirm Password" />
              </div>
            </div>
            <button type="submit" class="btn-submit">Register</button>
          </form>
          <p>Already have an account? <a href="../index.html">Sign in</a></p>
        </div>
      </div>

      <!-- left col register end -->

      <!-- right col register  -->
      <div class="right">
        <div class="update-notice">
          <h4>New Update Available</h4>
          <p>We have added some new <br />awesome features</p>
          <a href="#" class="btn-learn-more">LEARN MORE</a>
        </div>

        <figure class="image-banner">
          <img src="../assets/images/image-banner.svg" alt="image banner" />
        </figure>
      </div>

      <!-- right col register end -->
    </div>
  </body>
</html>
