<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // URL tp get webpages
    $url = 'https://phonebook-lab.herokuapp.com/actions/api_display.php';
    
    // Get the contents of the URL using file_get_contents
    $ch= curl_init();
    // Return page content
    curl_setopt($ch, CURLOPT_URL, $url);
    // 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec($ch);
    echo ($contents);
    //curl_close($ch);
    

    ?>

   
</body>
</html>