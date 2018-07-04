<HTML>
<HEAD>
  <link rel="stylesheet" href="css/style.css">
<TITLE>QUERIES</TITLE>
</HEAD>
<BODY>
<?php
include("functions/connection.php");
	$name=$_POST['username'];
	$question=$_POST['question'];
	$id=$_POST['id'];
	$topass=$id;
	$topass=$_SESSION["id"] =$id;;

include("body/header.php");
	?>

<h3>Thread:</h3>

<div class="question">
<form>
<label type="text" name=""><?php echo $name."  ";?></label>:
<label type="text" name=""><?php echo $question;?></label></br>
</form>
</div>
<h3>Answer to above thread:</h3>
<?php
try{
	$stmt = $conn->prepare("SELECT ID,USERNAME,ANSWERS FROM answers where ID=$id");
	$stmt->execute();
	while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
	?>
	<div class="question">
	<form  method="post" action="#">
	<label type="text" name=""><?php echo $user['USERNAME']."  ";?></label>:
	<label type="text" name=""><?php echo $user['ANSWERS'];?></label></br>
	</form>
	</div>
	<?php
	}
}
catch(Exception $e){
	
}
?>	
<div class="main_body">
<form action="functions/answer_query.php" method="POST">
<h3><label>Answer the thread:</label></h3>
<textarea rows="4" cols="50" name="question">
</textarea></br></br>
<label>Username:</label>
<input type="text" name="username" required="required"><br>
<button type="submit" value="submit" style="position:center">Submit</button>
<input type="hidden" name="id" value="<?php echo $topass;?>"/></label>
</br>
</form>
</div>
<?php
$conn = null;
?>
</BODY>
</HTML>