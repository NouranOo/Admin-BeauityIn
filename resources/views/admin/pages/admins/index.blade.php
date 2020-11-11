@extends('admin.layouts.master')
@section('title')
    Admins
@endsection
@section('models')
<div class="modal fade" id="add_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Admin</h5>
            </div>
            <form action="{{ url ('addAdmin')}}" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="alert alert-success hidden SuccessMessage" ></div>
                    <div class="alert alert-danger hidden ErrorMessage" ></div>
                    {!! csrf_field() !!}
                    {{-- <input placeholder="id" type="hidden" required name="id"/> --}}
                    <div class="col-md-6 form-group">
                        <label>Admin name</label>
                        <input class="form-control" placeholder="name" type="text" required name="name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Admin email</label>
                        <input class="form-control" placeholder="email" type="text" required name="email">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Admin Password</label>
                        <input class="form-control" placeholder="password" type="password" required name="password">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Admin role</label>
                        <input class="form-control" placeholder="role" type="text" required name="role">
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
{{-- 
    <div class="modal fade" id="delete_city" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <h2>Admins </h2>
        </div><!--End col-md-6-->
        <div class="col-sm-6">
            <ul class="breadcrumb">
                {{-- <li><a href="{{ Route('home') }}">لوحة التحكم</a></li> --}}
                {{-- <li class="active">  الأدمن</li> --}}
            </ul>
        </div><!--End col-md-6-->
    </div>
    <div class="col-sm-12">
        <button  data-toggle="modal" data-target="#add_admin" action="{{ url('addAdmin') }}" class="custom-btn green-bc">
            <i class="fa fa-plus"></i>
            Add Admin
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
                            <th>إسم الأدمن</th>
                            <th>البريد الألكترونى</th>
                              {{-- <th>رقم الموبيل </th> --}}
                             <th>الدور </th>
                             
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($admins as $one)
                        {{-- {{ dd($one) }} --}}
                        <tr class="tr_{{ $one->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $one->name }}</td>
                            <td>{{ $one->email }}</td>
                            {{-- <td>{{ $one->phone }}</td> --}}
                            <td>{{ $one->role }}</td>
                             
                            
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



