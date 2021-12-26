<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet" />
    <title>Document</title>
</head>
<style>
body {
    font-family: "Mitr", sans-serif;
    display: block;
}

table {
    margin: auto;
    width: 50%;
    height: 50%;
    border-collapse: collapse;
}

th,
td {
    width: 10%;
    height: 10%;
    border: 1px solid silver;
    text-align: center;
}
</style>

<body>
    <?php
    echo "<div>";
    echo "<h1 class='table text-center pt-5'>September 2020</h1>";
    echo "<table border='1' >";
    echo "<tr>
    <th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
    </tr>";
    echo "<tr>";
    $col = 2;
    if($col < 7){
        echo str_repeat("<td> </td>", $col);
       }
    for($i=1; $i <= 30; $i++){
        $col++;
        echo "<td>", $i , "</td>";
        if($col % 7 == false){
            echo "</tr><tr>";
            $col = 0;
        }
    }
    if($col < 7){
        echo str_repeat("<td> </td>", 7-$col);
       }
       echo '</tr>'; 
    echo "</table>";
    echo "</div>";
    ?>
</body>

</html>