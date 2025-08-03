<?php
include('../admin/config.php');

if(isset($_POST['submit'])){
    $fname = mysqli_real_escape_string($con, $_POST["fname"]);
    $lname = mysqli_real_escape_string($con, $_POST["lname"]);
    $subject = mysqli_real_escape_string($con, $_POST["subject"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $msg = mysqli_real_escape_string($con, $_POST["msg"]);

    // Add server-side validation here if needed

    $insert = "INSERT INTO `contact`(`fname`, `lname`, `subject`, `email`, `msg`) VALUES ('$fname','$lname','$subject','$email','$msg')";
    $result = mysqli_query($con, $insert);

    if($result){
        echo "<script>alert('Record Inserted Successfully')</script>";
    } else {
        echo "Error: " . mysqli_error($con); 
    }
}
?>


<script>
function validateForm() {
    var fname = document.forms["contactForm"]["fname"].value;
    var lname = document.forms["contactForm"]["lname"].value;
    
    var alphabeticPattern = /^[a-zA-Z]+$/;

    if (!alphabeticPattern.test(fname)) {
        alert("First name should contain only alphabetic characters.");
        return false;
    }

    if (!alphabeticPattern.test(lname)) {
        alert("Last name should contain only alphabetic characters.");
        return false;
    }
    return true;
}
</script>

    <div class="site-section" id="contact-section"  data-aos="fade">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-md-5 order-1 order-md-2 mb-5 mb-md-0">
            <img src="assets/images/contact..png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 mr-auto order-2 order-md-1">
            
            <h2 class="section-title mb-3" style="color: white;">Contact Us</h2>
            <p class="mb-5">Contact us If you need any help we contact you fast as possible over vision is to give you a better servers as posable Thank you For Contact  </p>
          
              <form name="contactForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
              <div class="form-group row">
                <div class="col-md-6 mb-4">
                  <input type="text" name="fname" class="form-control" placeholder="First name" required>
                </div>
                <div class="col-md-6">
                  <input type="text" name="lname" class="form-control" placeholder="Last name" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" name="msg" id="" cols="30" rows="10" placeholder="Write your message here." required></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  
                  <input type="submit" name="submit" class="btn btn-secondary py-3 px-5 btn-block" value="Send Message">
                </div>
              </div>

            </form>
          </div>
          
        </div>
      </div>
    </div>