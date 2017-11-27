{{-- ==============================================================


	HERE IS OLD CODE SO I CAN LOOK AT 


=============================================================== --}}

{{-- THE COMMENTS show.blade.php file --}}
@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default">Go back!</a>
		<h1>{{$post->title}}</h1>
		{{-- <hr> --}}
			<small class="author-written">Written on{{ $post->created_at->toFormattedDateString() }} by {{$post->user->name}}</small>
	    	{{-- <hr> --}}
			<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Image">
		<div>
			<p>{!!$post->body!!}</p>
		</div>
	
    {{-- If the user is not a guest, then they will not bee able to see this
    		 If a user id is ecual to the post, user id then its ok to see it
    		 the user has to match the post user id--}}
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
    			<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    
	    {{-- In the PostController@destroy method we pass the post and the id so it knows with post to delete --}}
	    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class' => 'pull-right'])!!}
	        {{Form::hidden('_method', 'DELETE')}}
	        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	    {!!Form::close()!!}

	    {{-- {{ dd(get_defined_vars()) }} --}}
    @endif


{{-- Show comments form, a user can add comments on everyones post, 
    		and when not logged in you cant see the comments in the blog--}}
	<div action="card">
		<div class="card-block">	
			<form method="POST" action="/posts/{{$post->id}}/comments">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add comment</button>
				</div>
			</form>
			@endif
		</div>{{-- END card-block --}}
	</div>{{-- END card --}} 	


@endsection




{{-- Tinymce instead of ck editor --}}

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selectors: 'textarea',
        });
    </script>


{{--  EDIT CODE --}}


       //  $request->user()->fill([
       //      'password' => Hash::make($request->newPassword)
       //  ])->save();
    
       //  $user = User::findOrFail($id);
       //  $user->name = $request->name;
       //  $user->email = $request->email;
        
       //  if ($request->password_options == 'auto') {
       //      $lenght = 10;
       //      $keyspace = '123456789abcdefghijklmnopqrstuvxyz ABCDEFGHIJKLMNOPQRSTUVXYZ';
       //      $str ='';
       //      $max = mb_strlen($keyspace, '8bit') - 1;
       //      for ($i = 0; $i < $lenght; ++$i) { 
       //          $str .= $keyspace[random_int(0, $max)];
       //      }
       //      $password = $str;

       //  }elseif ($request->password_options == 'manual') {
       //      $user->password = Hash::make($request->password);

       //  }

       //  if ($user->save()) {
       //     return redirect()->route('users.show', $id);
       // }else{
       //  Session::flash('error', 'Sorrry a problem has occured whille updating user info to database');
       //  return redirect()->route('users.edit', $id);
       //  }




       {{-- HTML BLADE EDIT --}}
       {{-- =======================================================

  Here we view render out the 
  
  EDIT USER when click edit btn 
  in Manage dashboard first page 

==========================================================--}}
@extends('layouts.manage')

@section('content')
    <div class="row">
      <h1 class="title">Edit user</h1>
      <form action="{{ route('users.update', $user->id)}}" method="POST">
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



      <div class="custom-controls-stacked">
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="form-group">

                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
              </div>

          {{-- Radio buttons for checked password dosent work --}}
        
              <label class="custom-control custom-radio">
                <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                <span value="keep">Do not change password</span>
              </label>

              <label class="custom-control custom-radio">
                <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                {{-- <span class="custom-control-indicator"></span> --}}
                <span cvalue="auto">Generate new password</span>
              </label>

                <label class="custom-control custom-radio">
                <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                {{-- <span class="custom-control-indicator"></span> --}}
                <span value="manual">Manually set new password</span>
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
        password_options: 'keep'
      }
    });
  </script>
@endsection