<?php
        $myfile="uploads/f.txt";
        $newName= "uploads/test1.txt";
        if(file_exists($myfile)) {
	          if(copy($myfile, $newName)) {
				  echo "file is copied";
			  }
			  else {
				     echo "file is not copied";
			  }
        }
        else {
			echo "file does not exists";
			}			  	     	  
	
	
?>
