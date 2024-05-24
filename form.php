<form class="enqui_form_ai" action="process.php" method="post">
  <div class="">
    <h3 class="t-lgreen pb-3 text-blue" id="exampleModalLabel">Enquire Now</h3>
    <div class="row">
      <div class="col-md-12  mb-3">
        <input type="text" class="form-control shadow-sm border-rounded" placeholder="Name" id="" name="name" required>
      </div>
      <div class="col-md-12 mb-3">
        <input type="email" class="form-control shadow-sm border-rounded" placeholder="Email ID" id="email" required name="email">
      </div>
      <div class="col-md-12  mb-3">
        <input type="number" class="form-control shadow-sm border-rounded" placeholder="Phone number" id="mobileNumber"
          name="phone" required>
      </div>
      <div class="col-md-12  mb-3">
        <select class="form-select form_servi " id="collegeSelect" name="c_college" required>
          <option selected value="">Select College</option>
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
        <select class="form-select form_deptart" id="courseSelect" name="c_course" required>
          <option selected value="">Select Course </option>
          <?php 
                                            
                                            // Fetch data from database
          $sql = "SELECT * FROM course_name";
          $result = $conn->query($sql);

              // Output data of each row
              while ($row = $result->fetch_assoc()) {
                  ?>
          <optgroup label="<?= $row["c_college"];?>" class="d-none">
            <option data-course="<?= $row["c_college"];?>" value="<?= $row["c_course"];?>"><?= $row["c_course"];?></option>
          </optgroup>
          <?php 
              }
          ?>
        </select>
      </div>

      <div class="col-md-12 text-center nav_01">
        <button type="submit" onsubmit="return validateForm()" value="Submit" class="btn px-5 c_btn border-pill">Submit</button>
        <div class="success1 text-success"></div>
        <div class="error1 text-danger"></div>
      </div>
    </div>
    <!-- <p>After Submetting the form to see the queary plz click on below link</p> -->
    <div class="text-center pt-3">
      <a href="<?= LINK; ?>display">Display Data</a>
    </div>
  </div>
</form>