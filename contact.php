<?php
$firstname=$_POST['firstname'];
$lastsname=$_POST['lastsname'];
$email=$_POST['email'];
$fad=$_POST['fad'];
$sad=$_POST['sad'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];

// database connection
$conn=new mysqli('localhost','root','','contact');
if($conn->connection_error){
    die('connection failed :'.$conn->connection_error);
}
else{
    $stmt=$conn->prepare("insert into conttact(firstname,lastsname,email,fad,sad,gender,city,state,zip) values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_paramm("ssssssssi",$firstname,$lastsname,$email,$fad,$sad,$gender,$city,$state,$zip);
    $stmt->execute();
    echo->"submit successfully"
    $stmt->close();
    $conn->close();
}

?>