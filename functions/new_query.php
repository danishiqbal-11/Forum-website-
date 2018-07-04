<?php
include("connection.php");
$name=$_POST["username"];
$question=$_POST['question'];
try{
	$sql="Insert into queries(USERNAME,QUERIES) VALUES('$name','$question')";
	$conn->exec($sql);
#	echo "New record created successfully";
	}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
	  header("refresh:0.0000001; url=$previous");
}?>