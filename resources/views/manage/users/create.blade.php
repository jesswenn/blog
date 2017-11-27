@extends('layouts.manage')

@section('content')
		<div class="row">
			<h1 class="title">Create new users</h1>
			<form action="{{ route('users.store') }}" method="POST">
				{{-- TO DO FIX!
					When take this away error 
					page ocours with sessions
					Wehen wiev the input and mail missing????? --}}
				{{csrf_field() }}

		{{-- 	<div class="form-group">
			    <label for="name">Name</label>
			    <input class="form-control form-control-lg" type="text" id="name">
			  </div> --}}
		
		<div class="form-group">
			    <label for="email">Name</label>
			    		 <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="name" required>
			    {{-- <input class="form-control form-control-lg" type="text" id="email"> --}}
			  </div>
			</div>


			<div class="form-group">
			    <label for="email">Email</label>
			    		 <div class="col-md-6">
                          <input id="email" type="text" class="form-control" name="email" required>
			    {{-- <input class="form-control form-control-lg" type="text" id="email"> --}}
			  </div>
			</div>

{{-- 
			  <div class="form-group">
			    <label for="text">Password</label>
			    <input class="form-control form-control-lg" type="text" name="password" id="password">
			  </div> --}}


			{{--   <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" name="password" class="form-check-input" id="password" v-if="!auto_password">Auto generate Password
			    </label>
			  </div>
 --}}
		   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                       <label for="password" class="col-md-4 control-label">Password</label>

                       <div class="col-md-6">
                           <input id="password" type="password" class="form-control" name="password" required>

                           @if ($errors->has('password'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('password') }}</strong>
                               </span>
                           @endif
                       </div>

			  <button type="submit" class="btn btn-primary m-t-15" :checked="true" v-model="auto_password">Create user</button>

			{{-- <div class="form-check">
				  <label class="form-check-label">
				    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				    Option one is this and that&mdash;be sure to include why it's great
				  </label>
				</div> --}}
				
		{{-- 		<div class="form-check">
				  <label class="form-check-label">
				    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				    Option two can be something else and selecting it will deselect option one
				  </label>
				</div> --}}

	{{-- 			<div class="form-check disabled">
				  <label class="form-check-label">
				    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
				    Option three is disabled
				  </label>
			</div> --}}
	
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