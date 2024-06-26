<?php
     $con = new mysqli("Localhost","root","","sampledb");
  
     if($con-> connect_error){
       die("Connecetion Failed");
     }
?>