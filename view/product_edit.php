<?php
include(dirname(__DIR__,1). '/controllers/product_controller.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Products</title>
  
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">

          <!-- font awesome -->
          <link href="../fontawesome/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css" >
        <link rel="stylesheet" href="../fontawesome/css/solid.min.css">
        <link rel="stylesheet" href="../fontawesome/css/solid.css">
        
<!-- css file -->
<link rel="stylesheet" href="../style.css">

</head>
<body class="bg-dark">
  <div class="container mt-3">
    <h1 class="text-center">Edit Products</h1>

    <!-- Form (Anything aside text in the form would require the 'enctype') -->
    <form action="../actions/updateprod.php" method="post" enctype="multipart/form-data">
    <!-- Title -->
    <?php echo "<input type='hidden' name='id' value= $_GET[id] class='form-control'>" ?>
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_title" class="form-label">Product Title</label>
      <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">

    </div>
    <!-- description -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="description" class="form-label">Product Description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">

    </div>
<!-- keywords -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="keywords" class="form-label">Product Keywords</label>
      <input type="text" name="keywords" id="keywords" class="form-control" placeholder="Enter Product keywords" autocomplete="off" required="required">

    </div>

    <!-- categories -->
<div class="form-outline mb-4 w-50 m-auto">
  <select name="product_categories" id="" class="form-select">
  <option value="">Select a Category</option>  
<?php
$cat = cat_select();
foreach($cat as $all){
    echo "<option value='{$all['cat_id']}'>{$all['cat_name']}</option>";

}


?>

  </select>

</div>
<!-- Brands -->
<div class="form-outline mb-4 w-50 m-auto">
  <select name="product_brands" id="" class="form-select">
  <option value="">Select a Brands</option>  
  <?php
   $brand = brand_select();
   foreach($brand as $all){
       echo "<option value='{$all['brand_id']}'>{$all['brand_name']}</option>";
   
   }
            ?>
  </select>
  <!-- Image 1 -->
  <div class="form-outline mb-4 w-50 m-1">
      <label for="product_image1" class="form-label">Product Image 1</label>
      <input type="file" name="product_image1" id="product_image1" 
      class="form-control" required="required">

    </div>
<!-- Price -->
    <div class="form-outline">
      <label for="product_price" class="form-label">Product Price</label>
      <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product price" autocomplete="off" required="required">

    </div>
    <!-- Price -->
    <div class="form-outline mb-7 mt-3 w-50 m-1">
      <input type="submit" name="edit_product"  class="btn btn-info" value="Insert products">

    </div>
    </form>
  
  </div>
  
</body>
</html>