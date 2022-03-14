<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="{{'Ici, on mettra une metadesc dynamique'}}">
    <title>{{'Ici, on mettra un metaTitle dynamique'}}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding:0px;">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item text-center"><a class="nav-link active" href="{{route('category', 1)}}">Nos
                            Pains</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('category', 2)}}">Nos Viennoiseries</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('category', 3)}}">Nos Patisseries</a></li>
                </ul>

                <img class="img-fluid mx-auto">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Ma Boulangerie</a></li>
                    <li class="nav-item"><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact </a></li>
                </ul>
                <button class="btn btn-outline-dark" role="button" href="#">
                    <i class="bi-cart-fill me-1"></i>
                    <a class="nav-link" href="{{route('cart')}}">Panier</a>

                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </div>
        </div>
    </nav>
</header>


<main>
    @yield('content')
</main>


<footer class="text-center d-xl-flex align-items-xl-end footer-clean">
    <div class="container-fluid">
        <div class="row text-center justify-content-center">
            <div class="col-sm-4 col-md-3 item">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Web design</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Hosting</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3 item">
                <h3>About</h3>
                <ul>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Legacy</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3 item">
                <h3>Careers</h3>
                <ul>
                    <li><a href="#">Job openings</a></li>
                    <li><a href="#">Employee success</a></li>
                    <li><a href="#">Benefits</a></li>
                </ul>
            </div>
            <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                        class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a
                    href="#"><i class="icon ion-social-instagram"></i></a>
                <p class="copyright">Company Name © 2022</p>
            </div>
            <div class="col"><small>Pour votre santé, évitez de manger trop gras......</small></div>
        </div>
    </div>
</footer>
</body>
</html>
