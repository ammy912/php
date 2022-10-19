<?php
include("include/header.php");
include_once("include/navbar.php");
//include_once("include/slider.php");
//include_once("contact.php");
//include_once("include/footer.php");
?>


     <!-- banner section -->
     <div class="slider-container">
        <div class="left-slide">
            <div style="background-color: #242424">
                <h3 class="mt-5 mb-3">Best Photo Studio</h3>
                <h4>A high quality photography</h4>
                <p class="mt-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo.</p>
                <a href="about.php" class="btn btn-style mt-5">Read More</a>
            </div>
        </div>
        <div class="right-slide">
            <div class="bg-image1"></div>
        </div>
    </div>
    <!-- //banner section -->

<!-- gallery section -->
<section class="w3l-gallery py-5" id="gallery">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Amazing Photo Gallery</h3>
                <p class="lead mt-2">Nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat sunt in culpa qui official.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class=" item">
                        <a href="assets/images/g1.jpg" data-lightbox="example-set" data-title="Project 1"
                            class="zoom d-block">
                            <img class="card-img-bottom d-block" src="assets/images/g1.jpg" alt="Card image cap">
                            <span class="overlay__hover"></span>
                            <span class="hover-content">
                                <span class="title">Portrait Photography</span>
                                <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                            </span>
                        </a>
                    </div>
                    <div class="item mt-4">
                        <a href="assets/images/g2.jpg" data-lightbox="example-set" data-title="Project 2"
                            class="zoom d-block">
                            <img class="card-img-bottom d-block" src="assets/images/g2.jpg" alt="Card image cap">
                            <span class="overlay__hover"></span>
                            <span class="hover-content">
                                <span class="title">Wedding Photography</span>
                                <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                    <div class="item">
                        <a href="assets/images/g3.jpg" data-lightbox="example-set" data-title="Project 3"
                            class="zoom d-block">
                            <img class="card-img-bottom d-block" src="assets/images/g3.jpg" alt="Card image cap">
                            <span class="overlay__hover"></span>
                            <span class="hover-content">
                                <span class="title">Fashion Photography</span>
                                <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6 item">
                            <a href="assets/images/g5.jpg" data-lightbox="example-set" data-title="Project 4"
                                class="zoom d-block">
                                <img class="card-img-bottom d-block" src="assets/images/g5.jpg" alt="Card image cap">
                                <span class="overlay__hover"></span>
                                <span class="hover-content">
                                    <span class="title">Model Photography</span>
                                    <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-12 col-sm-6 item mt-lg-4 mt-sm-0 mt-4">
                            <a href="assets/images/g4.jpg" data-lightbox="example-set" data-title="Project 5"
                                class="zoom d-block">
                                <img class="card-img-bottom d-block" src="assets/images/g4.jpg" alt="Card image cap">
                                <span class="overlay__hover"></span>
                                <span class="hover-content">
                                    <span class="title">Photojournalism</span>
                                    <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //gallery section -->

    <!-- stats -->
    <section class="w3-stats pb-5" id="stats">
        <div class="container pb-md-5 pb-4">
            <div class="row text-center pt-lg-4">
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <i class="far fa-smile-beam"></i>
                        <div class="timer count-title count-number mt-3" data-to="16300" data-speed="1500"></div>
                        <p class="count-text">Happy Customers</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <i class="fas fa-photo-video"></i>
                        <div class="timer count-title count-number mt-3" data-to="36076" data-speed="1500"></div>
                        <p class="count-text">Photo Shoots</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <i class="fas fa-camera-retro"></i>
                        <div class="timer count-title count-number mt-3" data-to="25" data-speed="1500"></div>
                        <p class="count-text">Years of Experience</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <i class="fas fa-medal"></i>
                        <div class="timer count-title count-number mt-3" data-to="7630" data-speed="1500"></div>
                        <p class="count-text">Awards Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- progress & faq section -->
    <section class="w3l-progress py-5" id="progress">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Frequently Asked Questions</h3>
                <p class="lead mt-2">Nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat sunt in culpa qui official.</p>
            </div>
            <div class="row pt-2">
                <div class="col-lg-6 w3l-faq">
                    <div class="faq-page">
                        <ul>
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>How would you describe your photography?</h2>
                                <p>It's really, really good. <br>Amet earum velit nobis aliquam
                                    laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad
                                    corrupti libero omnis sapiente
                                    non assumenda, incidunt officiis eaque iste minima autem.</p>
                            </li>
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>What kind of photography equipment do you use?</h2>
                                <p>I use the best equipment in the world.<br>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum
                                    velit nobis aliquam
                                    laboriosam nihil quasi fuga, ad corrupti libero omnis sapiente
                                    non assumenda excepturi. Tempore
                                    reiciendis ipsam culpa, qui
                                    voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                            </li>
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>Are you a successful photographer?</h2>
                                <p>I'm sure that by almost any measure most folks would consider me a successful
                                    photographer. <br> Sit amet consectetur adipisicing elit. Voluptates amet earum
                                    velit
                                    nobis aliquam
                                    laboriosam nihil debitis animi. Tempore reiciendis
                                    ipsam culpa, qui
                                    voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                            </li>

                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>How much do you charge?</h2>
                                <p>All my pricing is available online. <br>Sit amet consectetur adipisicing elit.
                                    Voluptates amet earum
                                    velit nobis aliquam
                                    laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad
                                    corrupti libero omnis sapiente
                                    non assumenda excepturi aperiam iste minima autem.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Photography <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Creativity <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Retouching <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">New Stills <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //progress & faq section -->

    <!-- testimonial section -->
    <section id="testimonial-area" class="pt-5">
        <div class="container pt-md-5 pt-4">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Testimonials</h3>
                <p class="lead mt-2">Nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat sunt in culpa qui official.</p>
            </div>
            <div class="testi-wrap">
                <div class="client-single active position-1" data-position="position-1">
                    <div class="client-img">
                        <img src="assets/images/testi4.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Theo Hall</h3>
                        <p>Subtitle goes here</p>
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <img src="assets/images/quote.png" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-2" data-position="position-2">
                    <div class="client-img">
                        <img src="assets/images/testi2.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Olive Yew</h3>
                        <p>Subtitle goes here</p>
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <img src="assets/images/quote.png" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-3" data-position="position-3">
                    <div class="client-img">
                        <img src="assets/images/testi1.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Maya Didas</h3>
                        <p>Subtitle goes here</p>
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <img src="assets/images/quote.png" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-4" data-position="position-4">
                    <div class="client-img">
                        <img src="assets/images/testi3.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Brock Lee</h3>
                        <p>Subtitle goes here</p>
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <img src="assets/images/quote.png" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-5" data-position="position-5">
                    <div class="client-img">
                        <img src="assets/images/testi5.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Shona Leer</h3>
                        <p>Subtitle goes here</p>
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <img src="assets/images/quote.png" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-6" data-position="position-6">
                    <div class="client-img">
                        <img src="assets/images/testi6.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Dennis Lson</h3>
                        <p>Subtitle goes here</p>
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <img src="assets/images/quote.png" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-7" data-position="position-7">
                    <div class="client-img">
                        <img src="assets/images/testi7.jpg" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Jenna John</h3>
                        <p>Subtitle goes here</p>
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <img src="assets/images/quote.png" alt="" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //testimonial section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6 text-center py-5">
        <div class="container py-md-4 py-3">
            <div class="d-md-flex align-items-center justify-content-center">
                <h3 class="title-big">Looking for <span>Quality Photography?</span></h3>
                <a href="contact.php" class="btn btn-style ml-md-3 mt-md-0 mt-4">Contact Us</a>
            </div>
        </div>
    </section>
    <!-- //call section -->

    <!-- blog section -->
    <section class="w3l-grids-block-5 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Latest Blog Posts</h3>
                <p class="lead mt-2">Nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat sunt in culpa qui official.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/blog1.jpg" alt="" /></a>
                            <div class="blog-info">
                                <div class="d-flex align-items-center justify-content-between ">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi2.jpg" alt="admin"
                                            style="max-width:40px"> <span class="small ml-2">Eetey Cruis</span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt mr-1"></i>April 06, 2021</p>
                                </div>
                                <h5 class="color-1"><a href="#blog">Photography</a></h5>
                                <h4><a href="#blog">You Should Fall In Love With Photography</a>
                                </h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/blog2.jpg" alt="" /></a>
                            <div class="blog-info">
                                <div class="d-flex align-items-center justify-content-between ">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi1.jpg" alt="admin"
                                            style="max-width:40px"> <span class="small ml-2">Molive Joe</span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt mr-1"></i>April 13, 2021</p>
                                </div>
                                <h5 class="color-2"><a href="#blog">Camera</a></h5>
                                <h4><a href="#blog">Your Camera Manual Portrait Photography</a></h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/blog3.jpg" alt="" /></a>
                            <div class="blog-info">
                                <div class="d-flex align-items-center justify-content-between ">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi3.jpg" alt="admin"
                                            style="max-width:40px"> <span class="small ml-2">Turne Leo
                                        </span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt mr-1"></i>April 12, 2021</p>
                                </div>
                                <h5 class="color-3"><a href="#blog">Photo Gallery</a></h5>
                                <h4><a href="#blog">The Best Professional Travel Photos</a></h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog section -->

    <?php
    include_once("include/footer.php");
    ?>
