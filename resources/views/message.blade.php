<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Message</title>

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/message.css" />
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
                  <img src="../assets/images/message-icon-active.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="userprofile.html">
                  <img src="../assets/images/user-icon.svg" alt="" />
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
        <div class="message-wrapper">
          <div class="top-message">
            <img src="../assets/images/hexa.png" alt="" />
            <span>hexa.fall</span>
          </div>
          <p class="message-time">20 July 2023 06.30</p>
          <div class="chat">
            <div class="right">
              <img src="../assets/images/hexa.png" alt="" />
              <p>aloo xuy</p>
            </div>
            <div class="left">
              <img src="../assets/images/jessica.svg" alt="" />
              <p>apa xuuy</p>
            </div>
            <div class="right">
              <img src="../assets/images/hexa.png" alt="" />
              <p>ngampus kahh ?</p>
            </div>
            <div class="left">
              <img src="../assets/images/jessica.svg" alt="" />
              <p>letsgolaa</p>
            </div>
            <div class="right">
              <img src="../assets/images/hexa.png" alt="" />
              <p>afah iyaah?</p>
            </div>
          </div>
        </div>

        <div class="type-message">
          <img src="../assets/images/smiley.svg" alt="" />
          <form action="">
            <input type="text" placeholder="Type message..." />
            <button type="submit">Send</button>
          </form>
        </div>
      </div>
    </main>

    <script src="../js/app.js"></script>
  </body>
</html>
