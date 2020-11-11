<div class="top-header">
    <div class="toggle-icon"  data-toggle="tooltip" data-placement="right" title="Toggle Menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul class="top-header-links">
        <li class="profile">
            <a class="custom-btn">
                {{-- <img src="{{asset('storage/uploads/logo/'.$settings->image)}}"> --}}
                {{-- {{auth()->guard('admins')->user()->name}} --}}
            </a>
        </li>
        <li>
            <a href="{{ url ('login')}}">
                <i class="fa fa-power-off"></i>
                Logout
            </a>
        </li>
    </ul>
</div>