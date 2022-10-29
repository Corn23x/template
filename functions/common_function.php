<?php

function getLinks(){

    echo ' <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    
        <!-- Bootstrap CSS Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">
    
        <!-- Font Awesome link -->
    
        <link href="fontawesome/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="fontawesome/css/solid.min.css">
        <link rel="stylesheet" href="fontawesome/css/solid.css">
    
          <!-- css file -->
          <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
          crossorigin="anonymous"></script>
    </body>
    </html>

    ';
}

function verify_pass($hash_pass, $login_pass){
    return password_verify($login_pass, $hash_pass);
}


?>