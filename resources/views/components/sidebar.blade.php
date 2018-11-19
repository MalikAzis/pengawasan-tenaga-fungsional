<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo bg-linkedin">
        <a href="{{ route('dashboard') }}">
<img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
<h5 class="logo-text">Fungsional</h5>
</a>
    </div>
    <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
            <div class="avatar"><img class="mr-3 side-user-img" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
                <h6 class="side-user-name">Admin</h6>
            </div>
        </div>
        <div id="user-dropdown" class="collapse">
            <ul class="user-setting-menu">
                <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
                <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
                <li><a href="javaScript:void();"><i class="icon-power"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="@yield('beranda')">
            <a href="{{ route('dashboard') }}" class="waves-effect"><i class="icon-home"></i><span>Beranda</span></a>
        </li>
        <li class="@yield('IPKPS')">
            <a href="#" class="waves-effect"><i class="icon-badge"></i><span>IPKPS</span><i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
                <li class="@yield('unggahIPKPS')">
                    <li><a href="{{ route('ipkps.index') }}" class="waves-effect"><i class="icon-cloud-upload"></i> Unggah IPKPS</a></li>
                </li>

                <li class="@yield('penilaianIPKPS')">
                    <li><a href="{{ route('penilaian.index') }}" class="waves-effect"><i class="icon-badge"></i> Penilaian</a></li>
                </li>

                <li class="@yield('rekap')">
                    <li><a href="{{ route('rekap.index') }}" class="waves-effect"><i class="icon-docs"></i> Rekap</a></li>
                </li>

            </ul>
        </li>




    </ul>

</div>