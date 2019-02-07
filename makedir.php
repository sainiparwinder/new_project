<?php
   $dir="uploads";
   if(!file_exists($dir)) {
	   if(mkdir($dir, 0777)){
		   chmod($dir, 0777);
		   echo "directory created ";
	   }
	   else {
		   echo "directrory not created";
	   }
   }
   else {
	   echo "already creaded";
   } 
   
   $dir="uploads";
   if(!file_exists($dir)) {
	   if(mkdir($dir, 0777)){
		   chmod($dir, 0777);
	   }
	  }
	   
   ?>
