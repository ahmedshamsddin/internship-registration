<?php 

if (isset($_POST['full_name'])) {
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $university = $_POST['university'];
  $major = $_POST['major'];
  $expected_graduation_date = $_POST['expected_graduation_date'];
  $internship_type = $_POST['internship_type'];
  $registration_date = $_POST['registration_date'];
  //$image = $_POST['image'];

  require "mysqlconnect.php";
  $sql = "INSERT INTO applications (full_name, email, phone_number, university, major, expected_graduation_date, internship_type, status, registration_date, image)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$params = array(
    $full_name,
    $email,
    $phone_number,
    $university,
    $major,
    $expected_graduation_date,
    $internship_type,
    "pending",
    $registration_date,
    "profile.jpg"
);

$stmt = sqlsrv_prepare($conn, $sql, $params);

if (!$stmt) {
    die("Statement preparation failed: " . print_r(sqlsrv_errors(), true));
}

if (sqlsrv_execute($stmt) === false) {
    die("Statement execution failed: " . print_r(sqlsrv_errors(), true));
}

echo "Record inserted successfully.";
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <style>
        h1 {

color : #4C0372;
font-family:Arial, Helvetica, sans-serif;
font-size: 39px;

}
h2{
color : white;
font-family:Arial, Helvetica, sans-serif;
font-size: 30px;

}

.navbar-brand {

color : white;
font-family:Arial, Helvetica, sans-serif;
font-size: 30px;

}

.nav-link{

color : white;
font-family:Arial, Helvetica, sans-serif;
font-size: 20px;

} 

.d-flex {
color : white;
font-family: Arial;

font-size: 15px;

}
.btn btn-primary{
color : white;
font-family: Arial;

font-size: 15px;
}
a{
color : #7A3CAE;
font-family:Arial, Helvetica, sans-serif;
font-size: 20px;
}

.form-check-label{
color : #7A3CAE;
font-family:Arial, Helvetica, sans-serif;
font-size: 20px;
}
.form-text{
color : #7A3CAE;
font-family:Arial, Helvetica, sans-serif;
font-size: 20px;
}

.navbar-brand{


color : white;
font-family:Arial, Helvetica, sans-serif;
font-size: 20px;


}
    </style>
  </head>
  <body>

    <nav  class="navbar navbar-expand-lg " style="background-color: #ADC4CE ;">
      <div  class="container-fluid">
        <h2 href="#">Internship </h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">View</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Apply</a>
            </li>

<!---
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Git workflow and Commands
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">git workflow</a></li>
                <li><a class="dropdown-item" href="#">commands</a></li>
          
              </ul>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="#">branching and murging</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">git best practices</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">FAQs</a>
            </li>
            
        -->
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">
   
    <form method="post">
      <h2>Internship Registration Form</h2>
  
  <label for="full_name">Full Name:</label><br>
  <input type="text" id="full_name" name="full_name" required><br><br>
  
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br><br>
  
  <label for="phone_number">Phone Number:</label><br>
  <input type="tel" id="phone_number" name="phone_number" required><br><br>
  
  <label for="university">University:</label><br>
  <input type="text" id="university" name="university" required><br><br>
  
  <label for="major">Major:</label><br>
  <input type="text" id="major" name="major" required><br><br>
  
  <label for="expected_graduation_date">Expected Graduation Date:</label><br>
  <input type="date" id="expected_graduation_date" name="expected_graduation_date" required><br><br>
  
  <label for="internship_type">Internship Type:</label><br>
  <select id="internship_type" name="internship_type" required>
    <option value="part_time">Part-Time</option>
    <option value="full_time">Full-Time</option>
  </select><br><br>
  
  <label for="registration_date">Registration Date:</label><br>
  <input type="date" id="registration_date" name="registration_date" required><br><br>
  
  <label for="image">Image:</label><br>
  <input type="file" id="image" name="image" accept="image/*" required><br><br>
  
  <input type="submit" value="Submit">
</form>
    </div>



    

    <nav class="navbar">
      <div style="background-color: #ADC4CE ;" class="container-fluid p-2">
          <nav  class="nav">
            <!--<img src="images/github-logo.png" style="height: 50px; width: 50px;"> -->
            <a class="nav-link active" aria-current="page" href="#">About us</a>
            <a class="nav-link" href="#">Eartech IT</a>
            <a class="nav-link" href="#">Social media</a>
            <!--<a class="nav-link disabled" aria-disabled="true">Disabled</a>-->
          </nav>

        
      </div>
    </nav>
  <!--end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>




</body>
</html>
