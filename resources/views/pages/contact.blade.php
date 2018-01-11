{{-- ======================================================= 
    
    Contact page 

==========================================================--}} 
@extends('layouts.app') 
@section('content')
<div class="container">

    <form class="well form-horizontal m-b-80" action=" " method="post"  id="contact_form">
<fieldset>




<div class="group">
    <div class="left">
        <h1>{{ $title }}</h1>
    <p><strong>#myalbum</strong></p>
    <p>Birger Jarlsgatan 9</p>
    <p>STOCKHOLM</p>
    <p>my@album.se +46(8)509 30 21</p>
</div>

{{-- <div class="row p-b-40"> --}}
<div class="col-sm-8 blog-main">


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" ></label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label"></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


  
<div class="form-group">
      <label class="col-md-4 control-label"></label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
      </div>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4">
        <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
      </div>
    </div>

    </fieldset>
    </form>
    </div>
    </div><!-- /.container -->




        {{--     <div class="right">
                <img class="img-contact m-b-50" src={{asset( '/upload_image/map.jpg')}} alt="Image on boy">
            </div> --}}






{{-- ======================================================= 
    
    Send mail form

==========================================================--}} 
{{-- <div class="col-md-6 m-t-75">
    <h1>Send mail</h1>
    <form action="send" method="POST">
        {{ csrf_field() }}
        to: <input type="text" name="to">
        message: <textarea name="msg" cols="30" rows="10"></textarea>
        <input type="submit" value="Send">
    </form> --}}
    
@endsection