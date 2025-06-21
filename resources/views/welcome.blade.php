<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="Project logo.PNG">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SoftwareWeb</title>
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
            <h1><b> Welcome </b></h1>
        </header>
    </section>

    <!-- This is the main section of the blog. -->
    <section>
        <main>
            <div class='container'>
                <h2> Hello, Welcome to SenseiDeveloper </h2>
                <p> This is our main homepage that you would like to explore more about our team and the
                    services that we offer.
                    If you want to get to know more about the company or have any questions, feel free to
                    contact our social
                    media account or fill in the form to email us about the review. </p>

                <p> We have lots of cool features to showcase through what we have been developing and different
                    projects that we
                    created using the browsers that you guys should recommend to use. </p>
            </div>
        </main>

        <br>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div>
                    <h4> Our Company Contact list </h4>
                    <ul>
                        <li><a href="{{route('about')}}" class="About">About</a></li>
                        <li><a href="{{route('services')}}" class="services">Services</a></li>
                        <li><a href="{{route('contactUs')}}" class="Contact">Contact Us</a></li>
                        <p> Get to connect with our social media for more
                            information
                        </p>
                        <h4> follow </h4>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/profile.php?id=61557938711564&is_tour_dismissed"
                                title="facebook">
                                <i class="fa-brandsfa-facebook"> SenseiDeveloper</i>
                                <img src="facebook.png" alt="" height="30" width="30">
                            </a>
                            <div class="social-icons">
                                <a href="https://twitter.com/sensei_software" title="twitter">
                                    <i class="fa-brandsfa-twitter"> sensei_software@</i>
                                    <img src="X.png" alt="" height="30" width="30">
                                </a>
                                <div class="social-icons">
                                    <a href="https://www.youtube.com/@Softwaresensei-tt8qz" title="youtube">
                                        <i class="fa-brandsfa-youtube"> Softwaresensei@ </i>
                                        <img src="youtube.png" alt="" width="30" height="30">
                                    </a>
                                    <div class="social-icons">
                                        <a href="https://www.instagram.com/softwaresensei1/" title="instagram">
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
    </ul>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>