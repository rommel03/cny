@extends('layout.dashboard.authorize')
@section('content')
<div class="span4">
	<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-calendar"></i>
				My Schedule
			</h3>
		</div>
		<div class="box-content nopadding">
			<div class="calendar"></div>
		</div>
	</div>
</div>
<div class="span4">
	<div class="box">
		<div class="box-title">
			<h3>
				Patient List here
			</h3>
		</div>
		<div class="box-content nopadding">
			content
		</div>
	</div>
</div>

<div class="span4">
	<div class="box">
		<div class="box-title">
			<h3>
				Clinic Stuff here
			</h3>
		</div>
		<div class="box-content nopadding">
			content
		</div>
	</div>
</div>
@endsection
