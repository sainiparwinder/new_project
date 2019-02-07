<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<?php

      $path="uploads";
      if(!empty($_GET['delete'])){
		if(file_exists($path."/".$_GET['delete'])){
			unlink($path."/".$_GET['delete']);
		}	
	  }
      if(file_exists($path) && is_dir($path)) {
		  $result=scandir($path);
		  $files= array_diff($result, array('.','..'));
		  ?>
		  <table class="table">
			  <tr>
				  <th>Sr. No.</th>
				  <th>File</th>
				  <th>Name</th>
				  <th>Actions</th>
			  </tr>
			  <?php
			  $i = 1;
			foreach($files as $f) {
				if(is_file($path.'/'.$f)) {
					?>
					<tr>
					  <td><?= $i; ?></td>
					  <td><img src="uploads/<?= $f; ?>" width="100px" /></td>
					  <td><?= $f; ?></td>
					  <td><a href="?delete=<?= $f; ?>" class="btn btn-danger">Delete</a></td>
					</tr>
					<?php
					$i++;
				}
				
			} 
		  ?>
		  </table>
		  <?php
		  
	  } 	  


?>
