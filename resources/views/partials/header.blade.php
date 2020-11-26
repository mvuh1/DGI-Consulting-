<header id="header" class="has-nav-bar" style="margin-top: -5px"
    data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 108, 'stickySetTop': '-108px', 'stickyChangeLogo': false} ">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-logo">
                        <a href="{{ route('home') }}"><img src="icones/Logo.png" alt="DGI Logo"></a>
                    </div>
                </div>
                <div class="header-column">
                    <ul class="header-extra-info hidden-xs">
                        <li>
                            <div class="feature-box feature-box-style-3">
                                <div class="feature-box-icon">
                                    <img src="{{ asset('icones/phone_32px.png') }}" alt="phone">
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-none">+ 33 (0)7 67 22 34 51</h4>
                                    <p style="margin-top: 2px"><small>Agence Yaounde</small></p>
                                </div>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="feature-box feature-box-style-3">
                                <div class="feature-box-icon">
                                    <img src="{{ asset('icones/phone_32px.png') }}" alt="phone">
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-none">01 42 68 52 31</h4>
                                    <p><small>Agence Paris</small></p>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <div class="header-column hidden-sm">
                    <ul class="header-social-icons social-icons hidden-xs">
                        <li class="social-icons-facebook">
                            <a href="#" target="_blank" title="Facebook">
                                <img src="{{ asset('icones/facebook.png') }}" alt="facebook">
                            </a>
                        </li>
                        <li class="social-icons-twitter">
                            <a href="#" target="_blank" title="Twitter">
                                <img src="{{ asset('icones/twitter.png') }}" alt="twitter">
                            </a>
                        </li>
                        <li class="social-icons-linkedin">
                            <a href="#" target="_blank" title="Linkedin">
                                <img src="{{ asset('icones/linkedin.png') }}" alt="linkedin">
                            </a>
                        </li>
                        <li class="social-icons-linkedin">
                            <a href="#" title="Contact DGI">
                                <img src="{{ asset('icones/mail.png') }}" alt="mail">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-container header-nav header-nav-bar">
            <div class="container">
                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                    <i class="fa"><img src="{{ asset('icones/line.png') }}" alt="mail"></i>
                </button>
                <div
                    class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                    <nav>
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('icones/home2.png') }}" alt="home">
                                </a>
                            </li>
                            <li><a href="#">Expertise</a></li>
                            <li><a href="#">Solution</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Article</a></li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle">Nos formations</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">E-Formation</a>
                                    </li>
                                    <li>
                                        <a href="#">Marketing Digital</a>
                                    </li>
                                    <li>
                                        <a href="#">Management D'organisation</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle">Nos Services</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Certification internationale</a>
                                    </li>
                                    <li>
                                        <a href="#">Technique Reglémentaire</a>
                                    </li>
                                    <li>
                                        <a href="#">Conseil/Formation/Coaching</a>
                                    </li>
                                    <li>
                                        <a href="#">Terciare</a>
                                    </li>
                                    <li></li>
                                    <li>
                                        <a href="#">RH</a>
                                    </li>
                                    <li>
                                        <a href="#">QHSE</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle">A Propos de nous</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('dgi-info') }}">DGI Info</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('equipe') }}">L'équipe</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>        
    </div>
</header>
