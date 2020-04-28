<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">

    <title>BHF Event</title>
  </head>

  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold"><img src="./img/logo.png" alt="BHF" height="42"></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Truckfest</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Route</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    .navbar {
    transition: all 0.4s;
}

.navbar .nav-link {
    color: #ffffff;
}

.navbar .nav-link:hover,
.navbar .nav-link:focus {
    color: #ffffff;
    text-decoration: none;
}

.navbar .navbar-brand {
    color: #ffffff;
}


/* Change navbar styling on scroll */
.navbar.active {
    background: #555555;
    box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar.active .nav-link {
    color: #FFFFFF;
}

.navbar.active .nav-link:hover,
.navbar.active .nav-link:focus {
    color: #555555;
    text-decoration: none;
}

.navbar.active .navbar-brand {
    color: #555555;
}


/* Change navbar styling on small viewports */
@media (max-width: 991.98px) {
    .navbar {
        background: #555555;
    }

    .navbar .navbar-brand, .navbar .nav-link {
        color: #555;
    }
}
</style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="./Templates/navbar.js"></script>
</html>