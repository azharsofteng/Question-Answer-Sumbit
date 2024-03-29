<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
                {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Layouts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Static Navigation</a>
                        <a class="nav-link" href="#">Light Sidenav</a>
                    </nav>
                </div> --}}
                {{-- <div class="sb-sidenav-menu-heading">Addons</div> --}}
                {{-- <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Ans List
                </a> --}}
                <a class="nav-link {{ Request::is('table') ? 'active' : '' }}" href="{{ route('table') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Ans List
                </a>
                <a class="nav-link {{ Request::is('send.sms') ? 'active' : '' }}" href="{{ route('table') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Send SMS
                </a>
                {{-- <a class="nav-link {{ Request::is('form') ? 'active' : '' }}" href="{{ route('form') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Input Group
                </a> --}}
                <a class="nav-link" href="{{ route('logout') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-sign-out-alt"></i></div>
                    Logout
                </a>
            </div>
        </div>
    </nav>
</div>