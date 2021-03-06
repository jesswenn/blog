{{-- ==========================================================
    DASHBOARD
    Create Post, Edit and Delete our posts 
============================================================== --}}
@extends('layouts.app')
@section('content')

<div class="container">
   <div class="row">
      {{-- <div class="col-md-8 col-md-offset-2"> --}}
         <div class="panel panel-default border">
            <div class="panel-heading border-line">Dashboard</div>
            <div class="panel-body">
               {{-- <a href="{{ route('sendEmail') }}" class="btn btn-primary">Send email</a> --}}
               <a href="/posts/create" class="btn btn-primary btn2">Skapa ett inlägg</a>
               <a href="{{route('sendEmail')}}" class="btn btn-primary">Send me a email</a>
               <h3>Välkommen!</h3>
               
{{-- ==========================================================
   Add comment
   Explain how the if statement works
============================================================== --}}
               @if(count($posts) > 0)
               <table class="table table-striped">
                  <tr>
                     <th >Title</th>
                     <th></th>
                     <th></th>
                  </tr>
                  @foreach($posts as $post)
                  <tr>
                     <td>{{$post->title}}</td>
                     <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Redigera</a></td>
                     <td>
                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class' => 'pull-right'])!!}
                        {{ Form::hidden('_method', 'DELETE')}}
                        {{ Form::submit('Ta bort', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                     </td>
                  </tr>
                  @endforeach
               </table>
               @else
               <p class="#">Du har inga poster!</p>
               @endif
            </div>
         </div>
      </div>
   </div>
</div>
@endsection