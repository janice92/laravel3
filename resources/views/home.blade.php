@extends('layouts.app')
@section('content')
        <!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Bienvenue</h1>
                    <hr class="small">
                    <span class="subheading">Espace Personnel</span>
                    <br>
                    <a href="{{ url('/articles') }}"><button class="btn btn-outline-info">Articles</button></a>
                    |
                    <a href="{{ url('contact') }}"><button class="btn btn-outline-info">Contact</button></a>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- Footer -->
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-4 col-md-10 col-md-offset-1">
                <p class="copyright text-muted">Fait par Mette Janice & Le Pape Anne-Hélène - Laravel</p>
            </div>
        </div>
    </div>
</body>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>

@endsection
