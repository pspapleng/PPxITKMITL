<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet" />
    <title>lab8/5</title>
</head>
<style>
body {
    font-family: 'Mitr', sans-serif;
}
</style>
<body class="p-3">
    <div class="container">
    <form action="" method="POST">
        <div class="row text-center justify-content-sm-center p-2">
            <div class="col-sm-12">
                <h1>BMX49 DANCER CONTEST</h1>
                <h5>Voting Score</h5>
            </div>
        </div>
        <div class="row justify-content-sm-center">
            <div class="col-sm-9">
                <select class="custom-select" name="sel" id="Select">
                <option value="">Select Number</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-success" type="submit" name="submit" for="Select">Submit</button>
            </div>
            
        </div>
        </form>
    <?php
            $url = "http://10.0.15.12/lab8/restapis/candidates";    
            $response = file_get_contents($url);
            $result = json_decode($response);
            if(isset($_POST['submit']))
            {if(!empty($_POST['sel'])) {
                $sel = $_POST['sel'];
                $info = $result[$sel-1];
                echo "<div class='row text-center justify-content-sm-center'>";
                echo "<div class='col-sm-6'>";
                echo "<div class='card'>";
                echo "<img class='card-img-top' src='$info->img'/>";
                echo "<h4 class='pt-2'>$info->name</h4>";
                echo "<p class='text-danger'>อันดับ $info->no</p>";
                echo "<p class='text-dark'> $info->score คะแนน</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            else{
                echo "<h2 style='text-align:center;'>Please select number.</h2>";
            }
    }
        ?>
    </div>
</body>
</html>