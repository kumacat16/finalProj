<?php
    

// mysqli_connect
mysqli_connect('localhost','blanks','Blanksboy2016!!','blanplwz_blanketboy');


$con = mysqli_connect('localhost','root','');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO contact(name,email,phone)VALUES('$name','$email','$phone')";

if(mysqli_query($con,$sql)){
    echo "I will be in contact soon!";
}
else{
    echo "Error, please try again!";
}

?>