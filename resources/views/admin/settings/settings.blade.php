@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')
	

	<div class="panel panel-default">
		
		<div class="panel-heading">
			
			<h4>Edit blog settings</h4>

		</div>

		<div class="panel-body">
			
			<form action="{{route('setting.update')}}" method="post">
				
				{{csrf_field()}}

				<div class="form-group">
					<label for="site_name">Site name</label>

					<input type="text" class="form-control" value="{{ $settings->site_name }}" name="site_name">
				</div>

				<div class="form-group">
					<label for="contact_email">Email</label>

					<input type="email" class="form-control" value="{{ $settings->contact_email }}" name="contact_email">
				</div>

				<div class="form-group">
					<label for="contact_number">Phone number</label>

					<input type="text" class="form-control" value="{{ $settings->contact_number }}" name="contact_number">
				</div>

				<div class="form-group">
					<label for="address">Address</label>

					<input type="text" class="form-control" value="{{ $settings->address }}" name="address">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update site settings</button>
					</div>
				
				</div>

			</form>

		</div>

	</div>

@stop