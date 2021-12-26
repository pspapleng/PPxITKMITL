<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet" />
    <title>lab8/4</title>
</head>
<style>
body {
    font-family: 'Mitr', sans-serif;
}
</style>
<body class="p-3">
    <?php
    $url = "http://10.0.15.12/lab8/restapis/10countries";
    $response = file_get_contents($url);
    $result = json_decode($response);

    echo "<div class='container'>";
    foreach ($result as $info) {
        echo "<div class='row m-5'>";
        echo "<div class='col-sm-7 p-3'>";
        echo "Name : " . "<b>$info->name</b> <br>";
        echo "Capital : " . "$info->capital <br>";
        echo "Population : " . "$info->population <br>";
        echo "Region : " . "$info->region <br>";
        echo "Location : ";
        foreach ($info->latlng as $in_latlng) {
            echo "$in_latlng ";
        }
        echo "<br>";
        echo "Borders : ";
        foreach ($info->borders as $in_borders) {
            echo "$in_borders ";
        }
        echo "<br>";
        echo "</div>";
        echo "<div class='col-sm-5 pt-3'>";
        echo '<img src="'.$info->flag.'" width="250px;"/>';
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
    

?>
</body>
</html>