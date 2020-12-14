<?php

require_once ("db.php");
require_once ("function.php");
//Assign value to DB creation
//$con = Createdb();

// create button click
if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['trash'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();

}

function createData(){ 
    $fname=textboxValue ("Firstname");
    $lname=textboxValue ("Lastname");
    $height=textboxValue("Height");
    $address=textboxValue("Location");

    if($fname&&$lname&&$height&&$address){
        $sql="INSERT INTO `playerss` (`Firstname`,`Lastname`,`Height`,`Location`)
        VALUES('$fname','$lname','$height','$address')";

        if(mysqli_query($link, $sql)){
            TextNode("success","Succesfully Recorded!");
           
        }else{
            echo "Error";
        }
    }else{
        TextNode("error","Fill the form");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($link, trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}

// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// get data from mysql database
function getData(){
    $sql = "SELECT * FROM playerss";

    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// update data
function UpdateData(){
    $id= textboxValue("id");
    $fname = textboxValue("Firstname");
    $lname = textboxValue("Lastname");
    $height = textboxValue("Height");
    $address = textboxValue("Location");

    if($fname&&$lname&&$height&&$address){
        $sql = "
                    UPDATE playerss SET Firstname='$fname', Lastname = '$lname', Height = '$height', Location= '$address'    WHERE ID='$id';                    
        ";

        if(mysqli_query($link, $sql)){
            TextNode("success", "Successfully Updated");
        }else{
            TextNode("error", "Unable to Update Data");
        }

    }else{
        TextNode("error", "Select Player Using Edit Icon");
    }


}


function deleteRecord(){
    $id = (int)textboxValue("id");

    $sql = "DELETE FROM playerss WHERE id=$id";

    if(mysqli_query($link, $sql)){
        TextNode("success","Deleted Successfully...!");
    }else{
        TextNode("error","Unable to Delete Record...!");
    }

}


function deleteBtn(){
    $result = getData();
    $i = 0;
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $i++;
            if($i > 3){
                buttonElement("btn-deleteall", "btn btn-danger" ,"<i class='fas fa-trash'></i> Delete All", "deleteall", "deleteall");
                return;
            }
        }
    }
}


function deleteAll(){
    $sql = "DROP playerss ";

    if(mysqli_query($link, $sql)){
        TextNode("success","All Record deleted Successfully...!");
        Createdb();
    }else{
        TextNode("error","Something Went Wrong Record cannot deleted...!");
    }
}


// set id to textbox
function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['id'];
        }
    }
    return ($id + 1);
}








