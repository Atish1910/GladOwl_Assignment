<?php
  include '../link.php';
  include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Interview Codeing Round</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="">

    <meta content="">

    <!-- Favicon -->
    <link href="<?= LINK; ?>images/favicon.png" rel="icon">

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

    <section class=" wow fadeInUp" data-wow-delay="0.1s" id="5">
        <div class="bg-dark">
            <div class="container ">
                <?php include '../header.php'; ?>
            </div>
        </div>
        
        <div class=" py-5 bg-dark text-center">
            <h1 class="text-white">Admin Pannel For Adding Course</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form_01 my-3 w-100 bg-white ">
                        <form class="enqui_form_ai"  action="add-course.php" method="post">
                            <div class="">
                                <h3 class="text-center pb-3 text-blue" id="exampleModalLabel">Add Course Aling With College </h3>
                                <div class="row">
                                    

                                    <div class="col-md-12  mb-3">
                                        <select class="form-select" id="collegeSelect"  name="c_college" required
                                            aria-label="Default select example">
                                            <option selected value="">select College</option>
                                            <?php 
                                            
                                            // Fetch data from database
                                            $sql = "SELECT * FROM college_name";
                                            $result = $conn->query($sql);

                                                // Output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    ?>
                                            <option value="<?= $row["c_name"];?>"><?= $row["c_name"];?></option>
                                            <?php 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12  mb-3">
                                        <input type="text" class="form-control shadow-sm border-rounded"
                                            placeholder="Course Name"  id="collegeSelect"  name="c_course" required>
                                    </div>
                                    <div class="col-md-12 text-center nav_01">
                                        <button type="submit" value="Submit"
                                            class="btn px-5 c_btn border-pill">Submit</button>
                                        <div class="success1 text-success"></div>
                                        <div class="error1 text-danger"></div>
                                    </div>
                                </div>
                                <div class="pt-3 text-center">
                                    <p>Go To Home Page And Check The College Name And Course </p>
                                    <a href="<?= LINK; ?>">Home</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?= LINK; ?>js/bootstrap.min.js"></script>
    <script src="<?= LINK; ?>lib/wow/wow.min.js"></script>
    <script src="<?= LINK; ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= LINK; ?>./js/main.js"></script>
</body>

</html>