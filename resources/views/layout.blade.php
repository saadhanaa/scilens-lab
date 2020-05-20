<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Scilens--startsHere</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

    <link rel="stylesheet" href="{{ asset('css/app.css' )}}">
</head>

<body>
    <div id="fh5co-hero-wrapper">
        <nav class="container navbar navbar-expand-lg main-navbar-nav navbar-light">
            <a class="navbar-brand" href="/home">SCILEN()</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-items-center ml-auto mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="$('#fh5co-features').goTo();return false;">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="$('#fh5co-reviews').goTo();return false;">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"  onclick="$('#fh5co-download').goTo();return false;">Download</a>
                    </li>
                </ul>
                <div class="social-icons-header">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </nav>
        @yield('subheader')
    </div>


    @yield('content')


    <footer class="footer-outer">
        <div class="container footer-inner">

            <div class="footer-three-grid wow fadeIn animated" data-wow-delay="0.66s">
                <div class="column-1-3">
                    <h1>Scilen()</h1>
                </div>
                <div class="column-2-3">
                    <nav class="footer-nav">
                        <ul>
                            <a href="#" onclick="$('#fh5co-hero-wrapper').goTo();return false;"><li>Home</li></a>
                            <a href="#" onclick="$('#fh5co-features').goTo();return false;"><li>Features</li></a>
                            <a href="#" onclick="$('#fh5co-reviews').goTo();return false;"><li>Reviews</li></a>
                            <a href="#" onclick="$('#fh5co-download').goTo();return false;"><li class="active">Download</li></a>
                        </ul>
                    </nav>
                </div>
                <div class="column-3-3">
                    <div class="social-icons-footer">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <span class="border-bottom-footer"></span>

            <p class="copyright">&copy; 2020 Website. All rights reserved.</p>

        </div>
    </footer>
    <script src="{{ asset('js/app.js' )}}">
</body>
</html>