<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="Project logo.PNG">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>ContactTeam</title>
</head>

<body>
    <!--header section -->
    <section>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="Project logo.PNG" width="30" height="30" class="d-inline-block align-top" alt="">
                        SoftwareWeb
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('services')}}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contactUs')}}">Contact Us</a>
                            </li>
                        </ul>
                        <li class="SocialTab">
                            <a href="https://www.facebook.com/profile.php?id=61557938711564&is_tour_dismissed"
                                title="Facebook">
                                <i class="fab fa-facebook"></i>
                                <img src="facebook.png" alt="" height="30" width="30">
                            </a>
                        </li>
                        <li class="SocialTab">
                            <a href="https://twitter.com/sensei_software" title="Twitter">
                                <i class="fab fa-twitter"></i>
                                <img src="X.png" alt="" height="30" width="30">
                            </a>
                        </li>
                        <li class="SocialTab">
                            <a href="https://www.youtube.com/@Softwaresensei-tt8qz" title="Youtube">
                                <i class="fab fa-youtube"></i>
                                <img src="youtube.png" alt="" height="30" width="30">
                            </a>
                        </li>
                        <li class="SocialTab">
                            <a href="https://www.instagram.com/softwaresensei1/" title="Instagram">
                                <i class="fab fa-instagram"></i>
                                <img src="insta.png" alt="" height="30" width="30">
                            </a>
                        </li>
                        <br>
                        <br>
                        <form class="Search-form" action="{{route('search')}}" method="POST">
                            @csrf
                            <input class="input-searchbox" type="search" placeholder="Search" aria-label="Search"
                                required="ALL" id="search" name="search">
                            <button class="Search-button" type="submit">
                                <i class="fas fa-search"></i>
                                <img src="search icon.png" alt="" height="20px" width="20px">
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <br>
    </section>
    <h1> Contact down below </h1>
    </header>
    <br>
    <section class="mb-4">
        <div class="container d-flex justify-content-center"></div>

        <!--Section heading-->
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5"> <b> Do you have any questions? Please do not hesitate to
                contact us directly. Our team will come back to you within
                a matter of hours to help you. </b></p>

        <div class="row">
            <!--Grid column-->
            <div class="de-flex justify-content-center">
                <form id="" action="{{ route('Contacts.store') }}" method="POST">
                    @csrf
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name">Your name</label>
                                <input type="text" id="name" name="name" class="form-control" required="ALL">
                            </div>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email">Your email</label>
                                <input type="email" id="email" name="email" class="form-control" required="ALL">
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" required="ALL">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea id="message" name="message" rows="5" col="25"
                                    class="form-control md-textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!--Grid row-->
                    <div class="text-center text-md-left">
                        <button type="submit" class="button">Send</button>
                        <br>
                        <div class="status"></div>
                    </div>
                </form>
                <br>
                <footer class="footer">
                    <div class="container">
                        <div class="row">
                            <div>
                                <h4> Our Company Contact list </h4>
                                <ul>
                                    <li><a href="{{route('about')}}" class="About">About</a>
                                    <li><a href="{{route('services')}}" class="services">Services</a>
                                    <li><a href="{{route('contactUs')}}" class="Contacts">Contact Us</a>

                                        <p> get to connect with our social media for more information </p>
                                        <h4> follow </h4>
                                        <div class="social-icons">
                                            <a href="https://www.facebook.com/profile.php?id=61557938711564&is_tour_dismissed"
                                                title="facebook">
                                                <i class="fa-brandsfa-facebook"> SenseiDeveloper </i>
                                                <img src="facebook.png" alt="" height="30" width="30">
                                            </a>
                                            <div class="social-icons">
                                                <a href="https://twitter.com/sensei_software" title="twitter">
                                                    <i class="fa-brandsfa-twitter"> sensei_software@ </i>
                                                    <img src="X.png" alt="" height="30" width="30">
                                                </a>
                                                <div class="social-icons">
                                                    <a href="https://www.youtube.com/@Softwaresensei-tt8qz"
                                                        title="youtube">
                                                        <i class="fa-brandsfa-youtube"> Softwaresensei@ </i>
                                                        <img src="youtube.png" alt="" width="30" height="30">
                                                    </a>
                                                    <div class="social-icons">
                                                        <a href="https://www.instagram.com/softwaresensei1/"
                                                            title="instagram">
                                                            <i class="fa-brandsfa-instagram">softwaresensei1@</i>
                                                            <img src="insta.png" alt="" width="30" height="30">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
            </div>
            </footer>
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="script.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous">
            </script>
</body>

</html>