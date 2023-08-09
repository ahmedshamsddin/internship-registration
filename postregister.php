<?php

// var_dump($_SERVER["REQUEST_METHOD"]);


if($_SERVER["REQUEST_METHOD"]=="POST"){

    $id=htmlspecialchars($_POST["id"]);
    $fullname=htmlspecialchars($_POST["full_name"]);
    $email=htmlspecialchars($_POST["email"]);
    $phonenumber=htmlspecialchars($_POST["phone_number"]);
    $university=htmlspecialchars($_POST["university"]);
    $major=htmlspecialchars($_POST["major"]);
    $expectedDraduationDate=htmlspecialchars($_POST["expected_graduation_date"]);
    $internshiptype=htmlspecialchars($_POST["internship_type"]);
    $status=htmlspecialchars($_POST["status"]);
    $registrationDate=htmlspecialchars($_POST["registration_date"]);
    

    if (empty($fullname)){
      exit();
      header("Location: ./registration.php");

    

    }
    echo "These are the data,that the user submitted";
    echo"<br>";
    echo $id;
    echo "<br>";
    echo $fullname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $phonenumber;
    echo "<br>";
    echo $university;
    echo "<br>";
    echo $major;
    echo "<br>";
    echo $expectedDraduationDate;
    echo "<br>";
    echo $internshiptype;
    echo "<br>";
    echo $status;
    echo "<br>";
    echo $registrationDate;
    echo "<br>";


    header("Location: ./registration.php");

}else{
    header("Location: ./registration");
}


// post request for image


if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = false;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = false;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = false;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = false;
    }

    if ($uploadOk) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}





?>