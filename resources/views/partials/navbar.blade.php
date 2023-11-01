<header class="fixed top-[-20px] left-0 right-0 mx-auto bg-white">
    <div class="container relative">
        <div class="header-wrapper flex justify-between items-center">
            <a href="/homepage">
                <div class=" text-emerald-500 text-[26px] font-bold font-['Poppins'] leading-[60px]">Bekasi Kami</div>
            </a>
            <nav>
                <ul class="flex justify-center gap-[30px]">
                    <li>
                        <a class="{{ ($title === "Home") ? 'active' : ''}}" href="/homepage">
                            <img src="assets/images/home-icon.svg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="/search">
                            <img src="assets/images/search-icon.svg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/images/post-icon.svg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="/message-list">
                            <img src="assets/images/message-icon.svg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a class="{{ ($title === "Home") ? 'active' : ''}}" href="/userprofile">
                            <img src="assets/images/user-icon.svg" alt="" />
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="menu-bar w-[108px] h-[26px] pl-[79px] justify-end items-center gap-2.5 inline-flex"
                id="menu-bar">
                <img src="assets/images/menu-bar.png" style="cursor: pointer" />
            </div>
        </div>
        {{-- <div class="option-menu">
            <a href="notification.html">Notification</a>
            <a href="#">Setting</a>
            <a href="#">About</a>
            <a href="#">Report a problem</a>
            <a href="#">Log out</a>
        </div> --}}
    </div>
</header>