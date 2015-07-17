@extends('layout.dashboard.authorize')
@section('content')
	<div class="container-fluid">
		<div class="row">
      <div class="col-md-12">
      
        <div class="block-flat">
          <div class="header">							
            <h3>Edit Profile</h3>
          </div>
          <div class="content">
             <form style="border-radius: 0px;" action="#" class="form-horizontal group-border-dashed">
              <div class="form-group">
                <label class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-6">
                  <input type="text" name='profile[fname]' class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-6">
                  <input type="text" name='profile[lname]' class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Input Password</label>
                <div class="col-sm-6">
                  <input type="password" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Placeholder Input</label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Placeholder text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Disabled Input</label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Disabled input text" class="form-control" disabled="disabled">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Readonly Input</label>
                <div class="col-sm-6">
                  <input type="text" value="Readonly input text" class="form-control" readonly="readonly">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Textarea</label>
                <div class="col-sm-6">
                  <textarea class="form-control"></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
        
                
      </div>
    </div>
	</div>
@endsection