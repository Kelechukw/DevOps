<?php
function Createdb(){
    define ('DB_NAME' , $_SERVER['volleyball']);
    define ('DB_USER' , $_SERVER['kelly']);
    define ('DB_PASSWORD' , $_SERVER['pulchritude']);
    define ('DB_HOST' , $_SERVER['volleyball.cuvw75x4fs8i.us-east-1.rds.amazonaws.com']);

    //create connection
    $con = mysqli_connect($_SERVER['volleyball.cuvw75x4fs8i.us-east-1.rds.amazonaws.com'], $_SERVER['kelly'], $_SERVER['pulchritude'], $_SERVER['volleyball']);

    //check connection
    if(!$con){
        die("Connection Failed:" .mysqli_connect_error());
    }

    //create Database
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
