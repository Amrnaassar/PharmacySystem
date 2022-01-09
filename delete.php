
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/smstyle.css" />


</head>
<body>

<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=pharmacy;",$username,$password);



if(isset($_POST['submitEmPloyee'])){
$empID = $_POST['empID'];

$addData = $database->prepare("DELETE FROM `employee` WHERE `employee`.`empID` = :empID");

 $addData->bindParam("empID",$empID);
 
if($addData->execute()){
  echo '<div class="alert alert-success mt-3" role="alert">
 DONE
</div>';
 
}else{
  echo '<div class="alert alert-danger" role="alert">
  NOT DONE
</div>';
  echo '  ';
}
}

if(isset($_POST['submitDrug'])){
$drugID = $_POST['drugID'];

$addData = $database->prepare( "DELETE FROM `drugs` WHERE `drugs`.`drugID` = :drugID");

 $addData->bindParam("drugID",$drugID);
 
if($addData->execute()){
  echo '<div class="alert alert-success mt-3" role="alert">
 DONE
</div>';
 
}else{
  echo '<div class="alert alert-danger" role="alert">
  NOT DONE
</div>';
  echo '  ';
}
}

if(isset($_POST['submitBill'])){
$blID = $_POST['blID'];

$addData = $database->prepare("DELETE FROM `bill` WHERE `bill`.`blID` = :blID");

 $addData->bindParam("blID",$blID);
 
if($addData->execute()){
  echo '<div class="alert alert-success mt-3" role="alert">
 DONE
</div>';
 
}else{
  echo '<div class="alert alert-danger" role="alert">
  NOT DONE
</div>';
  echo '  ';
}
}



?>

<div class="container-fluid mb-4">
                <div class="row">
                <div class="col-12"><h1>PHARMACY MANAGEMENT SYSTEM</h1></div>


        <!-- 2st div -->            
            <div class="col bd-light ml-5">
   
      
        <form action="" method="POST" name="save" enctype="multipart/form-data" class="mt-2">
        <h3 class="text-center"> DELETE </h3>
		   <div class="form-group">
                <label>Employee ID </label>
                <input type="number_format" class="form-control" name="empID" placeholder="Enter Employee ID You want Delete">
                </div>
				  <input type="submit" class="btn btn-primary" name="submitEmPloyee">
				  
				  
				  
                <div class="form-group">
                <label>Drugs name</label>
                <input type="text" class="form-control" name="drugID" placeholder="Enter Drugs ID You want Delete">
                </div>	
                 <input type="submit" class="btn btn-primary" name="submitDrug">
				 
				 
				 
                <div class="form-group">
                <label> Bill </label>
                <input type="text" class="form-control" name="blID" placeholder="Enter Bill ID You want Delete">
                </div>
                 <input type="submit" class="btn btn-primary" name="submitBill">
        </form>
        </div>
        </div>     


</body>
</html>