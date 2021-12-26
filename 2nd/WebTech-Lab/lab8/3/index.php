<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet" />
    <title>lab8/3</title>
</head>
    <style>
        body{
            font-family: 'Mitr', sans-serif;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        i:hover{
            color:black;
        }
    </style>
<body>
    <div class="container">
    <div class="row text-center">
    <div class="col-sm-4 m-auto">
    <div class="card">
    <?php 
        $url = "https://www.themealdb.com/api/json/v1/1/random.php";    
        $response = file_get_contents($url);
        $result = json_decode($response);
        // Original PHP code by Chirp Internet: www.chirp.com.au
        // Please acknowledge use of this code by including this header.
        function myTruncate($string, $limit, $break=".", $pad="..."){
            // return with no change if string is shorter than $limit
            if(strlen($string) <= $limit) return $string;
            // is $break present between $limit and the end of the string?
            if(false !== ($breakpoint = strpos($string, $break, $limit))) {
            if($breakpoint < strlen($string) - 1) {
            $string = substr($string, 0, $breakpoint) . $pad;
                }
            }
            return $string;
        }

        foreach ($result->meals as $info){
            $des = myTruncate($info->strInstructions, 150, " ");
            echo " <img class='card-img-top' src='$info->strMealThumb' alt='Card image cap'>";
            echo "<div class='card-body'>";
            echo "<p>$des</p>";
            echo "<i class='fa fa-refresh' aria-hidden='true' onclick='window.location.reload()'></i>";
            echo "<a href='$info->strSource' target='_blank'>";
            echo "<button class='ml-5 mt-2 mb-2 btn btn-primary'>Learn More</button>";
            echo "</a>"; 
            echo "</div>"; 
        }
    ?>
    </div>
    </div>
    </div>
    </div>
</body>
</html>