<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      h1,h2,h3,h4,h5,h6{
        color: white
      }

      
    </style>
</head>
<body>
    <?php 
        include('header.php')
    ?>

<div class="container" style="padding-top: 100px;
           padding-bottom:100px ;">


<div class="container mt-5">
    <div class="row about">
      <h1 class="h1 text-white">About us</h1>
    </div>
  </div>

<div class="container mt-5">
    <div class="row del">
      <h1 class="text-white">Our Company</h1>
      <div class="col-lg-12 ms-5">
       
        <p class="text-white">SRS Electrical Appliances is a leading manufacturer of electrical products, specializing in switch gears, fuses, capacitors, resistors, and more. With a commitment to quality and safety, we ensure that our products undergo rigorous testing before they reach the market. Our journey begins with the meticulous manufacturing process and extends to the testing phase, which is crucial in delivering reliable electrical solutions.Existing Scenario
In our quest for excellence, we've encountered a challenge in managing the testing records. Currently, these records are maintained in a manual, paper-based system. Each product receives a unique 10-digit product ID, which includes the product code, revision, and manufacturing number. These records are pivotal in tracking successful tests and identifying products that require rework. However, this process is time-consuming, prone to errors, and often results in misplaced or misentered data.</p>
        </div>
    </div>
  </div>

<div class="container mt-5">
    <div class="row del">
      <h1 class="text-white">Proposed Solution</h1>
      <div class="col-lg-12 ms-5">
        <h3 class="text-white">To Streamline and enhance <br>
        our testing and record</h3>
        <p class="text-white">keeping process, we're introducing an advanced application. This application will revolutionize the way we manage testing data, offering modular and sub-modular capabilities based on the type of product and testing. With this system, we can swiftly access testing details, track product statuses, and automatically generate unique 12-digit testing IDs that encompass product details and testing information. It will also allow us to capture in-depth remarks on testing criteria and outcomes, making it easier to determine the next steps for each product.</p>
      <p> Our goal is to make this process efficient and error-free..</p>
        </div>
    </div>
  </div>
<div class="container mt-5">
    <div class="row del">
      <h1 class="text-white">Legal Notice</h1>
      <div class="col-lg-12 ms-5">
        <h3 class="text-white">Legal <br>Acceptance of Terms:</h3>
          <p class="text-white"> By using this website:</p>
          <p class="text-white">
          you represent that you are at least the age of majority in your state or province of residence and have given us your consent to allow any of your minor dependents to use this site. You may not use our products or services for any illegal or unauthorized purpose, nor may you, in the use of the service, violate any laws in your jurisdiction.
          </p>
        </div>
    </div>
  </div>
<div class="container mt-5">
    <div class="row del">
      <h1 class="text-white">Terms and conditions of use</h1>
      <div class="col-lg-12 ms-5">
        <h3 class="text-white">Rule 1</h3>
         <p class="text-white">You represent that you are of the age of majority in your state or province of residence and have provided consent for any minor dependents to use this website. You agree not to use our products or services for any illegal or unauthorized purpose and to comply with all applicable laws and regulations while using the Service.</p>
        <h3 class="text-white">Rule 2</h3>
        <p class="text-white"> We reserve the right to refuse service to anyone for any reason at any time. You understand that the content you provide (excluding credit card information) may be transferred unencrypted and may involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices</p>
        <h3 class="text-white">Rule 3</h3>
        <p class="text-white">We are not responsible for the accuracy, completeness, or currency of information made available on this site. The material on this site is provided for general information only and should not be relied upon as the sole basis for making decisions. We recommend consulting primary, more accurate, and more complete sources of information when making important decisions.</p>
        </div>
    </div>
  </div>
<div class="container mt-5">
    <div class="row del">
      <h1 class="text-white">Functional Requirements</h1>
      <div class="col-lg-12 ms-5">
        <ul>
        <li class="text-white">Capture and categorize data based on product type and testing type.</li>
        <li class="text-white">Record and manage testing statuses and detailed remarks.</li>
        <li class="text-white">Implement an advanced search feature for easy data retrieval.</li>
        </ul>
        </div>
    </div>
  </div>
  </div>
    <?php 
        include('footer.php')
    ?>
</body>
</html>