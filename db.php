<?php
function Createdb(){
$dbhost = 'v2.csnql2pkuxse.eu-west-1.rds.amazonaws.com';
$dbport = '3306 ';
$dbname = 'volleyball';
$username = 'kelly ';
$password = 'pulchritude';


    //create connection
    $con = mysqli_connect("v2.csnql2pkuxse.eu-west-1.rds.amazonaws.com","kelly","pulchritude","volleyball");

    //check connection
    if(!$con){
        die("Connection Failed:" .mysqli_connect_error());
    }
            $sql="CREATE DATABASE IF NOT EXISTS $dbname";
    
     if(mysqli_query($con,$sql)){
        $con = mysqli_connect($servername,$username,$password,$dbname);
$sql="
CREATE TABLE IF NOT EXISTS playerss(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(30) NOT NULL,
    Lastname VARCHAR(30) NOT NULL,
    Height VARCHAR(11) NOT NULL,
    Location VARCHAR (50) NOT NULL );

";
if(mysqli_query($con,$sql)){
    return $con;
}else{
    echo "Cannot Create Table";
}
    }else {
        echo "Error while creating database". mysqli_error($con);
    }
}
  


    
