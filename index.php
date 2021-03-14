<?php
session_start();
if(isset($_SESSION['mail'])):
?>
<script>
    alert('Your message has been sent successfully!');
</script>
<?php 
session_destroy();
endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" href="assets/favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="styles/styles.css">
    <title>Portfolio | Home</title>
</head>

<body>
    <div class='spinner-wrapper'>
        <div class="spinner"></div>
    </div>
    <div class="container" id="page-wrapper">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent mt-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Marat Turlubayev</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/sktlmarat" target="_blank">GitHub</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto: sktlmarat@gmail.com">Gmail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://t.me/grwnuk" target="_blank">Telegram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.upwork.com/freelancers/~0137847b4e96fbb6ab"
                                target="_blank">Upwork</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- HERO SECTION -->
        <div class="row hero-section">
            <div class="col-lg-5 my-auto">
                <div class="hero-card card p-4" id="hero-card">
                    <h3><img src="assets/hello.png" class="hi-emoji" alt=""> My name is Marat</h3>
                    <h4><span id="typed"></span></h4>
                    <a href="#contact" class="btn btn-primary">Contact Me</a>
                </div>
            </div>
            <div class="col-md-7 hero-img p-4 d-none d-lg-block">
                <img id="hero-img" src="assets/Saly-10.png" alt=""></div>
        </div>

        <!-- ABOUT SECTION -->
        <div class="row about-section mt-5" id="about">
            <div class="col-lg-8 offset-lg-2">
                <div class="about-card p-4">
                    <div class="content">
                        <h4 class="text-center about-h">About Me</h4>
                        <p class="text-center">I am passionate full-stack web-developer and graduate 🧑‍🎓 of Nazarbayev
                            University with a Computer Science degree 🖥️. 3+ years of experience in the web-development
                            🧑‍💻 and programming 💡 overall. From 2019 I've been working as a freelance web-developer.
                        </p>
                        <h4>Area of expertise</h3>
                            <div class="languages">
                                <span class="badge ">Laravel</span>
                                <span class="badge">Vue</span>
                                <span class="badge">JavaScript</span>
                                <span class="badge">PHP</span>
                                <span class="badge">CSS</span>
                                <span class="badge">Java</span>
                                <span class="badge">C</span>
                                <span class="badge">MySQL</span>
                                <span class="badge">Wordpress</span>
                            </div>
                            <h4 class="mt-3">Links</h4>
                            <div class="links">
                                <a href="https://drive.google.com/file/d/1Ixq5jjmucORcBrZ37r3wkhLqIfqpQ6y1/view?usp=sharing"
                                    target="_blank" class="btn btn-primary">Download CV</a>
                                <a href="https://github.com/sktlmarat" target="_blank"
                                    class="btn btn-primary">GitHub</a>
                                <a href="https://www.upwork.com/freelancers/~0137847b4e96fbb6ab" target="_blank"
                                    class="btn btn-primary">Upwork</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PROJECTS SECTION -->
        <div class="projects mt-5" id="projects">
            <div class="row">
                <div class="col-lg-8 offset-lg-2" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <div class="card lms-card p-4">
                        <div class="row">
                            <h3 class="text-center mb-4"> 🔥 My Projects</h3>
                            <div class="col-md-5">
                                <h3>Learning Management System (LMS)</h3>
                                <div class="languages mb-2">
                                    <span class="badge">Laravel</span>
                                    <span class="badge">VueJs</span>
                                    <span class="badge">MySQL</span>
                                </div>
                                <p>Full-stack API-driven SPA web-app built as my senior project. Fully functional LMS
                                    built for universities</p>
                                <a href="https://github.com/sktlmarat/Senior-Project" target="_blank"
                                    class="btn btn-primary">GitHub</a>

                            </div>
                            <div class="col-7 d-none d-md-block">
                                <div id="carouselOne" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/sp-1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/sp-2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/sp-3.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOne"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselOne"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 mt-5" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <div class="card lms-card p-4">
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Linktree Clone</h3>
                                <div class="languages mb-2">
                                    <span class="badge">Laravel</span>
                                    <span class="badge">MySQL</span>
                                </div>
                                <p>Clone of the linktree. Managing and displaying links and authorization. CRUD for
                                    links and ability to customize links page.</p>
                                <a href="https://github.com/sktlmarat/Laravel-linktree" target="_blank"
                                    class="btn btn-primary">GitHub</a>

                            </div>
                            <div class="col-7 d-none d-md-block">
                                <div id="carouselTwo" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/tree-1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/tree-2.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTwo"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTwo"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 mt-5" data-aos="fade-right" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <div class="card lms-card p-4">
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Monica (Contributor)</h3>
                                <div class="languages mb-2">
                                    <span class="badge">PHP</span>
                                    <span class="badge">Vue</span>
                                    <span class="badge">Laravel</span>
                                    <span class="badge">MySQL</span>
                                </div>
                                <p>Open-source project for managing personal relationships. Personal CRM. User-friendly
                                    UI and tons of useful functionalities. </p>
                                <a href="https://www.monicahq.com/" target="_blank" class="btn btn-primary">Website</a>
                                <a href="https://github.com/monicahq/monica" target="_blank"
                                    class="btn btn-primary">GitHub</a>
                            </div>
                            <div class="col-7 d-none d-md-block">
                                <div id="carouselThree" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/monica-1.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselThree"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTree"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 mt-5 mb-5" data-aos="fade-down" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000">
                    <div class="card lms-card p-4">
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Old Portfolio</h3>
                                <div class="languages mb-2">
                                    <span class="badge">HTML</span>
                                    <span class="badge">CSS</span>
                                    <span class="badge">JS</span>
                                </div>
                                <p>Added just because I really like this portfolio and how beautiful it looks 😄. Built
                                    with pure CSS and several js plugins for animations.</p>
                                <a class="btn btn-primary" href="https://sharp-fermat-d1d873.netlify.app/"
                                    target="_blank">Website</a>

                            </div>
                            <div class="col-7 d-none d-md-block">
                                <div id="carouselFour" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/port-1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/port-2.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFour"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselFour"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- CONTACT ME -->
        <div class="row mt-5 contact-section mb-5" id="contact">
            <div class="col-md-6 offset-md-3" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000">
                <div class="card contact-card p-5">
                    <h3 class="text-center">😊 Contact Me</h3>
                    <form action="mail.php" method="post">
                        <div class="mb-4">
                            <label for="exampleInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInput" name="name">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">I'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInput" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="exampleInput" name="subject">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInput" class="form-label">Message</label>
                            <textarea name="message" type="text" rows="5" class="form-control"
                                id="exampleInput"></textarea>
                        </div>
                        <button name="sbmt" type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        let spinnerWrapper = document.querySelector('.spinner-wrapper');
        let pageWrapper = document.querySelector('#page-wrapper');
        pageWrapper.style.display = 'none';
        window.addEventListener('load', function () {
            // spinnerWrapper.style.display = 'none';
            spinnerWrapper.parentElement.removeChild(spinnerWrapper);
            pageWrapper.style.display = 'block';
        });
        var options = {
            strings: ['I am passionate full-stack web-developer <span class="me-emoji">🧑‍💻</span>'],
            typeSpeed: 60
        };

        var typed = new Typed('#typed', options);

        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY;
            document.getElementById('hero-img').style.marginTop = 0.3 * scrolled + 'px';
            document.getElementById('hero-card').style.marginTop = -0.3 * scrolled + 'px';
        })
    </script>
</body>

</html>