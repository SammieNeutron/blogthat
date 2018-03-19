@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading">
			
			<h4>Update category: {{$category->name}}</h4>

		</div>

		<div class="panel-body">
			
			<form action="{{route('category.update', ['id' => $category->id])}}" method="post">
				
				{{csrf_field()}}

				<div class="form-group">
					<label for="name">Name</label>

					<input type="text" class="form-control" value="{{$category->name}}" name="name">
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update category</button>
					</div>
				
				</div>

			</form>

		</div>

	</div>

@stop