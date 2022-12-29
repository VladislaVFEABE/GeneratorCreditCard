<?php
include('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
    <link href="style.css" rel="stylesheet">
    <title>Генератор ВИЗ</title>
</head>
<body>
    
<form method="POST" action="index.php">
<div class="container">
 <div class="row ">
 <div class="col-md-4 col-md-offset-4">

 <div class="credit-card-div">
<div class="panel panel-default" >
 <div class="panel-heading">
 
 <div class="row ">
 <div class="col-md-12">
 <input type="text" class="form-control" name="cardnumber" placeholder="Enter Card Number" />
 </div>
 </div>

 <div class="row ">
 <div class="col-md-3 col-sm-3 col-xs-3">
 <span class="help-block text-muted small-font" > Expiry Month</span>
 <input type="text" class="form-control" name="ExpiryMonth" placeholder="MM" />
 </div>
 <div class="col-md-3 col-sm-3 col-xs-3">
 <span class="help-block text-muted small-font" > Expiry Year</span>
 <input type="text" class="form-control" name="ExpiryYear" placeholder="YY" />
 </div>
 <div class="col-md-3 col-sm-3 col-xs-3">
 <span class="help-block text-muted small-font" > CVV</span>
 <input type="text" class="form-control" name="CVV" placeholder="CVV" />
 </div>
 <div class="col-md-3 col-sm-3 col-xs-3">
<img src="https://bootstraptema.ru/snippets/form/2016/form-card/card.png" class="img-rounded" />
 </div>
 </div>

 <div class="row ">
 <div class="col-md-12 pad-adjust">

 <input type="text" class="form-control" name="NameCard" placeholder="Name On The Card" />
 </div>
 </div>

 <div class="row">
<div class="col-md-12 pad-adjust">
 <div class="checkbox">
 <label>
 <input type="checkbox" checked class="text-muted"> Save details for fast payments <a href="#"> learn how ?</a>
 </label>
 </div>
</div>
</div>

 <div class="row ">
 <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
 <input type="submit" class="btn btn-danger" value="CANCEL" />
 </div>
 <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
 <input type="submit" class="btn btn-warning btn-block" name="reg" value="PAY NOW" />
 </div>
 </div>
 
 </div>
 </div>
 </div><!-- ./credit-card-div -->

 </div> 
 </div>
</div><!-- /.container -->
<form>
</body>
</html>