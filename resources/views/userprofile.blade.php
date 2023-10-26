<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User profile</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/global.css" />

    <link rel="stylesheet" href="../css/userprofile.css" />
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
        <div class="profile-wrapper">
          <div class="profile-information">
            <img
              src="../assets/images/jessica.svg"
              alt=""
              class="user-profile-image"
            />
            <div class="profile-detail">
              <div class="profile-header">
                <h4 class="username">Jessica_</h4>
                <a href="editprofile.html" class="btn-edit-profile"
                  >Edit profile</a
                >
              </div>
              <p class="full-name">Jessica Cathy</p>
              <div class="description">
                <span>3 post</span>
                <span>300 followers</span>
                <span>30 Following</span>
              </div>
            </div>
          </div>

          <div class="post-divider">
            <h3>Post</h3>
          </div>

          <div class="user-post">
            <div class="post-1">
              <img src="../assets/images/post-1.png" alt="" />
            </div>
            <div class="post-2">
              <img src="../assets/images/post-2.png" alt="" />
            </div>
            <div class="post-3">
              <img src="../assets/images/post-3.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="../js/app.js"></script>
  </body>
</html>
