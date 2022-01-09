
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pharmacy Request</title>
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

<div class="container-fluid mb-4">
                <div class="row">
                <div class="col-12"><h1>PHARMACY MANAGEMENT SYSTEM</h1></div>
        </div>

       
        <br>
<div class="container">

            <div class="col bd-light ml-5">
   
  
        <form action="" method="POST" name="save" enctype="multipart/form-data" class="mt-2">
        <h3 class="text-center">Medicine Update Request</h3>
                <div class="form-group">
                <label>Pharmacy name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter pharmacy name">
                </div>
                
                <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter address">
                </div>

                <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control" name="phone_num" placeholder="Enter phone number">
                </div>

                 <div class="form-group">
                <label>Medicine List</label>
                <textarea class="form-control" name="info" rows="20"></textarea>
                </div>

                <!-- <div class="form-group">
                <label>Medicine List</label>
                <input type="text" class="form-control" name="pharmainfo" placeholder="Enter pharmacy info">
                </div>

                <div class="form-group">
                <label>Company name</label>
                <input type="text" class="form-control" name="pharma_company" placeholder="Enter company name">
                </div>

                <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter price">
                </div> -->
<!--                 
                <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" name="img" placeholder="Enter image name">
                </div> -->
                <!-- <div class="form-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                Choose a file to upload: <input name="uploaded_file" type="file" />
                </div> -->

                <!-- <div class="form-group">
                <label>Medicine type</label>
                <select class="form-control" name="medtype">
                <option>give input</option>
                <option>non prescribed</option>
                <option>prescribe</option>
                </select>
                </div> -->

                <!-- <div class="form-group">
                <label>Disease</label>
                <input type="text" class="form-control" name="disease" placeholder="Enter disease">
                </div> -->

                 <input type="submit" class="btn btn-primary" name="save">
        </form>
        </div>
        </div>     
</div>


</body>
</html>