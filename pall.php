
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
<div class="container content-invoice">
<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate="">
<div class="load-animate animated fadeInUp">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
<h2 class="title">PHP Invoice System</h2>

</div>
</div>
<input id="currency" type="hidden" value="$">

</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="table table-bordered table-hover" id="invoiceItem">
<tr>
<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
<th width="15%">Item No</th>
<th width="38%">Item Name</th>
<th width="15%">Quantity</th>
<th width="15%">Price</th>
<th width="15%">Total</th>
</tr>
<tr>
<td><input class="itemRow" type="checkbox"></td>
<td><input type="text" name="productCode[]" id="productCode_1" class="form-control" autocomplete="off"></td>
<td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>
<td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
<td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
<td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
</tr>
</table>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
<button class="btn btn-success" id="addRows" type="button">+ Add More</button>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
<h3>Notes: </h3>
<div class="form-group">
<textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
</div>
<br>
<div class="form-group">
<input type="hidden" value="<?php echo $_SESSION['userid']; ?>" class="form-control" name="userId">
<input data-loading-text="Saving Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">
</div>
</div>

</div>

</form>
</div>

</body>
</html>