<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Home Page</title>
</head>

<body class="body">
    <nav class="navbar navbar-expand-sm navbar-light bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Restaurant Gallery</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/list">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- *****************************Navbar part end*************************** -->

    <section class="home">
        <div class="text-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="p-2 text-center text-color">
                            <h1>Welcome</h1>
                            <h5>Find Your Desire Restaurant Here..</h5>
                            <a class="btn btn-primary" href="/register">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- *****************End Body Part******************** -->

    <section class="footer">
        <!-- Footer -->
        <footer class="page-footer font-small bg-dark">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright: Restaurant Gallery
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>