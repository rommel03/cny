@extends('layout.dashboard.authorize')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div class="block-flat">
          <div class="header">							
            <h3>{{$title}}</h3>
          </div>
          <div class="box">
            <div class="box-content nopadding">
			     <table id="clinic-list-tbl"  class="table table-bordered"  >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Street</th>
                      <th>City</th>
                      <th>Zip Code</th>
                      <th>Phone</th>
                      <th>Contact Person</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($clinics as $clinic)
                  <tr>
                      <td>{{$clinic->name}}</td>
                      <td>{{$clinic->street}}</td>
                      <td>{{$clinic->city}}</td>
                      <td>{{$clinic->zip_code}}</td>
                      <td>{{$clinic->phone}}</td>
                      <td>{{$clinic->contact_person}}</td>
                      <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>              
        </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="<?php echo URL::to("js/jquery.datatables/jquery.datatables.min.js");?>"></script>
<script type="text/javascript" src="<?php echo URL::to("js/jquery.datatables/bootstrap-adapter/js/datatables.js"); ?>"></script>
<script>
  var functions = $('<div class="btn-group"><button class="btn btn-default btn-xs" type="button">Actions</button><button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" class="dropdown-menu pull-right"><li><a href="#">Edit</a></li><li><a href="#">Copy</a></li><li><a href="#">Details</a></li><li class="divider"></li><li><a href="#">Remove</a></li></ul></div>');
      $("#clinic-list-tbl tbody tr td:last-child").each(function(){
        $(this).html("");
        functions.clone().appendTo(this);
      });
      $(document).ready(function(){
        //initialize the javascript
        $("#clinic-list-tbl").dataTable();
        $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
        $('.dataTables_length select').addClass('form-control');  
      });
</script>
@endsection