<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "school_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $student_name = $conn->real_escape_string($_POST['student_name']);
    $father_name = $conn->real_escape_string($_POST['father_name']);
    $mother_name = $conn->real_escape_string($_POST['mother_name']);
    $birthdate = $conn->real_escape_string($_POST['birthdate']);
    $street = $conn->real_escape_string($_POST['street']);
    $city = $conn->real_escape_string($_POST['city']);
    $barangay = $conn->real_escape_string($_POST['barangay']);
    $municipality = $conn->real_escape_string($_POST['municipality']);
    $region = $conn->real_escape_string($_POST['region']);
    $country = $conn->real_escape_string($_POST['country']);
    $nationality = $conn->real_escape_string($_POST['nationality']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $religion = $conn->real_escape_string($_POST['religion']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $bloodtype = $conn->real_escape_string($_POST['bloodtype']);
    $course = $conn->real_escape_string($_POST['course']);
    $marital_status = $conn->real_escape_string($_POST['marital_status']);


    $sql = "INSERT INTO students (
                student_name, father_name, mother_name, birthdate, street, city, barangay, municipality, region, country,
                nationality, gender, religion, phone, email, bloodtype, course, marital_status
            ) VALUES (
                '$student_name', '$father_name', '$mother_name', '$birthdate', '$street', '$city', '$barangay', '$municipality',
                '$region', '$country', '$nationality', '$gender', '$religion', '$phone', '$email', '$bloodtype', '$course', '$marital_status'
            )";

   
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>