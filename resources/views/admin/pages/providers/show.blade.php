@extends('admin.layouts.master')
@section('title')
    Messages
@endsection
@section('content')
    <div class="content">
        <div class="col-sm-12 page-heading">
            <div class="col-sm-6">
                <h2>Pharmacies</h2>
            </div><!--End col-md-6-->
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Pharmacies</li>
                </ul>
            </div><!--End col-md-6-->
        </div>
        <div class="spacer-15"></div>
        <div class="widget">
            <div class="col-sm-8">
                <div class="col-md-6 form-group">
                    <label>name</label>
                    <blockquote>{{$pharmacy->pharmacy_name}}</blockquote>
                </div>
                      <div class="col-md-6 form-group">
                    <label>Doctor name</label>
                    <blockquote>{{$pharmacy->doctor_name}}</blockquote>
                </div>
                <div class="col-md-6 form-group">
                    <label>Address</label>
                    <blockquote>{{$pharmacy->pharmacy_address}}</blockquote>
                </div>
                <div class="col-md-6 form-group">
                    <label>Email </label>
                    <blockquote>{{$pharmacy->email}}</blockquote>
                </div>
                <div class=" col-md-6 form-group">
                    <label>available_time</label>
                    <blockquote>{{$pharmacy->available_time}}</blockquote>
                </div>
           
                <div class="col-md-6 form-group">
                        <label>owner_name</label>
                        <blockquote>{{$pharmacy->owner_name}}</blockquote>
                    </div>
                    <div class="col-md-6 form-group">
                            <label>region</label>
                            <blockquote>{{$pharmacy->region}}</blockquote>
                        </div>
                        <div class="col-md-6 form-group">
                                <label>branch_number</label>
                                <blockquote>{{$pharmacy->branch_number}}</blockquote>
                            </div>
                              <div class="col-md-6 form-group">
                                <label>mobile_number</label>
                                <blockquote>  {{$pharmacy->mobile_number}}</blockquote>
                            </div>
                         
                            <div class="col-md-6 form-group">
                                    <label>PharmacyLicence</label>
                                    <a href="{{url('admin/pharmacies/downloadPharmacyLicence/'.$pharmacy->id)}}" class="custom-btn green-bc" >download</a>
                                    
                                </div>
                                <div class="col-md-6 form-group">
                                        <label>UnionLicence</label>
                                        <a href="{{url('admin/pharmacies/downloadUnionLicence/'.$pharmacy->id)}}" class="custom-btn green-bc" >download</a>
                                        
                                    </div>
                                    <div class="col-md-6 form-group">
                                            <label>commerical_registration</label>
                                            <a href="{{url('admin/pharmacies/downloadCommerical/'.$pharmacy->id)}}" class="custom-btn green-bc" >download</a>
                                        </div>
            </div>
            <div class="clearfix"></div>
            <hr>
        </div>
    </div>
@endsection