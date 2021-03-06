<?php
//file path to function and CRUDOPs 
require_once ("function.php"); 
require_once ("CRUDOps.php");

$con= createdb();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VolleyBall Association Two</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<main>
    <div class="container text-center">
        <h1 class="py-4 bg-light text-dark rounded"><i class="fas fa-volleyball-ball"></i> Four  square VolleyBall Association Session</h1>

        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
            <div class="pt-2">
                    <?php inputElement("ID", "id",setID()); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("Firstname", "Firstname",""); ?>
                </div><br>
                <!--<div class="row pt-2">-->
                    <div class="col">
                        <?php inputElement("Alex", "Lastname",""); ?>
                    </div><br>
                    
                    <div class="col">
                        <?php inputElement("Height in cm", "Height",""); ?>
                    </div><br>
                    <div class="col">
                        <?php inputElement("Location", "Location",""); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                <?php buttonElement("btn-create","btn btn-success","Create" ,"create"); ?>
                <?php  buttonElement("btn-view","btn btn-primary","View" ,"view");?>
                <?php  buttonElement("btn-update","btn btn-success","Update" ,"update");?>
                <?php  buttonElement("btn-delete","btn btn-danger","Delete Players" ,"delete players");?>
                        <?php deleteBtn();?>
                </div><br>
            </form>
        </div>

       
        
        <table style="width:70%" >
            <thead>
                    <tr>
                        <th scope = "col">ID</th>
                        <th scope = "col">Firstname</th>   
                        <th scope = "col">Lastname</th>
                        <th scope = "col">Height</th>
                        <th scope = "col">Location</th>
                        <th scope = "col">Edit</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   <?php


                   if(isset($_POST['view'])){
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Firstname']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Lastname']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Height']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Location']; ?></td>
                                   <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                                   
                    </tr>
                   <?php
                           }

                       }
                   }


                   ?>
                </tbody>
            </table>
        </div>


    </div>
</main>

<!--//link to jquery,bootstrap script and javascript-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script type="text/javascript" src="http://yourjavascript.com/413142011203/main.js"></script>

</body>
</html>
