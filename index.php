<?php
  include 'link.php';
  include 'admin/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GladOwl Assignment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="">

    <meta content="">

    <!-- Favicon -->
    <link href="<?= LINK; ?>img/fevicon.png" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= LINK; ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= LINK; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- <link href="<?= LINK; ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= LINK; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= LINK; ?>css/style.css" rel="stylesheet">

    <!-- Google Tag Manager -->
</head>

<body>
    <!-- ---------------------------------------------------------------------------------- -->
    <section class="bg-dark">
        <div class="container bg-dark">
            <?php include 'header.php'; ?>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active backround_sizeing" data-bgimg="<?= LINK; ?>img/1.jpg">
                    <div class="container">
                        <div class="row justify-content-end align-items-center py-5 ">
                            <div class="col-md-6">
                                <div class="">
                                    <h1 class="display-3 text-yellow">Build the right skills and shapes your future
                                    </h1>
                                    <h5 class="fw-bold text-white">#inspiringDreams</h5>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 mt-md-0">
                                <div class="form_01 p-md-5 p-3 w-100 bg-white ">
                                    <?php include 'form.php'; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item backround_sizeing" data-bgimg="<?= LINK; ?>img/2.jpg">
                    <div class="container">
                        <div class="row justify-content-end align-items-center py-5 ">
                            <div class="col-md-6">
                                <div class="">
                                    <h1 class="display-3 text-yellow">Empowering The Youth Of Today <br> To Become The Leaders Of Tomorrow
                                    </h1>
                                    <h5 class="fw-bold text-white">#WeBelieveThat</h5>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 mt-md-0">
                                <div class="form_01 p-md-5 p-3 w-100 bg-white ">
                                    <?php include 'form.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container py-5">
            <div class="row">
                <h1 class="text-center pb-3 display-3">Course Lorem Ipsum</h1>
                <div class="col-md-6">
                    <img src="<?= LINK; ?>img/1.jpg" alt="" class="w-100">
                </div>
                <div class="col-md-6">
                    <img src="" alt="">
                    <h6>Duration: 2 Years Full Time</h6>
                    <h6>Fees: INR 3,50,000/- Year</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate aspernatur perferendis
                        laudantium, itaque facilis repudiandae sed repellat quidem voluptatem hic ducimus quasi expedita
                        voluptates autem id, architecto eveniet. Eos, itaque!</p>
                </div>
            </div>
            <div class="row">
                <h1 class="text-center pt-3 display-3">Course Structure</h1>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Sem
                                    1</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li class="pb-2">Fundamentals of Design</li>
                                        <li class="pb-2">Material Exploration </li>
                                        <li class="pb-2">History of Design</li>
                                        <li class="pb-2">Digital Tools </li>
                                        <li class="pb-2">Open Elective </li>
                                        <li class="pb-2">Communication Skill</li>
                                        <li class="pb-2">Visualisation and Illustrations</li>
                                        <li class="pb-2">Practicing Meditation/Yoga</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Sem
                                    2</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li class="pb-2">Fundamentals of Design</li>
                                        <li class="pb-2">Material Exploration </li>
                                        <li class="pb-2">History of Design</li>
                                        <li class="pb-2">Digital Tools </li>
                                        <li class="pb-2">Open Elective </li>
                                        <li class="pb-2">Communication Skill</li>
                                        <li class="pb-2">Visualisation and Illustrations</li>
                                        <li class="pb-2">Practicing Meditation/Yoga</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingthree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsethree" aria-expanded="true"
                                    aria-controls="collapsethree">Sem
                                    3</button>
                            </h2>
                            <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li class="pb-2">Typography</li>
                                        <li class="pb-2">Design Research</li>
                                        <li class="pb-2">Design for Print</li>
                                        <li class="pb-2">Colour Fundamentals</li>
                                        <li class="pb-2">Minor Course </li>
                                        <li class="pb-2">Open Elective </li>
                                        <li class="pb-2">Presentation Techniques</li>
                                        <li class="pb-2">Vector Illustration </li>
                                        <li class="pb-2">Universal Human Values</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false"
                                    aria-controls="collapsefour">Sem
                                    4</button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li class="pb-2">Design Studio</li>
                                        <li class="pb-2">Infographics</li>
                                        <li class="pb-2">Ergonomics</li>
                                        <li class="pb-2">Screen Printing Techniques</li>
                                        <li class="pb-2">Advanced Photography</li>
                                        <li class="pb-2">Minor Course </li>
                                        <li class="pb-2">Portfolio </li>
                                        <li class="pb-2">Vector Illustration </li>
                                        <li class="pb-2">Environment Protection</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5 text-center nav_01">
                    <button type="button" class="btn px-5 c_btn border-pill" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Enquire Now
                    </button>
                </div>
            </div>
        </div>
    </section>
    <button type="button" class="btn px-3 c_btn right_button border-pill" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Enquire Now
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enquire Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include 'form_01.php';?>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?= LINK; ?>js/bootstrap.min.js"></script>
    <script src="<?= LINK; ?>lib/wow/wow.min.js"></script>
    <script src="<?= LINK; ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function validateForm() {
            var mobileNumber = document.getElementById("mobileNumber").value;
            var email = document.getElementById("email").value;

            // Mobile number validation
            var mobileRegex = /^[0-9]{10}$/; // Regex for 10-digit numeric mobile number
            if (!mobileRegex.test(mobileNumber)) {
                alert("Please enter a valid 10-digit mobile number.");
                return false; // Prevent form submission
            }

            // Email validation
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email regex
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false; // Prevent form submission
            }

            // Both inputs are valid
            return true;
        }
    </script>
</body>

</html>