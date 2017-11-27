{{-- =======================================================

	Here we view Show render out to the 
	the user that we have created 
	User NAme and Email and if auto generate password

==========================================================--}}
@extends('layouts.manage')

@section('content')
	<div class="container">

		<div class="column">
			<h1 class="title">{{$user->name }}</h1>
			<h1 class="title">View user details</h1>
		</div>{{-- END column --}}


		<div class="col-4">
			<a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">
				<i class="fa fa-user-plus m-r-10"></i>Edit user</a>
		</div>


			<div class="col-4">
			    <label for="name">Name</label> 
				<pre>{{ $user->name}}</pre>
			    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
			  </div>

			<div class="col-4">
			    <label for="email">Email</label>
			    <pre>{{ $user->email}}</pre>
			  </div>


{{-- 			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" name="password" class="form-check-input" id="password" v-if="!auto_password">Auto generate Password
			    </label>
			  </div> --}}
		
	</div> {{-- END container --}}
@endsection