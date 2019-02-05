<?php

// programm to upload a file in any folder........

// git status
//git add filename
//git commit - m 'commit to local repositery'
//git push origin master

      if(!empty($_POST['submit']))
      {
           //print_r( $_FILES['file']);
           $filename= $_FILES[file][name];
           $filetype= $_FILES[file][type];
           $temp_load= $_FILES[file][tmp_name];
           $file_size= $_FILES[file][size];
           $file_target="new_project/".$filename;

          if(move_uploaded_file($temp_load, $file_target))
          {
	          echo "file is uploaded";
          }
          else
          {
			  echo "file is not loaded";
		   }	  
       }

?>
<html><head><title>file uploads</title></head>
  <body>
         <form action="?" method="post" enctype="multipart/form-data">
              <input type="file" name="file">
              <input type ="submit" name="submit">
         </form>
  </body>

</html>
