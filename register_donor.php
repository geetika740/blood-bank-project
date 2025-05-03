<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ebloodbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $blood_group = $_POST['blood_group'];
  $medical_conditions = $_POST['medical_conditions'];
  $contact = $_POST['contact'];
  $aadhar = $_POST['aadhar'];
  $gmail = $_POST['gmail'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];

  $sql = "INSERT INTO donor (`name`, `age`, `blood_group`, `medical_conditions`, `contact`, `aadhar`, `gmail`, `gender`, `dob`)
  VALUES ('$name', '$age', '$blood_group', '$medical_conditions', '$contact', '$aadhar', '$gmail', '$gender', '$dob')";


  if ($conn->query($sql) === TRUE) {
    echo "Donor Registered Successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

