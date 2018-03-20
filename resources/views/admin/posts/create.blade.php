@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading">
			
			<h4>Create a new post</h4>

		</div>

		<div class="panel-body">
			
			<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
				
				{{csrf_field()}}

				<div class="form-group">
					<label for="title">Title</label>

					<input type="text" class="form-control" name="title">
				</div>

				<div class="form-group">
					<label for="featured">Featured image</label>
					
					<input type="file" class="form-control" name="featured">
				</div>

				<div class="form-group">
					<label for="category">Select a category</label>
					<select name="category_id" id="category" class="form-control">
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="tags">Select tags</label>
					@foreach($tags as $tag)

						<div class="checkbox">
				    		<label><input type="checkbox" name="tags[]" value="{{$tag->id}}"> {{$tag->tag}}</label>
				    	</div>

					@endforeach
					
				</div>

				<div class="form-group">
					<label for="title">Content</label>
					
					<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Store post</button>
					</div>
				
				</div>

			</form>

		</div>

	</div>

@stop