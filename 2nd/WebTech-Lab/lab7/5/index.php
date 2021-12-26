<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet" />
    <title>lab7/5</title>
</head>
<style>
body {
    font-family: "Mitr", sans-serif;
    text-align: center;
}

#head {
    text-align: center;
    background-color: #eee;
}

#tbody {
    text-align: center;
}
</style>

<body>
    <?php $col=array("x", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
    echo "<div class='container'>";
    echo "<div class='row justify-content-center'>";
    echo "<div class='col-12 '>";
    echo "<table class='table table-bordered'>";
    echo "<thead class='thead-light'>";
    echo "<tr>";

    for($i=0; $i < sizeof($col); $i++) {
        echo "<th id='head'>".$col[$i]."</th>";
    }

    for($i=1; $i < sizeof($col); $i++) {
        echo "<tr>";
        echo "<td id='head'>".$col[$i]."</td>";

        for($j=1; $j < sizeof($col); $j++) {
            echo "<td id='tbody'>".$col[$i]*$col[$j]."</td>";
        }

        echo "</tr>";
    }

    echo "</thead>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    ?>
</body>

</html>