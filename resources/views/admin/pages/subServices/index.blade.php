@extends('admin.layouts.master')
@section('title')
    Sub Services
@endsection
@section('models')
<div class="modal fade" id="add_subService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Sub-Service</h5>
            </div>
            <form action="{{ url ('addSubService')}}" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="alert alert-success hidden SuccessMessage" ></div>
                    <div class="alert alert-danger hidden ErrorMessage" ></div>
                    {!! csrf_field() !!}
                    <div class="col-md-6 form-group">
                            <label>Service name</label>
                    <select name="service_id" class="form-control">
                    @foreach($services as $service)
                    {{-- {{ dd($service) }} --}}
                    <option value="{{$service->id}}" >{{$service->name}}</option>
                    @endforeach

                    </select>                      
                  </div> 

                    <div class="col-md-6 form-group">
                        <label>Sub-Service name</label>
                        <input class="form-control" placeholder="name" type="text" required name="name">
                    </div>
                    {{-- <div class="col-md-6 form-group">
                            <label>area Number</label>
                            <input class="form-control" placeholder="area Number" type="text" required name="name">
                        </div> --}}

                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="custom-btn green-bc ">add</button>
                    <button type="button" class="custom-btn red-bc" data-dismiss="modal">close</button>
                </div>
            </form>
        </div>
    </div>
</div>

    {{-- <div class="modal fade" id="delete_area" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
                </div>
                <form class="modal-footer text-center">
                    <a type="button" class="custom-btn red-bc modalDLTBTN">Delete</a>
                    <a type="button" class="custom-btn green-bc" data-dismiss="modal">Close</a>
                </form>
            </div>
        </div>
    </div> --}}
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
        <button  data-toggle="modal" data-target="#add_subService" action="{{ url('addSubService') }}" class="custom-btn green-bc">
            <i class="fa fa-plus"></i>
            Add Sub-Service
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
                            {{-- <th> نوع الخدمة</th> --}}
                              {{-- <th>رقم الموبيل </th>
                             <th>النوع </th> --}}
                             
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($subServices as $one)
                        <tr class="tr_{{ $one->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $one->name }}</td>
                            {{-- <td>{{ $one->type }}</td> --}}
                            {{-- <td>{{ $one->phone }}</td>
                            <td>{{ $one->user_type }}</td> --}}
                             
                            
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



