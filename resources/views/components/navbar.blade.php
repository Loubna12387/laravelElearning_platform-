<div class=" navContainere ">

    <a href="# " class="logo ">
        <img src="{{asset("images/logo.gif")}}" alt="EduWeb logo ">
    </a>

    <nav class="navbare ">

        <ul class="navbarlist ">

            <li class="navbaritem ">
                <a href="{{ route('home') }}" class="navbarlink ">Home</a>
            </li>

            <li class="navbaritem ">
                <a href="{{ route('courses') }} " class="navbarlink ">Courses</a>
            </li>

            <li class="navbaritem ">
                <a href="{{ route('blog') }}" class="navbarlink ">Blog</a>
            </li>

            <li class="navbaritem">
                <a href="{{ route('contact') }}" class="navbarlink ">Contact</a>
            </li>

            <li class="navbaritem ">
                <a href="{{ route('about') }} " class="navbarlink ">About</a>
            </li>

            <button id="searchBtn">
                <ion-icon name="search"></ion-icon>
            </button>
        </ul>

    </nav>
    <div class="user ">
        <a href="{{ route('login') }}" class=" navbarlink ">
           login
        </a>
        <a href="{{ route('register') }}" class="btnp ">
           start for free
        </a>
    </div>
</div>
