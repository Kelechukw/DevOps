<?php
function Createdb(){
$dbhost = 'v2.csnql2pkuxse.eu-west-1.rds.amazonaws.com';
$dbport = '3306 ';
$dbname = 'volleyball';
$username = 'kelly ';
$password = 'pulchritude';


    //create connection
    $link = new mysqli($_SERVER['v2.csnql2pkuxse.eu-west-1.rds.amazonaws.com'], $_SERVER['kelly'], $_SERVER['pulchritude'], $_SERVER['volleyball'], $_SERVER['3306']);
    //$con = mysqli_connect("v2.csnql2pkuxse.eu-west-1.rds.amazonaws.com","kelly","pulchritude","volleyball");
    
}    


    
