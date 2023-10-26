<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Message</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/global.css" />

    <link rel="stylesheet" href="../css/message-list.css" />
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
                <a href="message.html">
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
        <div class="search-wrapper">
          <div class="search">
            <img src="../assets/images/search-icon-active.svg" alt="" />
            <form action="#">
              <input type="text" placeholder="Search chat here" />
            </form>
          </div>

          <div class="chat-list">
            <a href="message.html">
              <div class="chat-1 flex-wrap">
                <img src="../assets/images/nakiri.svg" alt="" />
                <div class="chat-description">
                  <h4>sirkoping_</h4>
                  <span>Palo XUY</span>
                  <span>|</span>
                  <span>Recently</span>
                </div>
              </div>
            </a>

            <a href="message.html">
              <div class="chat-2 flex-wrap">
                <img src="../assets/images/nakiri.svg" alt="" />
                <div class="chat-description">
                  <h4>sirkoping_</h4>
                  <span>Palo XUY</span>
                  <span>|</span>
                  <span>1 hour ago</span>
                </div>
              </div>
            </a>

            <a href="message.html">
              <div class="chat-3 flex-wrap">
                <img src="../assets/images/nakiri.svg" alt="" />
                <div class="chat-description">
                  <h4>sirkoping_</h4>
                  <span>Palo XUY</span>
                  <span>|</span>
                  <span>1 day ago</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </main>

    <script src="../js/app.js"></script>
  </body>
</html>
