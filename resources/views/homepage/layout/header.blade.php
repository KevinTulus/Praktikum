<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   {{--<div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>--}} 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/')}}">
                        <h1><img width="50px" src="https://qazwa.id/blog/wp-content/uploads/2020/02/Logo-Tutwuri-Handayani..png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/tentang')}}">Tentang</a></li>
                        <li><a href="{{ url('/berita')}}">Berita</a></li>
                        <li><a href="{{ url('/akademik')}}">Akademik</a></li>
                        <li><a href="{{ url('/acara')}}">Acara</a></li>
                        <li>
		                    @if(Auth::check())
		                        <a href="{{ url('/home') }}">
                                    <button type="button" class="btn btn-info">
		                            <!-- <img src="{{ Auth::user()->photo_url }}" class="rounded mr-2" width="30" alt="0"> -->
		                            {{ Auth::user()->name }}
                                    </button>
                                </a>
		                    @else
		                        <a href="{{ url('/login') }}">
                                    <button type="button" class="btn btn-info">
                                        LOGIN
                                    </button>
                                </a>
		                    @endif
		                </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->