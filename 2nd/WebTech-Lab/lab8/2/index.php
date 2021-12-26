<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet" />
    <title>lab8/2</title>
</head>
<body class="p-3" style="font-family: 'Mitr', sans-serif;">
    <?php
    $url = "http://10.0.15.12/lab8/restapis/movies90";
    $response = file_get_contents($url);
    $result = json_decode($response);

    echo "<div class='container'>";
    foreach ($result as $info) {
        echo "<div class='row'>";
        echo "<div class='col-sm-12 p-3'>";
        for ($i = 1; $i <= count($result); $i++) {
            echo "<b>$i</b>" . ". ";
            echo "<b>$info->title</b>" . " (" . $info->year . ")" . "<br>";
            echo "<b>Cast : </b>";
            foreach ($info->cast as $in_cast) {
                echo "- $in_cast <br>";
            }
            echo "<b>Genres : </b>";
            foreach ($info->genres as $in_genres) {
                echo "$in_genres <br>";
            }
            echo "<br>";
        }
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";

?>
</body>
</html>