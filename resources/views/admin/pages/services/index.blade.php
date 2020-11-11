@extends('admin.layouts.master')
@section('title')
    Users
@endsection
@section('models')
<div class="modal fade" id="add_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Service</h5>
            </div>
            <form action="{{ url ('addService')}}" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="alert alert-success hidden SuccessMessage" ></div>
                    <div class="alert alert-danger hidden ErrorMessage" ></div>
                    {!! csrf_field() !!}
                    {{-- <input placeholder="id" type="hidden" required name="id" value=$id /> --}}
                    <div class="col-md-6 form-group">
                        <label>Service name</label>
                        <input class="form-control" placeholder="name" type="text" required name="name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Service type</label>
                        <input class="form-control" placeholder="type" type="text" required name="type">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Service Icon</label>
                        <input  placeholder="icon" type="file" required name="icon">
                    </div>
                     
                     

                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="custom-btn green-bc ">add</button>
                    <button type="button" class="custom-btn red-bc" data-dismiss="modal">close</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
@endsection

@section('content')
<div class="content">
    <div class="col-sm-12 page-heading">
        <div class="col-sm-6">
            <h2>Services</h2>
        </div><!--End col-md-6-->
        <div class="col-sm-6">
            <ul class="breadcrumb">
                {{-- <li><a href="{{ Route('home') }}">لوحة التحكم</a></li> --}}
                {{-- <li class="act ive"> Service</li> --}}
            </ul>
        </div><!--End col-md-6-->
    </div>
    <div class="col-sm-12">
        <button  data-toggle="modal" data-target="#add_service" action="{{ url('addService') }}" class="custom-btn green-bc">
            <i class="fa fa-plus"></i>
            Add Service
        </button>
    </div>
    <div class="spacer-15"></div>
    <div class="widget">
         <div class="widget-content">
            <div class="table-responsive">
                <table id="datatable"  class="table table-bordered table-hover table-cen">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>إسم الخدمة</th>
                            <th> نوع الخدمة</th>
                            <th>Icon</th>
                             
                             
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($services as $one)
                        <tr class="tr_{{ $one->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $one->name }}</td>
                            <td>{{ $one->type }}</td>
                            <td><img height="130 " width="130" src="{{url(''. $one->icon )}}"/></td>
                             
                        
                             
                            
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



