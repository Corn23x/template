
<!DOCTYPE html>
<html>
<body>

<?php
//echo "yes"; 
// From URL to get webpage contents.
$url = "https://phonebook-lab.herokuapp.com/actions/api_display.php";
 
// Initialize a CURL session.
$ch = curl_init();
 
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
 
$result=curl_exec($ch);
 echo ($result);
// if (curl_errno($ch)) { 
//     print curl_error($ch); 
//  } 
//  curl_close($ch); 
//var_dump($result);
 
?>

</body>
</html>