@extends('layouts.app')


@section('content')
	

	<div class="panel panel-default">
		<div class="panel-heading">
			Published posts
		</div>
		
		<div class="panel-body">
			
			<table class="table table-hover">

				<thead>
					
					<th>Image</th>
					<th>Title</th>
					<th>Edit</th>
					<th>Delete</th>
										
				</thead>
				
				<tbody>
					
					@if($posts->count() > 0)

					@forelse($posts as $post)
					<tr>
						<td>
							<img src="{{$post->featured}}" style="width:90px; height: 50px;" alt="{{$post->title}}">
						</td>

						<td>{{$post->title}}</td>

						<td>
							<a href="{{  route('post.edit', ['id' => $post->id])  }}" class="btn btn-xs btn-info">Edit</a>
						</td>


						<td>
							<a href="{{  route('post.delete', ['id' => $post->id])  }}" class="btn btn-xs btn-danger">Trash</a>
						</td>
					</tr>

					@empty

					@endforelse

					@else

						<tr>
							<th class="text-center" colspan="5">No posts yet</th>
						</tr>

					@endif
					
				</tbody>
				
			</table>
		</div>
	</div>

@stop