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


        <section class="bg-red">
            <div class="container">
                <div class="row">
                    <form class="enqui_form_ai" action="process.php" method="post">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <select class="form-select form_servi " id="collegeSelect" name="c_college"
                                        required>
                                        <option selected value="">Select College</option>
                                        <option value="IIT-JEE">IIT JEE</option>
                                        <option value="NEET">NEET</option>
                                        <option value="CET">CET</option>
                                    </select>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <select class="form-select form_deptart" id="courseSelect" name="c_course" required>
                                        <option selected value="">Select Course </option>
                                        <optgroup label="IIT-JEE" class="d-none">
                                            <option data-course="IIT-JEE" value="2 Year Class Program">2 Year Class Program</option>
                                        </optgroup>
                                        <optgroup label="NEET" class="d-none">
                                            <option data-course="NEET" value="3 Year Class Program">3 Year Class Program</option>
                                        </optgroup>
                                        <optgroup label="CET" class="d-none">
                                            <option data-course="CET" value="1 Year Class Program">1 Year Class Program</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-md-12 text-center nav_01">
                                    <button type="submit" value="Submit"
                                        class="btn px-5 c_btn border-pill">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>



        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="<?= LINK; ?>js/bootstrap.min.js"></script>
        <script src="<?= LINK; ?>lib/wow/wow.min.js"></script>
        <script src="<?= LINK; ?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>