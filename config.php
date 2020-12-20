<?php
  
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '');
  define('BASE', 'hospital');


 $conn = new mysqli(HOST,USER,PASS,BASE) or die ($conn->connect_error);



?>