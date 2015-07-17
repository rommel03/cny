@extends('layout.dashboard.default')

@section('content')
<div id="cl-wrapper" class="login-container">
	<div class="container-fluid ">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
	
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
				<h3 class="text-left">Login Access</h3>
			</div>
			<div>
				<form style="margin-bottom: 0px !important;" method="POST" class="form-horizontal" action="<?php echo URL::to("auth/login");?>" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="content">
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="email" name="email" value="{{ old('email') }}" placeholder="Email" id="email" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" name="password" placeholder="Password" id="password" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<input type="checkbox" name="remember" class='icheck-me' id="remember"> Remember Me
									</div>
								</div>
							</div>
							
					</div>
					<div class="foot">
						<a class="pull-left" href="<?php echo URL::to("password/email");?>">Forgot Your Password?</a>
						<a href="<?php echo URL::to("auth/register");?>" class="btn btn-default" >Register</a>
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links">&copy; 2013 Clinic Near You</div>
	</div> 
			</div>
		</div>
	</div>
</div>
@endsection
