@extends('layout.dashboard.default')

@section('content')


<div  class="login-container">

	<div class="middle-login">
		@if (session('status'))
		<div class="alert alert-success">
		{{ session('status') }}
		</div>
		@endif

		@if (count($errors) > 0)
		<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		</div>
		@endif
					
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-left">Reset Password</h3>
			</div>
			<div>
				
				<form style="margin-bottom: 0px !important;" method="POST" class="form-horizontal" action="<?php echo URL::to("password/email");?>" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="content">
						<h5 class="title text-center"><strong>Forgot your password?</strong></h5>
						<p class="text-center">Don't worry, we'll send you an email to reset your password.</p>
						<hr>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email"  parsley-trigger="change" required parsley-error-container="#email-error"  name="email" value="{{ old('email') }}" placeholder="Email" id="email" class="form-control">
							</div>
							<div id="email-error"></div>
						</div>
					</div>
							
					</div>
					<div class="foot row">
						<div class="col-sm-12">
							<button class="pull-left btn btn-primary" data-dismiss="modal" type="submit">Reset Password</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links">&copy; 2013 Clinic Near You</div>
	</div> 
	
</div>
@endsection
