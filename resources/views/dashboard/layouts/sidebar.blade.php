
<nav id="navbar">
        <div class="logo-name">
            {{-- <div class="logo-image">
                <img src="img/1.png" alt="">
            </div> --}}

            <span class="logo_name">Admin Sidorejo</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links" style="padding-left:0;">
                {{-- <li><a {{ Request::is("dashboard") ? "class=active" : "" }} href="/dashboard/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li> --}}
                <li><a href="/">
                    <i class="uil uil-globe"></i>
                    <span class="link-name">Web</span>
                </a></li>
                <li><a {{ Request::is("dashboard/headline*") ? "class=active" : "" }} href="/dashboard/headline/">
                    <i class="uil uil-archway"></i>
                    <span class="link-name">Headline</span>
                </a></li>
                <li><a {{ Request::is("dashboard/facility*") ? "class=active" : "" }} href="/dashboard/facility/">
                    <i class="uil uil-building"></i>
                    <span class="link-name">Fasilitas</span>
                </a></li>
                <li><a {{ Request::is("dashboard/gallery*") ? "class=active" : "" }} href="/dashboard/gallery">
                    <i class="uil uil-image-plus"></i>
                    <span class="link-name">Gallery</span>
                </a></li>
                <li><a {{ Request::is("dashboard/about*") ? "class=active" : "" }} href="/dashboard/about">
                    <i class="uil uil-megaphone"></i>
                    <span class="link-name">About</span>
                </a></li>
                <li><a {{ Request::is("dashboard/kontak*") ? "class=active" : "" }} href="/dashboard/kontak/edit">
                    <i class="uil uil-at"></i>
                    <span class="link-name">Kontak</span>
                </a></li>
                {{-- <li><a {{ Request::is("dashboard/comment*") ? "class=active" : "" }} href="/dashboard/comment/">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Komentar</span>
                </a></li>
                <li><a href="/sitemap">
                    <i class="uil uil-sitemap"></i>
                    <span class="link-name">Update Sitemap</span>
                </a></li> --}}
            </ul>
            <ul class="logout-mode" style="padding-left:0;">
                <li>
                    <a href="/logout">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
                {{-- <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li> --}}
            </ul>
        </div>
</nav>
