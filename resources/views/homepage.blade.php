<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    {{-- <link rel="stylesheet" href="assets/css/global.css" /> --}}
    {{-- <link rel="stylesheet" href="assets/css/homepage.css" /> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header class="top-[20px]">
      <div class="container relative">
        <div class="header-wrapper flex justify-between items-center">
          <a href="/homepage">
            <img src="assets/images/secondary-logo.svg" alt="" />
          </a>
          <nav>
            <ul class="flex items-center gap-[30px]">
              <li>
                <a href="#">
                  <img src="assets/images/home-icon-active.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="search.html">
                  <img src="assets/images/search-icon.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="assets/images/post-icon.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="message-list.html">
                  <img src="assets/images/message-icon.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="userprofile.html">
                  <img src="assets/images/user-icon.svg" alt="" />
                </a>
              </li>
            </ul>
          </nav>
          <div class="menu-bar" id="menu-bar">
            <img src="assets/images/menu-bar.png" style="cursor: pointer" />
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
      <div class="container relative">
        <section class="post-wrapper max-w-[500px] mx-auto my-12">
          <div class="post-text border shadow-[0_4px_4px_rgba(223,84,104,0.25)] flex items-center justify-between mb-[1.2rem] px-6 py-4 rounded-[5px] border-solid border-[rgba(223,84,104,0.5)]">
            <img src="assets/images/jessica.svg" alt="" />
            <form class="font-normal inline-block w-[300px] mr-8 border-0 outline: none" action="#">
              <input class="text-black font-normal italic text-base" type="text" placeholder="Write something" />
              <button class="border shadow-[0_0_4px_rgba(223,84,104,1)] text-[rgba(223,84,104,1)] bg-transparent cursor-pointer px-[0.8rem] py-[0.3rem] border-solid border-[rgba(223,84,104,1)]">Post</button>
            </form>
          </div>
          <div class="grid grid-cols-[0.5fr_3fr] gap-[15px] mx-0 my-[15px] px-0 py-[1.2rem] border-y-[gray] border-t border-solid border-b">
            <div class="left relative">
              <div class="left-img-wrapper h-full text-center relative">
                <img class="w-5 inline-block mt-[-5px] mr-[-5px] mb-[-5px] ml-[-5px]" src="{{ $profile_image }}" alt="" />
                <div class="bottom-images absolute text-center bottom-0 inset-x-0">
                  <img src="{{ $profile_image }}" alt="" />
                  <img src="{{ $profile_image }}" alt="" />
                  <img src="{{ $profile_image }}" alt="" />
                </div>
                <div class="line w-0.5 absolute bg-black left-2/4 top-10 bottom-[19px]"></div>
              </div>
            </div>
            <div class="right">
              <div class="posted-header flex items-center mx-0 my-2.5">
                <h5 class="username mr-auto">{{ $username }}</h5>
                <span class="post-time text-[rgba(69,69,69,0.6)] font-normal text-xs mr-4">{{ $post_time }}</span>
                <button class="bg-transparent cursor-pointer border-0">
                  <img src="assets/images/three-dots.png" alt="" />
                </button>
              </div>
              <div class="posted-image">
                <img src="{{ $image }}" alt="" />
              </div>

              <div class="posted-buttons bg-transparent cursor-pointer mx-[5px] my-[15px] border-0">
                <button class="likes">
                  <img src="assets/images/love-icon-active.svg" alt="" />
                </button>
                <button class="comments">
                  <img src="assets/images/comments-icon.svg" alt="" />
                </button>
                <button class="share">
                  <img src="assets/images/share-icon.svg" alt="" />
                </button>
              </div>

              <div class="posted-activities">
                <span class="text-[rgba(69,69,69,0.7)] font-normal text-xs">20 Likes</span>
                <span class="text-[rgba(69,69,69,0.7)] font-normal text-xs">-</span>
                <span class="text-[rgba(69,69,69,0.7)] font-normal text-xs">3 Comments</span>
              </div>
            </div>
          </div>
        </section>
        <button class="explore absolute cursor-pointer bg-transparent text-[rgba(223,84,104,1)] border px-[1.7rem] py-[0.8rem] rounded-[10px] border-solid border-[rgba(223,84,104,1)] right-[0%] bottom-[2%]">
          <span>Explore</span>
          <img src="assets/images/explore-arrow.svg" alt="" />
        </button>
      </div>
    </main>

    <script src="js/app.js"></script>
  </body>
</html>
