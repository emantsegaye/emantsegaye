<?php 
$firstName = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

$address = $_POST['address'];
$password =$_POST['password'];
//databeas connection
$conn = new mysqli('localhost','root','','tests');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert in to rigstration(name,email,phone,date of birth,gender,address,password)value(?,?,?,?,?,?,?,)");
    $stmt->bind_param("ssiisss",$firstName,$email,$phone,$dob,$gender,$address
    $password 
    )
    $stmt->execute();
    echo"registration Successfully";
    $stmt->close();
    $conn->close();
}
?>