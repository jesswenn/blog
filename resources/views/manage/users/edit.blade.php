{{-- =======================================================

  Here we view render out the 
  
  EDIT USER when click edit btn 
  in Manage dashboard first page 

==========================================================--}}
@extends('layouts.manage')

@section('content')
		<div class="row">
			<h1 class="title">Edit user</h1>
			<form action="{{ route('users.update', $user->id) }}" method="POST">
				{{ method_field('PUT')}}
				{{ csrf_field() }}

			<div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" value="{{$user->name}}">
			    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
			  </div>

			<div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" id="email" value="{{$user->email}}">
			  </div>


			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password">
			  </div>


			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="text" name="password" class="form-check-input" id="password" v-if="!auto_password">Auto generate Password
			    </label>
			  </div>

			  <button class="btn btn-primary m-t-15">edit user</button>
			</form>
	
	</div>{{-- END container --}}

@endsection
@section('scripts')
	<script>
		var app = new Vue({
			el: '#app',
			data:{
				auto_password: true
			}
		});
	</script>
@endsection