<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src">
            <img src="{{asset('assets/img/logo.png')}}" alt="logo-ikaman">
        </div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <div class="avatar d-flex justify-content-center">
                                        <img src="{{Auth::user()->photo_url}}" alt="foto-profil">
                                    </div>
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="0" role="menu"
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="{{url('portal/profil')}}" class="dropdown-item">Profil</a>
                                    <button onclick="$('form#logout').submit()" type="button" tabindex="0" class="dropdown-item">Logout</button>
                                    <form id="logout" class="d-none" action="{{url('portal/logout')}}" method="POST">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{Auth::user()->name}}
                            </div>
                            <div class="widget-subheading">
                                {{Auth::user()->role->name}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>