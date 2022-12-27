<header id="masthead" class="site-header header-primary">
    <!-- header html start -->
    @include('Layouts.top-menu')

    <div class="bottom-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="site-identity">
                <h1 class="site-title">
                    <a href="index.html">
                        <img src="{{ asset('assets/images/twalog.png') }}" alt="logo">
                    </a>
                </h1>
            </div>
            <div class="main-navigation d-none d-lg-block">
                <nav id="navigation" class="navigation">
                    <ul>
                        <li class="menu">
                            <a href="{{ URL::to('index') }}">Home</a>
                        </li>
                        <li class="menu">
                            <a href="{{ URL::to('about') }}">About</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="">Tour</a>
                            <ul>
                                <li>
                                    <a href="{{ URL::to('tetema') }}">Tetema Tour</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('pamoja') }}">Pamoja Tour</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('rose') }}">Rose Tour</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('ansi') }}">Ansi Tour</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('lina') }}">Lina Tour</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('sharma') }}">Sharma Tour</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Destination</a>
                            <ul>
                                <li>
                                    <a href="{{ URL::to('tarangire') }}">Tarangire National Park</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('manyara') }}">Manyara National Park</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('arusha') }}">Arusha National Park</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('ngorongoro') }}">Ngorongoro National Park</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a >Adventures</a>
                            <ul>

                                <li>
                                    <a href="#">Trekking</a>
                                    <ul>
                                        <li>
                                            <a href="{{ URL::to('momela') }}">Momela Trekk</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('miriakamba') }}">Miriakamba Trekk</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('rongai') }}">Rongai Trekk</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('northern') }}">Northern Circuit</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ URL::to('culture') }}">Cultural Activities</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ URL::to('contact') }}">Contact</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="header-btn">
                <a href="{{ URL::to('contact') }}" class="button-primary">ENQUIRE NOW</a>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>
