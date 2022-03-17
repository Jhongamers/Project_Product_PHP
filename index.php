<?php 
      require_once('config/dbconfig.php');
      $db = new operations();
      
   
       $result = $db->view_post();
    
   

       
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Product List</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
  <?php $db->delete_post(); ?>
  <form method="POST">
  <header>
    <h1>Project List</h1>
    <div class="half">
    <a class="btn first" href="add.php">Add</a><button class="btn second" name="deletebtn" id="delete-product-btn">MASS DELETE</button></div>
</div>
  </header>
<div class="container" style="width:80%">
<div class="row col-12">
  <?php

      while($data = mysqli_fetch_assoc($result))
      {

  ?>
<div class="card" style="width: 14rem; margin-right:50px; margin-top:50px;">
<input type="checkbox" class="delete-checkbox" name="delete[]" value="<?php echo $data['id']; ?>" style="margin-top:10px;" />
<div class="card-body">
    <h5 class="card-title"><?php echo $data['sku']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['name']; ?></h6>
    <p class="card-text"><?php echo $data['price']; ?> $</p>
    <p class="card-text"><?php if($data['size'] ==! null){ echo 'Size: '.$data['size'].'MB';  }?></p>
    <p class="card-text"><?php if($data['weight'] ==! null){  echo 'Weight: '.$data['weight'].'KG'; } ?></p>
    <p class="card-text"><?php if($data['dimensions']){ echo 'Dimensions:'.$data['dimensions'];} ?></p>
  </div>
</div>
<?php
      }
      ?>

</div>
    </form>

</body>
</html>