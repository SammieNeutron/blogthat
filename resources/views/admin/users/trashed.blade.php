@extends('layouts.app')


@section('content')
	

	<div class="panel panel-default">

    <div class="panel-heading">
        <strong>Trashed users</strong>
    </div>
		
		<div class="panel-body">
			
			<table class="table table-hover">

				<thead>
					
					<th>Image</th>
					<th>Name</th>
					<!-- <th>Edit</th> -->
					<th>Restore</th>
					<th>Delete</th>
										
				</thead>
				
				<tbody>
					
					@forelse($users as $user)
					<tr>
						<td>
							<img src="{{  asset($user->profile['avatar_url'])  }}" width="60px" height="60px" style="border-radius: 50%" alt="{{$user->name}}">
						</td>

						<td>{{$user->name}}</td>

						<td>
							<a href="{{  route('user.restore', ['id' => $user->id])  }}" class="btn btn-xs btn-success">Restore</a>
						</td>
						

						<td>
							<a href="{{  route('user.kill', ['id' => $user->id])  }}" class="btn btn-xs btn-danger">Destroy</a>
						</td>
					</tr>

					@empty

					@endforelse
					
				</tbody>
				
			</table>
		</div>
	</div>

@stop