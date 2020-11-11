@extends('admin.layouts.master')
@section('title')
    Users
@endsection
@section('models')
@foreach($providers as $provider)
<div class="modal fade" id="accept_provider{{$provider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content text-center">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Do you want accept Provider ?</h5>
               </div>
               <div class="modal-footer text-center">
                   <a type="button" class="custom-btn red-bc modalactTBTN">Accept</a>
                   <button type="button" class="custom-btn green-bc" data-dismiss="modal">close</button>
               </div>

           </div>
       </div>
   </div>
   @endforeach
  @endsection
@section('content')
<div class="content">
    <div class="col-sm-12 page-heading">
        <div class="col-sm-6">
            <h2>Providers</h2>
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
                             <th>اسم المكان </th>
                             <th>action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($providers as $one)
                        <tr class="tr_{{ $one->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $one->name }}</td>
                            <td>{{ $one->email }}</td>
                            <td>{{ $one->phone }}</td>
                            <td>{{ $one->place_name }}</td>
                            <td>  @if($pharmacy->verified==0)
                                <button data-url="{{url('/accept',['id' => $provider->id])}}"  data-toggle="modal"  data-target="#accept_provider{{$provider->id}}" class="icon-btn green-bc acceptBtn">
                                        <i class=" fa fa-check"></i>

                                    </button>
                                    @endif
                            </td>



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
