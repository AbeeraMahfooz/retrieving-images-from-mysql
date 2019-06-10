<?php include 'db.php';

$sql = "select * from shapes_images ";
$rows = $db->query($sql);


 ?>
<html>
<head>
	<title>Geometric Shapes for DP Lab1</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<div class="col-md-12 text-center">
		<p><h2>Click the buttons to see the shapes</h2></p>

	<?php while ($row = $rows->fetch_assoc()): ?>
	<table class="table table-hover">
		<tr>
		<td  class="col-md-10" style="font-weight: bold;"><?php echo $row['name'] ?></td>
		<!--<td ><a type="button" href="#myModal" data-toggle="modal" class="btn btn-success">Show image</a></td>-->
		<td ><a type="button" href="image.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Show image</a></td>

 	<?php endwhile ?>
 	</tr>
 	</table>	
 	</div>

 	<!-- Modal-->
 	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body">
        <form method="get" >
          <div class="form-group">
           <label><b>Diagram</b></label>
           <?php 
           $id = (int)$_GET['id'];
		   $sql = "select photo from tasks where id = '$id'" ;
		   $val = $db->query($sql);
		   echo $val;

            ?>
           

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>