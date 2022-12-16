<?php 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $message = $_POST['message'];
    $nation = $_POST['nation'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];

//connection to database
$conn = new mysqli('localhost','root','','test');
//check connection
if($conn -> connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration (fname, lname, message, nation, gender, language)
    values(?, ?, ?, ?, ?,?)");
    $stmt -> bind_param("ssssss", $fname, $lname, $message, $nation, $gender, $language);
    $stmt -> execute();
    echo "Registration Succesfully...";
    $stmt -> close();
    $conn -> close();

}
?>