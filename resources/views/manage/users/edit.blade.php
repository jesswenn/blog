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
			    <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
			  </div>


			  {{-- <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password">
			  </div> --}}


	{{-- 	 		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                       <label for="password" class="col-md-4 control-label">Password</label> --}}

					{{-- Radio buttons for checked password dosent work --}}
	                       <div class="custom-controls-stacked">
						  <label class="custom-control custom-radio">
						    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input">
						    <span class="custom-control-indicator"></span>
						    <span class="custom-control-description">Do not change password</span>
						  </label>

						  <label class="custom-control custom-radio">
						    <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
						    <span class="custom-control-indicator"></span>
						    <span class="custom-control-description">Generate new password</span>
						  </label>

						    <label class="custom-control custom-radio">
						    <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
						    <span class="custom-control-indicator"></span>
						    <span class="custom-control-description">Manually set new password</span>
						  </label>
						</div>


	      {{--                  <div class="col-md-6">
	                           <input id="password" type="password" class="form-control" name="password" v-if="password_options =='manual'" required>

	                           @if ($errors->has('password'))
	                               <span class="help-block">
	                                   <strong>{{ $errors->first('password') }}</strong>
	                               </span>
	                           @endif
                       </div> --}}

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