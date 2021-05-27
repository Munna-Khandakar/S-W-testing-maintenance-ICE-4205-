<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <title>foodgarage | Your Online Restaurant</title>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:400')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link href="{{asset('website/css/templatemo-style.css')}}" rel="stylesheet" />
    <style>
        .checked {
            color: orange;
        }

    </style>
</head>

<body>

    <div class="container">
    
<!-- Top box -->
<!-- Logo & Site Name -->
<div class="placeholder">
    <div class="parallax-window" data-parallax="scroll" data-image-src="website/img/simple-house-01.jpg">
        <div class="tm-header">
            <div class="row tm-header-inner">
                <div class="col-md-6 col-12">
                    <img src="website/img/favicon.png" alt="Logo" class="tm-site-logo" />
                    <div class="tm-site-text-box">
                        <h1 class="tm-site-title">foodgarage</h1>
                        <h6 class="tm-site-description">Your Online Restaurant</h6>
                    </div>
                </div>
                <nav class="col-md-6 col-12 tm-nav">
                    <ul class="tm-nav-ul">
                        <li class="tm-nav-li"><a href="{{url('/')}}" class="tm-nav-link active">Home</a></li>
                        <li class="tm-nav-li"><a href="{{url('/about')}}" class="tm-nav-link">About</a></li>
                        <li class="tm-nav-li"><a href="{{url('contact')}}" class="tm-nav-link">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

     @yield('content')

        <footer class="tm-footer text-center">
            <p>Copyright &copy; foodgarage</p>
        </footer>
    </div>
    <script src="{{asset('website/js/modal.js')}}"></script>
    <script src="{{asset('website/js/jquery.min.js')}}"></script>
    <script src="{{asset('website/js/parallax.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Handle click on paging links
            $('.tm-paging-link').click(function(e) {
                e.preventDefault();

                var page = $(this).text().toLowerCase();
                $('.tm-gallery-page').addClass('hidden');
                $('#tm-gallery-page-' + page).removeClass('hidden');
                $('.tm-paging-link').removeClass('active');
                $(this).addClass("active");
            });
        });

    </script>
</body>

</html>
