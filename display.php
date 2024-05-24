<?php
  include 'link.php';
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

    <?php 
        include "./admin/db.php";
    ?>

    <section class=" wow fadeInUp" data-wow-delay="0.1s" id="5">
        <div class="bg-dark">
            <div class="container ">
                <?php include 'header.php'; ?>
            </div>
        </div>
        
        <div class=" py-5 bg-dark text-center">
            <h1 class="text-white">Leads From Form</h1>
        </div>
        <section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12 table-responsive center_tagline">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>College</th>
                        <th>Course</th>
                    </tr>
                    </thead>
                    <?php 
                                            
                        // Fetch data from database
                        $sql = "SELECT * FROM users";
                        $result = $conn->query($sql);
                
                            // Output data of each row
                            $i =0;
                            while ($row = $result->fetch_assoc()) {
                                ?>
                    <tr>
                        <td value="<?= $row["id"];?>"><?= $i+1;?></td>
                        <td value="<?= $row["id"];?>"><?= $row["name"];?></td>
                        <td value="<?= $row["id"];?>"><?= $row["email"];?></td>
                        <td value="<?= $row["id"];?>"><?= $row["phone"];?></td>
                        <td value="<?= $row["id"];?>"><?= $row["c_college"];?></td>
                        <td value="<?= $row["id"];?>"><?= $row["c_course"];?></td>
                    </tr>
                    <?php 
                            $i++;}
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>
    </section>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?= LINK; ?>js/bootstrap.min.js"></script>
    <script src="<?= LINK; ?>lib/wow/wow.min.js"></script>
    <script src="<?= LINK; ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= LINK; ?>js/main.js"></script>
</body>

</html>












