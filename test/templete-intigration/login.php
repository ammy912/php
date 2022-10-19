<?php
include_once("include/header.php");
include_once("include/navbar.php");
?>

 <!-- inner banner -->
 <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-sm-5 pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-5">Have an account ?</h4>
                <h3 class="inner-text-title font-weight-bold pt-2 text-white"><a href="login.php">Log in </a></h3>
                <h4 class="inner-text-title font-weight-bold pt-5">Don't have account ?</h4>
                <h3 class="inner-text-title font-weight-bold pt-2 text-white"><a href="account.php">Create account here</a></h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Account</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

        <!-- contact -->
        <section class="w3l-contact py-5" id="contact">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">log in</h3>
            </div>
            <div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
                <div class="row contact-block">
                    <div class="col-md-5 contact-left">
                        <h3 class="font-weight-bold mb-md-5 mb-4">Contact Details</h3>
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-globe icon-color"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>10001, 5th Avenue, 12202 street, USA.</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-phone icon-color"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+1(21) 234 4567">+1(21) 112 7368</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-envelope-open icon-color"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-headphones icon-color"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Customer Support</h6>
                                    <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 contact-right mt-md-0 mt-4">
                        <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                            <div class="input-grids">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*"
                                    class="contact-input" required="" />
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*"
                                    class="contact-input" required="" />

                                    <div class="form-input">
								<label for="w3lName">password*</label>
								<input type="password" name="w3lName" id="w3lName" placeholder="" />
							</div>
							<div class="form-input">
                                <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*"
                                    required=""></textarea>
                            </div>
						
							<button class="btn btn-style btn-style-primary-2">Log in</button>
                            <b><a href="#">Forget Password</a></b>
                            <h4>Don't have an account ?    <a href="account.php">Create Your Account</a></h4>
                            </div>
                            
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map-iframe">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //contact -->


    <?php
    include_once("include/footer.php");
    ?>