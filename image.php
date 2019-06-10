<?php 

$id = (int)$_GET['id'];
displayimage($id);
//echo $id;

function displayimage($id){
	$db = new Mysqli;
	$db -> connect('localhost','root','','shapes');
	$sql = "select * from shapes_images where id = '$id'" ;
		   $val = $db->query($sql);
		   $row = $val->fetch_assoc();
		   echo '<h2>Location of image:</h2><br><h3>'.$row['location'].'</h3><br>';
		   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo']).' " height="300" width="300" />';
}
?>
