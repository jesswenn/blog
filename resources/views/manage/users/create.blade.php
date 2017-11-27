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
		
		<div class="form-group">
			<label for="email">Name</label>
		    		 <div class="col-md-6">
	                <input id="name" type="text" class="form-control" name="name" required>
		 	</div>
		</div>


			<div class="form-group">
			    <label for="email">Email</label>
			    		 <div class="col-md-6">
                          <input id="email" type="text" class="form-control" name="email" required>
			    {{-- <input class="form-control form-control-lg" type="text" id="email"> --}}
			  </div>
			</div>


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