@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading">
			
			<h4>Edit your profile</h4>

		</div>

		<div class="panel-body">
			
			<form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
				
				{{csrf_field()}}

				<div class="form-group">
					<label for="name">Name</label>

					<input value="{{$user->name}}" type="text" class="form-control" name="name">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input value="{{$user->email}}" type="email" class="form-control" name="email">
				</div>

				<div class="form-group">
					<label for="password">New password</label>
					<input value="" type="password" class="form-control" name="password">
				</div>

				<div class="form-group">
					<label for="avatar">Upload new avatar</label>
					<input type="file" class="form-control" name="avatar">
				</div>

				<div class="form-group">
					<label for="facebook">Facebook profile</label>
					<input type="url" class="form-control" name="facebook">
				</div>

				<div class="form-group">
					<label for="avatar">Youtube profile</label>
					<input type="url" class="form-control" name="youtube">
				</div>

				<div class="form-group">
					<label for="about">About you</label>
					<textarea name="about" id="content" cols="5" rows="5" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update profile</button>
					</div>
				
				</div>

			</form>

		</div>

	</div>

@stop