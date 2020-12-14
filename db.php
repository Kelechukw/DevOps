<?php
function Createdb(){
$databasehost = 'v2.csnql2pkuxse.eu-west-1.rds.amazonaws.com';
$databaseName = 'volleyball';
$databaseUsername = 'kelly ';
$databasePassword = 'pulchritude';


    //create connection
   
 $con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    
}    
