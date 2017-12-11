{{-- ======================================================= 
    
    Profile page 
    
==========================================================--}} 
@extends('layouts.app') 
@section('content')

<div class="nav-container">
    <div class="row m-l-30">

        <div class="col-md-8 col-md-offset-2">

            {{--
            <div class="row"> --}} {{--
                <div class="container-fluid "> --}}
                    <div class="well ">
                        <div class="group ">
                            <img class="img-fileUpload" src="/upload_image/avatars/{{ $user->avatar }}" alt="Profile image of user">
                            <h2>{{ $user->name }} 'Profile'</h2>

                            <form class="one" enctype="multipart/form-data" action="/profile" method="POST">

                                {{-- TO DO! FÅ text till att det står vilken fil du valt --}} {{--
                                <label>Update profile image</label>
                                <div class="fileUpload btn btn-primary">
                                    <input class="btn btn-primary" type="file" name="avatar">
                                </div> --}} {{-- UPLOAD BTN --}}
                                <div class="fileUpload btn btn-primary ">
                                    <span>Upload profile image</span>
                                    <input class="upload" type="file" name="avatar">
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-primary">
                            </form>
                        </div>{{-- END well--}} {{-- </div> --}}{{-- END container-fluid--}} {{-- </div> --}}{{-- END row--}}
            </div>{{-- END nav-container --}}
        </div>
    </div>
    @endsection