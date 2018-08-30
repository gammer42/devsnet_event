<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="{{URL::to('ux_interface/img/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about_us')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('service')}}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('portfolio')}}">Portfolio</a></li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('single_blog')}}">Blog Details</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('elements')}}">Elements</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
<!--================End Header Menu Area =================-->