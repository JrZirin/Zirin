<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Zirin Labs
                </div>

                <div class="links">
                    <a href="/webDevelopmentServices">Web</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

  <!-- Authentication Links -->
  @guest
  <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
  </li>
  @if (Route::has('register'))
      <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
  @endif
@else
  <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </div>
  </li>
@endguest

  <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container marketing">

                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                      <div class="col-lg-4">
                        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna
            mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent
            commodo cursus magna.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                      </div><!-- /.col-lg-4 -->
                      <div class="col-lg-4">
                        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor
            ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
            sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor
            mauris condimentum nibh.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                      </div><!-- /.col-lg-4 -->
                      <div class="col-lg-4">
                        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis
             in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.
             Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
            nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                      </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
          </div>
          <div class="container pt-1 ">
                <div class="card card-deck mb-3 text-center" style="width: 18rem;">
                       <!-- <img class="card-img-top" src="..." alt="">-->
                    <div class="card-body">
                          <h5 class="card-title">Web Development Services</h5>
                          <hr>
                          <p class="card-text">We are focused on delivering outcomes that you want to achieve, rather than on just rolling out software. We do that by diving deep into the context of your business. Technical consulting is included in our web development services by default.
                            </p>
                          <a href="#" class="btn btn-outline-success">View Details</a>
                     </div>
                </div>
                <div class="container">
                        <!-- START THE FEATURETTES -->


                        <div class="row featurette">
                          <div class="col-md-7">
                            <h2 class="featurette-heading">We Develop Websites and Apps That Do Exactly What You Need <span class="text-muted">It'll blow your mind.</span></h2>
                            <p class="lead">

                                 We specialize in custom web development services, which means that your solution will be tailored to perfectly fit your business.

                                     Our custom websites and apps are created to cater to your unique business needs.
                                     We develop solutions that will grow and evolve together with our clients’ businesses.

                                 </p>
                          </div>

                        </div>




                        </div>



                        <!-- /END THE FEATURETTES -->


                       </div><!--end of container--
