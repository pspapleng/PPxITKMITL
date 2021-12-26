<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 if(isset($_POST['submit']))
 {
  $prodname = $_POST['prodname'];        
  $url = "http://10.0.15.12/lab8/restapis/rest/api.php?prodname=" . $prodname;
  $client = curl_init($url);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
  $response = curl_exec($client);   
  $result = json_decode($response);
  echo "We have " . $result->data . " " . $prodname ."s."; } ?>
</body>
</html>