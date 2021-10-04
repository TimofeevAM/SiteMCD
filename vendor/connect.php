<?php
 $connect = mysqli_connect('localhost','root','root','mc');

 if(!$connect){
     die('Error connect database');
 }