<?php

function pr($a = []){ echo "<pre>"; print_r($a); echo "</pre>"; }

// programm to upload a file in any folder........

// git status
//git add filename
//git commit - m 'commit to local repositery'
//git push origin master

      if(!empty($_POST['submit'])) {
		  pr("testtsttets");
		  pr($_FILES); die;
           $filename= $_FILES['myfile']['name'];
           //$filetype= $_FILES[myfile][type];
           $temp_load= $_FILES['myfile']['tmp_name'];
          // $file_size= $_FILES[myfile][size];
           $file_target = __DIR__."/".$filename;
			 
          if(move_uploaded_file($temp_load, $file_target)) {
	          echo "file is uploaded";
          } else {
			  echo "file is not loaded";
		   }	  
       }

?>
<html><head><title>file uploads</title></head>
  <body>
         <form action="?" method="post" enctype="multipart/form-data">
              <input type="file" name="myfile">
              <input type ="submit" name="submit">
         </form>
  </body>

</html>
