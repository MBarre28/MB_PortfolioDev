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
            <br>
        </header>
        <div class="header">
            <h2> SenseiDeveloper</h2>
        </div>

        <div class="container">
            <div class="container"></div>
            <img src="image.jpg">
            <br>
            <main>
                <h2> Our Team </h2>
                <br>
                <div class="box_1">
                    <p> We help youths and employers to become software developers or computer engineers through their
                        ranks from junior tier, to professional higher tier for the audience who are interested in
                        coding or
                        engineering. The best thing is that you don't require any qualifications, it's all about
                        developing your
                        skills and experience.
                    </p>
                </div>
                <div class="box_2">
                    <p> We developed on creating websites where we have screenshots of creating the front end including
                        Javascript, HTML, CSS are all front end development. Also, we have screenshots the backend
                        development
                        project for creating databases using table for
                        such as PHP and MySQL. The best and simple backend framework to download is mainly Laravel
                        (powered by
                        PHP) where part of the backend development, has all of the features for building modern websites
                        and
                        web applications. The best thing about Laravel is that it automatically builds the webpage with
                        only
                        commands such as artisan, composers, blade etc. We advise you use Laravel for beignners and
                        anyone
                        who's has a passion in coding.
                    </p>
                    <br>



            </main>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div>
                            <h4> Our Company Contact list </h4>
                            <ul>
                                <li><a href="{{route('about')}}" class="About">About</a>
                                <li><a href="{{route('services')}}" class="services">Services</a>
                                <li><a href="{{route('contactUs')}}" class="Contact">Contact Us</a>

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
                                                        <i class="fa-brandsfa-youtube">  Softwaresensei@ </i>
                                                        <img src="youtube.png" alt="" width="30" height="30">
                                                    </a>
                                                    <div class="social-icons">
                                                        <a href="https://www.instagram.com/softwaresensei1/"
                                                            title="instagram">
                                                            <i class="fa-brandsfa-instagram">softwaresensei1@ </i>
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
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>