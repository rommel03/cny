@extends('layout.dashboard.default')

@section('content')
<div id="cl-wrapper" class="sign-up-container">
<div class="container-fluid ">
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
			<div id="cl-wrapper-signup" class="signup-container">

				<div class="middle-signup">
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
							<h3 class="text-left">Sign Up</h3>
						</div>
						<div>
							<form style="margin-bottom: 0px !important;" class="form-horizontal"  method="POST" action="<?php echo URL::to("auth/register");?>" parsley-validate novalidate>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="content">
								
									   
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text"  name="first_name" value="{{ old('first_name') }}" parsley-trigger="change" parsley-error-container="#first-name-error" required placeholder="First Name" class="form-control">
								</div>
							<div id="first-name-error"></div>
							</div>
						</div>			   
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text"  name="last_name" value="{{ old('last_name') }}" parsley-trigger="change" parsley-error-container="#last-name-error" required placeholder="Last Name" class="form-control">
								</div>
							<div id="last-name-error"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email"  name="email" value="{{ old('email') }}" parsley-trigger="change" parsley-error-container="#email-error" required placeholder="E-mail" class="form-control">
								</div>
								<div id="email-error"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6 col-xs-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input id="pass1" type="password" name="password" parsley-error-container="#password-error" placeholder="Password" required class="form-control">
								</div>
							<div id="password-error"></div>
							</div>
							<div class="col-sm-6 col-xs-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input parsley-equalto="#pass1"  name="password_confirmation" type="password" parsley-error-container="#confirmation-error"required placeholder="Confirm Password" class="form-control">
								</div>
								<div id="confirmation-error"></div>
							</div>
						</div>
						 <p class="spacer">By creating an account, you agree with the <a href="<?php echo URL::to("terms-and-condition");?>">Terms and Conditions</a>.</p>
						<button class="btn btn-block btn-success btn-rad btn-lg" type="submit">Sign Up</button>
										
								</div>
						  </form>
						</div>
					</div>
					<div class="text-center out-links">&copy; 2014 Clinic Near You</div>
				</div> 
				
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection
