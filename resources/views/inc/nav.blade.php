
    <div id="app">
        <nav class="navbar navbar-nav navbar-expand-md navbar-dark bg-dark fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">

                    <div><img src="images/logo.png" alt="" style="height: 35px; border-right:1px solid #333;" class="pr-3"></div>
                                <div class="pl-3">{{ config('app.name', 'Zirin Labs') }}</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation'">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link"href="/" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/webhosting" >Web Hosting</a>
                        </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link"href="/services" >Services</a>
                          </li>
                          <li class="nav-item dropdown">
                                <a class="nav-link"href="#" >F.A.Q's</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/contactUs" >Contact Us</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link"href="#" >Blog</a>
                            </li>


                    </ul>

                    <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ml-auto">

                    </ul>
                </div>
            </div>
        </nav>



