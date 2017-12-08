{{-- =======================================================

      About the web page

==========================================================--}}
@extends('layouts.app')
@section('content')

<div class="nav-container">
 <div class="row">
    <div class="container-fluid">
		<img src="/upload_image/avatars/{{ $user->avatar }}" alt="Profile image of user"
		style="width: 150px; height: 150px; float: left; border-radius: 50%;margin-right: 25px;">
    		<h2>{{ $user->name }} 'Profile'</h2>

    		<form enctype="multipart/form-data" action="/profile" method="POST">
    			<label>Update profile image</label>
    			<input type="file" name="avatar">
    			<input type="hidden" name="_token" value="{{ csrf_token() }}">
    			<input type="submit" class="pull-right btn btn-primary" >
    		</form>

    </div>{{-- END container-fluid--}}
  </div>{{-- END row--}}
</div>{{-- END nav-container --}}
@endsection