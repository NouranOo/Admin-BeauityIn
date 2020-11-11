@extends('admin.layouts.master')
@section('title')
    Users
@endsection
@section('content')
<div class="content">
    <div class="col-sm-12 page-heading">
        <div class="col-sm-6">
            <h2>Users</h2>
        </div><!--End col-md-6-->
        <div class="col-sm-6">
            <ul class="breadcrumb">
                {{-- <li><a href="{{ Route('home') }}">لوحة التحكم</a></li> --}}
                {{-- <li class="active">مستخدم عادى</li> --}}
            </ul>
        </div><!--End col-md-6-->
    </div>
    <div class="spacer-15"></div>
    <div class="widget">
         <div class="widget-content">
            <div class="table-responsive">
                <table id="datatable"  class="table table-bordered table-hover table-cen">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>إسم المستخدم</th>
                            <th>البريد الألكترونى</th>
                              <th>رقم الموبيل </th>
                             <th>النوع </th>
                             
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($users as $one)
                        <tr class="tr_{{ $one->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $one->name }}</td>
                            <td>{{ $one->email }}</td>
                            <td>{{ $one->phone }}</td>
                            <td>{{ $one->user_type }}</td>
                             
                            
                         </tr>
                        @php($i++)
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
</div>
@stop



