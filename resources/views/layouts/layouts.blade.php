<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Writing code to feed the underprivledged in India">
    <meta name="author" content="icrewsystems.com">
    <title>#feedThePoor | an Initiative by icrewsystems</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('boomerang/assets/css/theme.css')}}" rel="stylesheet">
    <!-- FAQ CSS -->
    <link type="text/css" href="{{ asset('boomerang/assets/css/faq.css')}}" rel="stylesheet">
    <!-- Demo CSS - No need to use these in your project -->
    <link type="text/css" href="{{ asset('boomerang/assets/css/demo.css')}}" rel="stylesheet">

    <style>
        body{
            overflow: overlay;
        }
        footer{
            overflow: overlay;
        }

      ::-webkit-scrollbar {
      	width: 14px;
      }
      ::-webkit-scrollbar-thumb {
      	background-clip: content-box;
      	border: 4px solid transparent;
      	border-radius: 7px;
      	box-shadow: inset 0 0 0 10px;
      }
      ::-webkit-scrollbar-button {
      	width: 0;
      	height: 0;
      	display: none;
      }
      ::-webkit-scrollbar-corner {
      	background-color: transparent;
      }
       {
      	overflow: auto;
      	color: #00000000;
      	transition: color 0.3s;

      	&:hover {
      		color: #666666FF;
      	}
      }

        .C-nav-shadow{
            box-shadow: 0 5px 10px rgba(0,0,0,0.1) !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    @notifyCss
</head>
<body>
  <!-- <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark bg-dark py-4"> -->
    <nav class="C-nav navbar fixed-top navbar-expand-lg navbar-light bg-dark"
        style="background-color: white !important; !important; border-bottom: 1px solid rgba(0,0,0,0.1); transition: all 0.2s;">
        <div class="container">
            <a class="navbar-brand px-2" href="{{ env('APP_URL') }}" style="color: #708090">
              <strong style="color: black">#feed</strong>ThePoor
            </a>
            <button class="navbar-toggler" type="button" data-action="offcanvas-open" data-target="#navbar_main"
                aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="navbar-collapse offcanvas-collapse" id="navbar_main">
                <ul class="navbar-nav ml-auto align-items-lg-center">
                    <li class="nav-item">

                            <li class="nav-item active">
                              <a class="nav-link" href="{{ url('/who-did-we-feed-today') }}">Who did we feed today?</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbar_main_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                              <div class="dropdown-menu" aria-labelledby="navbar_1_dropdown_1">
                                <a class="dropdown-item" href="./pages/about.html">About us</a>
                                <a class="dropdown-item" href="./pages/sign-in.html">How does it work</a>
                                <a class="dropdown-item" href="./pages/sign-in.html">Volenteers</a>
                                <a class="dropdown-item" href="./pages/sign-in.html">Partners</a>
                                <a class="dropdown-item" href="./pages/contact.html">Contact</a>
                              </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="./docs/introduction.html">Docs</a>
                            </li>
                            <a class="nav-link" href="{{ url('/money') }}">
                              <button
                                    class="btn btn-block btn-sm bg-primary text-white btn-animated btn-animated-y">
                                    <span class="btn-inner--visible">Donate Now</span>
                                    <span class="btn-inner--hidden"><i class="fas fa-arrow-right"></i></span>
                                </button>
                            </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main">
      @include('notify::messages')
      @yield ('content')
    </main>


    <footer class="pt-5 pb-3 footer  footer-dark bg-tertiary">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="pr-lg-5">
                        <h1 class="heading h6 text-uppercase font-weight-700 mb-3">icrewsystems LLP</h1>
                        <p>
                          icrewsystems is a start up based out of Chennai, India. We constantly tend to push beyond the
                            limits of what is possible with this generations most powerful tool, the internet. We are
                            re-imagining the web, one page at a time</p>
                    </div>
                </div>
                <div class="col-6 col-md">
                </div>
                <div class="col-6 col-md">
                </div>
                <div class="col-6 col-md">
                    <h5 class="heading h6 text-uppercase font-weight-700 mb-3">QuickLinks</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">FAQ</a></li>
                        <li><a class="text-muted" href="#">Support</a></li>
                        <li><a class="text-muted" href="#">Report a problem</a></li>
                        <li><a class="text-muted" href="#">Feedback</a></li>
                        <li><a class="text-muted" href="#">Main Page</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                  <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5rmj73h4zxx&amp;m=0c&amp;c=ff0000&amp;cr1=ffffff&amp;f=calibri&amp;l=1&amp;v0=20&amp;lx=60&amp;ly=-160&amp;he=3&amp;cw=ffffff&amp;cb=152230" async="async"></script>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center">
                <span class="">
                    {{ env('APP_NAME') }} &copy; {{ date('Y') }} developed by <a href="https://icrewsystems.com" class="footer-link" target="_blank">icrewsystems Software Development LLP</a>. All rights reserved.
                </span>
                <ul class="nav ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="https://instagram.com/icrewsystemsofficial" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://facebook.com/icrewsystems.com" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/icrewsystemsofficial" target="_blank"><i
                                class="fab fa-github"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Core -->
    <script src="{{ asset('boomerang/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('boomerang/assets/vendor/popper/popper.min.js')}}"></script>
    <script src="{{ asset('boomerang/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- FontAwesome 5 -->
    <script src="{{ asset('boomerang/assets/vendor/fontawesome/js/fontawesome-all.min.js')}}" defer></script>
    <!-- Page plugins -->
    <script src="{{ asset('boomerang/assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('boomerang/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('boomerang/assets/vendor/input-mask/input-mask.min.js')}}"></script>
    <script src="{{ asset('boomerang/assets/vendor/nouislider/js/nouislider.min.js')}}"></script>
    <script src="{{ asset('boomerang/assets/vendor/textarea-autosize/textarea-autosize.min.js')}}"></script>
    <!-- Theme JS -->

    <script src="{{ asset('boomerang/assets/js/theme.js')}}"></script>
   <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.C-nav').addClass('C-nav-shadow');

            } else {
                $('.C-nav').removeClass('C-nav-shadow');
            }
        });
    </script>
  <!-- FAQ JS -->
    <script src="{{ asset('boomerang/assets/js/faq.js')}}"></script>
    @notifyJs
  </body>
</html>