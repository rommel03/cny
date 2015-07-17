@extends('layout.dashboard.authorize')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div class="block-flat">
          <div class="header">							
            <h3>{{$title}}</h3>
          </div>
          @if(Session::get('account_complete'))
            {{Session::get('account_complete')}}
          @endif
          @if(Session::get('add_clinic_success'))
            {{Session::get('add_clinic_success')}}
          @endif
         @if(isset($errors) && is_object($errors) )
         @if($messages = $errors->all())
         <div class="top-margin alert alert-danger col-sm-6 col-md-6 col-md-offset-3">
            <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
            <i class="fa fa-times-circle sign"></i>
            <strong>Error!</strong>
            <hr>
            @foreach($messages as $er_msg)
              <p>{{$er_msg}}</p>
            @endforeach
            
          </div>
          @endif
         @endif
          <div class="content ">
            <form style="border-radius: 0px;" method="POST" action="" enctype="multipart/form-data" class="form-horizontal group-border-dashed">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label class="col-sm-3 control-label">Clinic Name</label>
                <div class="col-sm-6">
                  <input type="text" name='clinic[name]' placeholder="Clinic Name" value="{{ old('clinic.name') }}" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Street Address</label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Street" name='clinic[street]' value="{{ old('clinic.street') }}" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">City</label>
                <div class="col-sm-6">
                  <input type="text" name="clinic[city]" placeholder="City" class="form-control" value="{{ old('clinic.city') }}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Zip Code</label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Zip Code" name="clinic[zip_code]" class="form-control" value="{{ old('clinic.zip_code') }}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Clinic Phone #</label>
                <div class="col-sm-6">
                  <input type="phone" name="clinic[phone]" placeholder="Phone Number" class="form-control" value="{{ old('clinic.phone') }}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Contact Person</label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Contact Person" name="clinic[contact_person]" class="form-control"  value="{{ old('clinic.contact_person') }}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Clinic Tag Line</label>
                <div class="col-sm-6">
                  <textarea class="form-control" name="clinic[tag_line]">{{ old('clinic.tag_line') }}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Clinic Logo</label>
                <div class="col-sm-6">
                  <input type="file" name="clinic[logo]" class="">
                  <div id="clinic_logo_preview"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-3 control-label">
                  <input type="submit" value="Save" name="clinic[submit]" class="">
                  <div id="clinic_logo_preview"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection