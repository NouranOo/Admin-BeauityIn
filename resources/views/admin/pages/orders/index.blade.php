@extends('admin.layouts.master')
@section('title')
    Orders  
@endsection
@section('content')
<div class="content">
    <div class="col-sm-12 page-heading">
        <div class="col-sm-6">
            <h2>Orders</h2>
        </div><!--End col-md-6-->
        <div class="col-sm-6">
            <ul class="breadcrumb">
                {{-- <li><a href="{{ Route('home') }}">لوحة التحكم</a></li> --}}
                {{-- <li class="act ive"> Service</li> --}}
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
                            <th> اسم مقدم الخدمة</th>
                            <th>  حالة الطلب </th>
                            <th>اليوم </th>
                            <th>التاريخ </th>
                            <th>ملاحظات</th>
                             
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($orders as $one)
                        <tr class="tr_{{ $one->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $one->user->name }}</td>
                            <td>{{ $one->provider->name }}</td> 
                            <td>{{ $one->status }}</td>
                            <td>{{ $one->day }}</td>
                            <td>{{ $one->time }}</td>
                            <td>{{ $one->note }}</td>
                             
                            
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



