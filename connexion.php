<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'html';
   $bdd = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $bdd ) {
      die('Could not connect: ' . mysqli_error());
   }
   // echo 'Connected successfully<br>';
?>