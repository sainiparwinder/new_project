<?php
      $path="uploads";
      if(file_exists($path) && is_dir($path)) {
		  $result=scandir($path);
		 // print_r($result);
		  $files= array_diff($result, array('.','..'));
		  // print_r($files);
		  foreach($files as $f) {
			if(is_file($path.'/'.$f)) {
			echo "$f <br>";
	     	}
	     	else {
				echo $f."<br>";
		    }		
		 }
	  }
	  else {
		     echo "no file or folder find";  
	  } 	  


?>
