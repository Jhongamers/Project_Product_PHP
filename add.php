<?php
    require_once('config/dbconfig.php');
    $db = new operations();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
 
    <title>Product Add</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <?php $db->Stored_Var(); ?>
<form id="product_form" method="POST">
<header>
    <h1>Project Add</h1>
   <div class="half"> 
   <Button name="submit" class="btn first">Post</Button><a class="btn second" href="./">Cancel</a></div>
</header>
<div class="content">
<div class="form">
<label> SKU: </label>
<input type="text" name="sku" id="sku" required />
<label> Name: </label>
<input type="text" name="name" id="name" required />
<label> Price($): </label>
<input type="number" name="price" id="price" required />
<label> Type Switcher: </label>
<select id="productType" required>
<option value="">Type Switcher</option>
<option value="DVD" >DVD</option>
<option value="Book">Book</option>
<option value="Furniture">Furniture</option>
</select>

<div class="option-size">
<label> Size(MB): </label>
<input type="number" name="size" id="size" required />
</div>
<div class="option-dimensions">
<label> Height(CM): </label>
<input type="number" name="height" id="height" required />
<label> Width(CM): </label>
<input type="number" name="width" id="width" required />
<label> Length(CM): </label>
<input type="number" name="length" id="length" required />
</div>
<div class="option-weight">
<label> Weight(KG): </label>
<input type="text" name="weight" id="weight" required />
</div>
</div>
</div>
</form>
</body>
<script src="actions.js"> </script>
</html>