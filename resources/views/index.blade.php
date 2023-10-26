<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- website title -->
    <title>Nyosmed</title>

    <!-- metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Nyosmed adalah forum percakapan universitas bina insani"
    />

    <!-- link google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- general css -->
    <link rel="stylesheet" href="assets/css/global.css" />

    <!-- custom login css -->
    <link rel="stylesheet" href="assets/css/login.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- left col login -->
      <div class="left">
        <div class="left-wrapper">
          <img src="assets/images/logo.svg" alt="logo" class="logo" />
          <h1>Welcome back</h1>

          <a href="#" class="btn-google-login">
            <img src="assets/images/google-icon.svg" />
            <span>Log in with Google</span>
          </a>

          <div class="login-email-text">
            <span class="line"></span>
            <span class="text">OR LOGIN WITH EMAIL</span>
            <span class="line"></span>
          </div>

          <form action="#" class="form-login">
            <div class="form-input">
              <input type="email" placeholder="Email" />
              <input type="password" placeholder="Password" />
            </div>

            <div class="forgot-password">
              <a href="#" class="forgot-password">Forgot Password</a>
            </div>
            <a href="/homepage" class="btn-submit">Log in</a>
          </form>

          <p>
            Don't have account yet? <a href="./pages/signup.html">Sign Up</a>
          </p>
        </div>
      </div>
      <!-- left col login end -->

      <!-- right col login  -->
      <div class="right">
        <div class="update-notice">
          <h4>New Update Available</h4>
          <p>We have added some new <br />awesome features</p>
          <a href="#" class="btn-learn-more">LEARN MORE</a>
        </div>

        <figure class="image-banner">
          <img src="./assets/images/image-banner.svg" alt="image banner" />
        </figure>
      </div>

      <!-- right col login end -->
    </div>
  </body>
</html>
