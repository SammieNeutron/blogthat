@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')
	

	<div class="panel panel-default">
		
		<div class="panel-heading">
			
			<h4>Create a new user</h4>

		</div>

		<div class="panel-body">
			
			<form action="{{route('user.store')}}" method="post">
				
				{{csrf_field()}}

				<div class="form-group">
					<label for="name">Name</label>

					<input type="text" class="form-control" name="name">
				</div>

				<div class="form-group">
					<label for="email">Email</label>

					<input type="email" class="form-control" name="email">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Add user</button>
					</div>
				
				</div>

			</form>

		</div>

	</div>

@stop