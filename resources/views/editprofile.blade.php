<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Profile</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/editprofile.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-wrapper">
          <a href="homepage.html">
            <img src="../assets/images/secondary-logo.svg" alt="" />
          </a>
          <nav>
            <ul>
              <li>
                <a href="homepage.html">
                  <img src="../assets/images/home-icon.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="search.html">
                  <img src="../assets/images/search-icon.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="../assets/images/post-icon.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="message-list.html">
                  <img src="../assets/images/message-icon.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="userprofile.html">
                  <img src="../assets/images/user-icon-active.svg" alt="" />
                </a>
              </li>
            </ul>
          </nav>
          <div class="menu-bar" id="menu-bar">
            <img src="../assets/images/menu-bar.png" style="cursor: pointer" />
          </div>
        </div>
        <div class="option-menu">
          <a href="notification.html">Notification</a>
          <a href="#">Setting</a>
          <a href="#">About</a>
          <a href="#">Report a problem</a>
          <a href="#">Log out</a>
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        <div class="edit-profile-wrapper">
          <div class="back-to-userprofile">
            <a href="userprofile.html">
              <img src="../assets/images/back-arrow.svg" alt="" />
              <span>Edit profile</span>
            </a>
          </div>
          <div class="edit-profile">
            <div class="edit-header">
              <img src="../assets/images/jessica.svg" alt="" />
              <div class="edit-profile-description">
                <div class="edit-profile-description-top">
                  <h4>Jessica_</h4>
                  <button>Change Password</button>
                </div>
                <button>Change photo profile</button>
              </div>
            </div>

            <form action="#">
              <div class="form-wrapper">
                <label for=""> Altenative name </label>
                <input type="text" value="Jessica Cathy" />
              </div>
              <p class="text-info">
                This name will be show as an alternate name of your account
              </p>

              <div class="form-wrapper">
                <label for="#">gender</label>
                <input type="text" value="female" />
              </div>
              <p class="text-info">
                This not will be part of your public profile
              </p>

              <div class="form-wrapper">
                <label for="">Email</label>
                <input
                  type="email"
                  name=""
                  id=""
                  value="jessica.catty@gmail.com"
                />
              </div>

              <div class="form-wrapper">
                <label for="#">No telephone</label>
                <input type="number" value="0892123002" />
              </div>
              <button type="submit" class="btn-submit">Save</button>
            </form>
          </div>
        </div>
      </div>
    </main>

    <script src="../js/app.js"></script>
  </body>
</html>
