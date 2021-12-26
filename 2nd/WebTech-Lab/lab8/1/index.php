<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet" />
    <style>
    body{
        font-family: 'Mitr', sans-serif;
        padding:3%;
    }
    </style>
    <title>lab8/1</title>
  </head>
  <body>
    <div class="container">
    <h2>Current Converter</h2>
    <form action="" method="POST">
      <div>
      <label for="start">From :</label>
      <select name="k1" id="k1">
      <option value="THB">THB</option>
      <option value="JPY">JPY</option>
      <option value="CNY">CNY</option>
      <option value="SGD">SGD</option>
      <option value="USD">USD</option></select>
      <input type="text" id="start" name="start" required/></div>
      <div>
      <label for="end">To :</label>
      <select name="k2" id="k2">
      <option value="THB">THB</option>
      <option value="JPY">JPY</option>
      <option value="CNY">CNY</option>
      <option value="SGD">SGD</option>
      <option value="USD">USD</option></select>
      <input type="text" id="end" name="end" required disabled value="<?php
    if(isset($_POST['submit']))
    {
    $url = "http://10.0.15.12/lab8/restapis/currencyrate";    
    $response = file_get_contents($url);
    $result = json_decode($response);
    
    $k1 = $_POST["k1"];
    $k2 = $_POST["k2"];
    $va1 = $_POST["start"];
    $info = $result->rates;
        if($k1 == "THB" && $k2 == "JPY"){
          $ans = $info->JPY/$info->THB;
          echo $ans*$va1;
        }
        if($k1 == "JPY" && $k2 == "THB"){
            $ans = $info->THB/$info->JPY;
            echo $ans*$va1;
          }
        if($k1 == "THB" && $k2 == "CNY"){
            $ans = $info->THB/$info->CNY;
            echo $ans*$va1;
          }
        if($k1 == "CNY" && $k2 == "THB"){
            $ans = $info->CNY/$info->THB;
            echo $ans*$va1;
          }
        if($k1 == "THB" && $k2 == "SGD"){
            $ans = $info->THB/$info->SGD;
            echo $ans*$va1;
          }
        if($k1 == "SGD" && $k2 == "THB"){
            $ans = $info->SGD/$info->THB;
            echo $ans*$va1;
          }
        if($k1 == "THB" && $k2 == "USD"){
            $ans = $info->THB/$info->USD;
            echo $ans*$va1;
          }
        if($k1 == "USD" && $k2 == "THB"){
            $ans = $info->USD/$info->THB;
            echo $ans*$va1;  
        }
        if($k1 == "JPY" && $k2 == "CNY"){
            $ans = $info->JPY/$info->CNY;
            echo $ans*$va1;  
        }
        if($k1 == "CNY" && $k2 == "JPY"){
            $ans = $info->CNY/$info->JPY;
            echo $ans*$va1;  
        }
        if($k1 == "JPY" && $k2 == "SGD"){
            $ans = $info->JPY/$info->SGD;
            echo $ans*$va1;  
        }
        if($k1 == "SGD" && $k2 == "JPY"){
            $ans = $info->SGD/$info->JPY;
            echo $ans*$va1;  
        }
        if($k1 == "JPY" && $k2 == "USD"){
            $ans = $info->JPY/$info->USD;
            echo $ans*$va1;  
        }
        if($k1 == "USD" && $k2 == "JPY"){
            $ans = $info->USD/$info->JPY;
            echo $ans*$va1;  
        }
        if($k1 == "CNY" && $k2 == "SGD"){
            $ans = $info->CNY/$info->SGD;
            echo $ans*$va1;  
        }
        if($k1 == "SGD" && $k2 == "CNY"){
            $ans = $info->SGD/$info->CNY;
            echo $ans*$va1;  
        }
        if($k1 == "CNY" && $k2 == "USD"){
            $ans = $info->CNY/$info->USD;
            echo $ans*$va1;  
        }
        if($k1 == "USD" && $k2 == "CNY"){
            $ans = $info->USD/$info->CNY;
            echo $ans*$va1;  
        }
        if($k1 == "SGD" && $k2 == "USD"){
            $ans = $info->SGD/$info->USD;
            echo $ans*$va1;  
        }
        if($k1 == "USD" && $k2 == "SGD"){
            $ans = $info->USD/$info->SGD;
            echo $ans*$va1;  
        }
    }
?>"/></input>
      </div>
      <button class="btn btn-primary m-auto" type="submit" name="submit">Convert</button>
    </form>

</div> 
  </body>
</html>