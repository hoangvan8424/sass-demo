<header class="header">
    <div class="header__container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="" width="120">
        </div>
        <nav class="menu">
            <ul>
                <li class="active">
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="#">Service</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="header__auth">
            <a href="#" class="btn-search">
                <img src="{{ Vite::asset('resources/images/ic_search.svg') }}" alt="" width="24">
            </a>
            <a href="#" class="btn-signup d-inline-flex justify-content-center align-items-center">Sign Up</a>
        </div>
    </div>
</header>
