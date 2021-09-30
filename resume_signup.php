<?php
$Name = filter_input(INPUT_POST, 'name');
$Email = filter_input(INPUT_POST,'email');
$Password = filter_input(INPUT_POST,'password');
if (!empty($Name)){
if (!empty($Email)){
if (!empty($Password)){
include('resume_connect.php');

$sql = "INSERT INTO login(name,email,password)
values ('$Name','$Email','$Password')";
if ($conn->query($sql)){
header("Location: index.html");
}
else{
echo "error: ". $sql ." 
". $conn->error;
}
$conn->close();
}

else{
echo "password field should not be empty";
die();
}
}
else{
echo "email field should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
?>