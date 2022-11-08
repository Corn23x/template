<?php
require(dirname(__DIR__,1). '/functions/common_function.php');
include(dirname(__DIR__,1). '/controllers/product_controller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
getLinks();

?>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="landing_page.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="products.php">Products</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product Display
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="all_product.php">All Products</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login/logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="product_search_result.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<div class="table-wrapper m-4">
        <table class="table table-striped table-dark">
            <Thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Category
                    </th>
                    <th>
                        Brand
                    </th>
                    <th>
                     Price
                    </th>
                    <th>
                   Description
                    </th>
                    <th>
                       Image
                    </th>
                    <th>
                       Edit
                    </th>
                </tr>
            </Thead>
            <Tbody>
            <?php
                $all_products = prod_select();
                foreach($all_products as $all)
                    {
            ?>
                     <tr>
                         <td>
                            <?= $all['product_id'] ?>
                        </td>
                        <td>
                            <?= $all['product_title'] ?>
                        </td>
                        <td>
                            <?= $all['product_cat'] ?>
                        </td>
                        <td>
                            <?= $all['product_brand'] ?>
                        </td>
                        <td>
                            <?= $all['product_price'] ?>
                        </td>
                        <td>
                            <?= $all['product_desc'] ?>
                        </td>
                        <td>
                            <?= $all['product_image'] ?>
                        </td>
                        <td>
                            <a href=<?="product_edit.php?id=".$all['product_id'] ?>>Edit</a>
                        </td>
                         
                    </tr>
            <?php
                    }
            ?>
            </Tbody>
        </table>
        </div>



<br>
<a class="btn btn-primary" href="product_add.php" role="button">Add product</a>
<br>



    
</body>
</html>
