<HTML>
<HEAD>
  <link rel="stylesheet" href="css/style.css">
<TITLE>QUERIES</TITLE>
</HEAD>
<BODY>
<div class="queries">
<?php
include("body/header.php");
include("functions/connection.php");
$stmt = $conn->prepare("SELECT ID,USERNAME,QUERIES FROM queries"); 
$stmt->execute();?>
<h4>Threads</h4>
<?php
while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<div class="question">
<form  method="post" action="answer.php">
<input type="hidden" name="id" value="<?php echo $user['ID'];?>"/></label>
<label type="text" name=""><?php echo $user['USERNAME']."  ";?></label>:
<input type="hidden" name="username" value="<?php echo $user['USERNAME']; ?>"\>
<label type="text" name=""><?php echo $user['QUERIES'];?></label></br>
<input type="hidden" name="question" value="<?php echo $user['QUERIES']; ?>"\>
<button type="submit" value="submit">Answer it</button></br>
</form>
</div>
<?php
}
?>	
</div>
<?php
include("body/main_body.php");
?>
</br>
</BODY>
</HTML>