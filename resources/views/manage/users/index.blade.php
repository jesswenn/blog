{{-- =======================================================

  Here we view render out the 
  MANAGE USER PAGE
  View all user in DB and we can create new user

==========================================================--}}
@extends('layouts.manage')

@section('content')

	<div class="container flex-container">
		<div class="columns">
			<div class="column">
				<h1 class="title">Manage User</h1>
			</div>
		</div>{{-- END row--}}
	</div>{{-- END container --}}

	<div class="col-4">
		<a href="{{route('users.create')}}" class="btn btn-primary"><i class="fa fa-user-plus m-r-10"></i>Create new user</a>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Date created</th>
				<th>Actions</th>
			</tr>
		</thead>
	
	{{-- Pass this items into tj´h Users Controller
		To view ALL users --}}
		@foreach ($users as $user)
			<tr>
				<th>{{ $user->id }}</th>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{  $user->created_at->format('M j, Y')}}</td>

				{{-- <dd>{{ date('M j, Y – G:iA' , strtotime($post->created_at)) }}</dd> --}}
				<td><a class="btn btn-primary" href="{{route('users.edit', $user->id)}}">Edit</a></td>
			</tr>
		@endforeach
	</table>

	{{-- /Paginates the pages--}}
	<div class="text-center">
		{{ $users->links()}}
	</div>
	
@endsection