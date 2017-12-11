{{-- ========================================================================= 
        Sidebar
=========================================================================--}} 
@extends('layouts.app') 
@section('content') 

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="sidebar-module">
            <h4>Archives</h4>

            <ol class="list-unstyled">

                @foreach($archives as $stats)
                    <li>
                        <a href="">{{ $stats['month'] }}</a>
                    </li>

                @endforeach

            </ol>

          </div>

        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
@endsection
