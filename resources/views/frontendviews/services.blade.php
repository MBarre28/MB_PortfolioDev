<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="Project logo.PNG">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link rel="icon" href="Project logo.PNG">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title> Services </title>
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
            <h1> Our Services </h1>


            <main>
                <br>
                <br>
                <h2> What our team offers? <h2>
                        <br>
                        <h3> <b> Here are services that our team will offer <b> </h3>
            </main>
            <div class="container">
                <div class="gallery">
                    <img src="webdevelopment.jpg">
                    <div class="desc">
                        <h2> Web Development <h2>
                    </div>

                    <p> The first offer is Web Development. Our team is recruiting developers, who are more
                        experienced in
                        developing websites by coding to make them look professional and interesting to the
                        audience. For
                        example, Problem-solving is the key skill to web development where if you make any mistakes
                        or
                        errors,you can find the solution to the mistakes that you made so that you
                        won't forget and move on. Every developer like us makes mistakes but that's normal as long
                        as you
                        solve the error, you will be just fine.
                        <br>
                    <p> The advantage is that it can enhance your creativity which
                        means that you can showcase your talent and the ability to move to the next level. Another
                        benefit
                        is that you learn and earn which could potentially have a huge impact on your career. Web
                        development has a variety of ways of developing websites on the World Wide Web, For example,
                        back-end
                        developers are developers that are experts who can build and maintain webpages so that it's
                        more
                        responsive and engaging instead of being boring, plain websites that don't meet the
                        requirements.
                        Whereas, front-end development can show what's in front of the webpage and build the
                        front-end
                        portion of the website and web application.

                    <p> <b> If you have any questions about web development or want to know more information, please
                            check
                            out our social media links in the footer or sign in to your account to contact us.</b>
                    </p>

                    </p>
                    </p>
                    <div class="container">
                        <div class="picture1"></div>
                        <img src="webdesign.png">
                        <div class="desc">
                            <h2> Web Design <h2>
                        </div>
                        <p> The second offer is Web design, where we recruit designers who can plan out the
                            structure of
                            the website format and conceptualise it to be modern. For example, you can design and
                            visualise
                            what type of website or application you want before coding, like backend or front-end
                            languages.
                            You may suggest using such as CSS, HTML, and JS for front-end languages and backend
                            languages
                            (PHP, MySQL, or Larvavel) depending on how you plan the mainframe of the thread. </p>
                        <br>
                        <p> When it comes to web designing, the possibilities are endless - you can design anything
                            you can
                            imagine with the right determination. For instance, creating a game like Pac-Man
                            requires you to
                            know various coding languages such as HTML, CSS, and JS, which are excellent starting
                            points for
                            mastering game development. However, the type of design project you choose to work on is
                            not as
                            important as the skills you showcase and the level of dedication you put into it. So why
                            not
                            give web designing a try and see what you are capable of? We will keep in touch with you
                            along
                            the way!
                        </p>

                        <p> <b> If you're interested in a free trial, contact our team via social media to learn
                                more about
                                our
                                web design services. If you need additional information, please don't hesitate to
                                reach out.
                            </b> </p>
                        <div class="container">
                            <img src="digital-marketing.png">
                            <div class="desc">
                                <h2> Digital Marketing <h2>
                            </div>
                            <p> The third offer is digital marketing. It differs from web development or web design,
                                mainly
                                on social media. The outcome of digital marketing is to post content and showcase
                                the brand
                                you want to promote through the appropriate channels. For example, a university
                                student is
                                self-employed and decides to pursue a digital marketing career for his benefit since
                                he has
                                self-confidence that he created his business website which gives him an advantage to
                                becoming successful. The benefit of digital marketing is that it can reach a
                                specific
                                audience in different areas. Another advantage is that, Eventually people will find
                                your
                                product on social media and have a good reputation.

                            <p> The limitation is that sometimes it can
                                have negative comments knowing that they will dislike your advertisement but it only
                                depending your marketing progress. Most importantly, is to not give up in this
                                scenario and
                                work your way through with your skills.
                            </p>
                            <br>

                            <p> <b> If you want to pursue a career in self-employment as a digital marketer, why
                                    not? Not
                                    only can you design and create websites and applications, but you can also
                                    promote your
                                    marketing skills on social media to persuade potential customers to invest in
                                    your
                                    products or services. </p> </b>
                            <div class="container">
                                <img src="light blub graphic image.jpg">
                                <div class="desc">
                                    <h2> Graphic Design </h2>
                                </div>
                                <p> The final offer is Graphic design where designers can visualise concepts mainly
                                    by
                                    software. Our team is recruiting developers that can do designs such as
                                    animations on
                                    webpages and styling the website to show that it's catchy and smooth so that
                                    other users
                                    can browse through the website much quicker. For example, Graphic designs mainly
                                    use CSS
                                    for styling the webpage. Whereas, we would advise you to use other programming
                                    languages
                                    like HTML and JS. You can use Python as the backend language as the popular
                                    choice for
                                    creating stunning GUI (graphical User Interface) tools for projects. </p>
                                <br>

                                <form action="{{route('service.store')}}" id="" method="POST">
                                    @csrf
                                    <!-- protecting from malware and fetching form in database -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <!-- column row 5 -->
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    required="ALL" placeholder="name">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row-mb-4">
                                        <div class="col-md-6">
                                            <label for="name"> Last Name</label>
                                            <input type="text" id="lastname" name="lastname" class="form-control"
                                                required="ALL" placeholder="Last name">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form- mb-0">
                                                <!-- column row 10 -->
                                                <label for="email"> Email address</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                    required="ALL" placeholder="email">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form- mb-0">
                                                <!-- column row 10 -->
                                                <label for="phone">Phone number</label>
                                                <input type="tel" name="phone" id="phone" class="form-control"
                                                    required="ALL" placeholder="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form- mb-0">
                                                <!-- column row 10 -->
                                                <label for="money"> Enter Amount-> </label>
                                                <input type="number" name="money" id="money" step="0.01" min="0.01"
                                                    placeholder="0.00" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <h3><b> Payment </b></h3>
                                    <div class="col-row-10">
                                        <!-- column row 10 -->
                                        <label for="bankname"> Bank name:</label>
                                        <input type="text" name="bankname" id="bankname" class="form-control"
                                            required="ALL" placeholder="Bank Name">
                                    </div>
                                    <br>
                                    <div class="col-row-10">
                                        <label for="name"> Card
                                            Number:</label>
                                        <input type="text" name="number" id="number" placeholder="0000-0000-0000-0000"
                                            class="form-control" required="ALL">
                                    </div>
                                    <br>
                                    <div class="col-row-10">
                                        <div class="md-form-mb-0">
                                            <!-- column row 10 -->
                                            <label for="text"> Expiry Date:</label>
                                            <input type="text" name="month" id="month" placeholder="e.g September"
                                                class="form-control" required="ALL">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-center text-md-left">
                                        <button type="Submit" class="ServiceButton" id="Submit"> Submit</button>
                                    </div>
                            </div>
                        </div>
                        <br>
                        </form>
                        </main>

                        <footer class="footer">
                            <div class="container">
                                <div class="row">
                                    <div>
                                        <h4> Our Company Contact list </h4>
                                        <ul>
                                            <li><a href="{{route('about')}}" class="About">About</a>
                                            <li><a href="{{route('services')}}" class="services">Services</a>
                                            <li><a href="{{route('contactUs')}}" class="Contact">Contact
                                                    Us</a>
                                        </ul>

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