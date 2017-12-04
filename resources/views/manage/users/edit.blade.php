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
			    <input id="name" type="name" class="form-control"  value="{{$user->name}}" required>
			    {{-- <input id="name" type="text" class="form-control"  value="{{$user->name}}" required> --}}
			</div>

			<div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}" required>
			  </div>


				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                       <label for="password" class="col-md-4 control-label">Password</label>
				 
	   				<div class="form-check">
					    <label class="form-check-label">
					     <input id="password" type="checkbox" value="keep" class="form-check-input">
					     Do not change password
					    </label>
					 </div>

					 <div class="form-check">
					    <label class="form-check-label">
					     <input id="password" type="checkbox" value="auto" class="form-check-input">
					     Generate new password
					    </label>
					 </div>

					  <div class="form-check">
					    <label class="form-check-label">
					     <input id="password" type="checkbox" value="manual" class="form-check-input">
					     Manually set new password
					    </label>
					 </div>

				        @if ($errors->has('password'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('password') }}</strong>
                               </span>
                           @endif
                       </div>

			  <button class="btn btn-primary m-t-15">Edit user</button>
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