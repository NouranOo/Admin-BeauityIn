<div class="side-menu">
    <div class="logo">
        {{-- <img src="{{asset('storage/uploads/logo/'.$settings->image)}}"> --}}
    </div><!--End Logo-->
    <aside class="sidebar">
        <ul class="side-menu-links">
            <li class="@if(Request::url() == 'dashboard'){{'active'}}@endif"><a href="{{url('dashboard')}}">DashBoard</a></li>
            {{-- <li class="@if(Request::url() == 'settings'){{'active'}}@endif"><a href="{{ url (' settings')}}">settings</a></li> --}}
            {{-- <li class="sub-menu @if(Request::url()== 'section' || Request::route()->getName() == 'admin.testmonials'){{'active'}}@endif"> --}}
                {{-- <a rel="nofollow" rel="noreferrer" href="javascript:void(0);">
                    Home page
                    <i class="fa fa-angle-down"></i>
                </a> --}}
                <ul>
                    {{-- <li class="@if(Request::route()->getName() == 'admin.home.section'){{'active'}}@endif"><a href="{{route('admin.home.section')}}">Sections</a></li> --}}
                    {{-- <li class="@if(Request::route()->getName() == 'admin.testmonials'){{'active'}}@endif"><a href="{{route('admin.testmonials')}}">testmonials</a></li> --}}
                </ul>
            </li>

            <li class="@if(Request::url() == 'getAdmin'){{'active'}}@endif"><a href="{{ url ('getAdmin')}}">Admins</a></li>
            <li class="@if(Request::url()  == 'getUser'){{'active'}}@endif"><a href="{{ url('getUser')}}">Users</a></li>
            <li class="@if(Request::url() == ' getProvider'){{'active'}}@endif"><a href="{{ url('getProvider')}}">Providers</a></li>
            <li class="@if(Request::url() == 'getService'){{'active'}}@endif"><a href="{{ url ('getService')}}">Services</a></li>
            <li class="@if(Request::url()  == 'getSubService'){{'active'}}@endif"><a href="{{ url('getSubService')}}">Sub Services</a></li>
            <li class="@if(Request::url()  == 'getOrder'){{'active'}}@endif"><a href="{{ url('getOrder')}}">Orders</a></li>
            <li class="@if(Request::url()  == 'getPricePackage'){{'active'}}@endif"><a href="{{ url('getPricePackage')}}">Price Packages</a></li>

        </ul>
    </aside>
</div>
