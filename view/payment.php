<?php
include_once(dirname(__DIR__,1) . '/actions/cart_function.php');
include_once(dirname(__DIR__,1) . '/settings/core.php');
include_once(dirname(__DIR__,1) . '/controllers/product_controller.php');
include_once(dirname(__DIR__,1) . '/controllers/customer_controller.php');
include_once(dirname(__DIR__,1) . '/functions/common_function.php');

getLinks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Summary</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="card" stlye="card-dark">
    <div class="card-header">
      <h2 class="text-center">Product Summary</h2>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5>Product</h5>
        </div>
        <div class="col">
          <h5>Quantity</h5>
        </div>
        <div class="col">
          <h5>Price</h5>
        </div>
      </div>
    
  </div>

<?php
  
$customerid= $_SESSION['id'];
$customer_email= selectemail_ctr($customerid);
echo "<input type='hidden' id='email-address' value='$customer_email'>";
$run= callcartproduct($customerid);

?>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="https://js.paystack.co/v1/inline.js"></script> 

    <script>

function payWithPaystack() {
  event.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_807a46b46c8c9c96fcc5c197e615c83856ee0f6a', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    currency: "GHS",
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },

    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);

      $.post('../actions/process_payment.php',
      {ref: response.reference, total:document.getElementById('amount').value},
      
      function(data){
        data=data.trim();
        console.log(data);

        if(data == "Payment Successful"){
            window.location.href="payment_sucessful.php";
         } else{
            window.location.href="payment_failed.php";
         }

      }
        );
    }

  });

  handler.openIframe();
  }

    </script>

</body>
</html>