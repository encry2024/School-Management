<div class="ui menu inverted right aligned blue" style="border-radius: 0rem !important;">
    <div class="header item">Holy Infant Montessori &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="right menu">
        <div class="ui dropdown item">
            <i class="user icon"></i> {{ Auth::user()->name }} <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item">Profile</a>
                <a class="item">Settings</a>
                <a class="item" href="{{ url('/auth/logout') }}">Logout</a>
            </div>
        </div>
        <a class="right item"><i class="icon home"></i> Home</a>
    </div>
</div>