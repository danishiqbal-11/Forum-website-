<?php
include("connection.php");
$name=$_POST["username"];
$question=$_POST['question'];
$id=(int)($_POST['id']);
echo $id;
try{
	$sql="Insert into answers(ID,USERNAME,ANSWERS) VALUES($id,'$name','$question')";
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
	  header("refresh:0.0000001; url=http://127.0.0.1/Thread_forum/index.php");
}
?>