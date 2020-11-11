@extends('admin.layouts.master')
@section('title')
    Home page
@endsection
@section('content')
    <div class="content">
        <div class="col-sm-12">
            <div class="widget">
                <div class="widget-content">
                    <div class="col-sm-12">
                        <link rel="shortcut icon" href="{{asset('assets/admin/images/fav-icon.png')}}">
                    </div>
                    
                    <div class="funfact-lists">
                        <div class="col-sm-4">
                            <div class="counter">
                                <h3 class="timer" data-to="" data-speed="2000">{{$admin}}</h3> 
                                <div class="count-name">Admines</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                             <h3 class="timer" data-to="" data-speed="2000">{{$user}}</h3> 
                                <div class="count-name">Users</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                            <h3 class="timer" data-to="" data-speed="2000">{{$provider}}</h3>
                                <div class="count-name">Providers</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                             <h3 class="timer" data-to="" data-speed="2000">{{$service}}</h3> 
                                <div class="count-name">Services</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                             <h3 class="timer" data-to="" data-speed="2000">{{$subService}}</h3>
                                <div class="count-name">Sub Services</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                             <h3 class="timer" data-to="" data-speed="2000">{{$order}}</h3> 
                                <div class="count-name">Orders</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection