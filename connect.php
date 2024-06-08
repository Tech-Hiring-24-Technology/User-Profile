<?php
$name= $_POST['name'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$addres= $_POST['address'];




$conn = new mysqli('localhost', 'root','', 'test');
if($conn->connect_error) {
die('Connection Failed : $conn->connect_error);
}else{
$stmt $conn->prepare("insert into profile (name, email, contact, address)
values(?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $email, $contact, $address);
$stmt->execute();
echo "registration Successfully...";
$stmt->close();
$conn->close();
}
?>


