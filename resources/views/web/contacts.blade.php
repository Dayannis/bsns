@extends('layout.home')

@section('content')

@include ('layout.main')
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>     
        <section class="well1">
          <div class="container">
            <div class="row">
              <div class="grid_12">
                <h2>About</h2><center><img src="images/page-1_img01.jpg" alt=""></center>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      @include('layout.footer')

@endsection