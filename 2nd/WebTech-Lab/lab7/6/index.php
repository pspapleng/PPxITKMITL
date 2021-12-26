<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet" />
    <title>lab7/6</title>
</head>
<style>
body {
    background-color: #000;
}

img {
    padding: 5px;
    border-radius: 20px;
}

.title {
    text-align: center;
    color: white;
}
</style>

<body>
    <?php 
        $p1 = "https://i.imgur.com/v5OQRzB.jpg";
        $p2 = "https://i.imgur.com/iZWCiJW.jpg";
        $p3 = "https://i.imgur.com/joGDqdj.jpg";
        $p4 = "https://i.imgur.com/BtPuajE.jpg";
        $p5 = "https://i.imgur.com/VvFL18j.jpg";
        $p6 = "https://i.imgur.com/dl0AncE.jpg";
        $p7 = "https://i.imgur.com/CyAEGDr.jpg";
        $p8 = "https://i.imgur.com/n01sH1g.jpg";
        $p9 = "https://i.imgur.com/PMcfOfm.jpg";
        $p10 = "https://i.imgur.com/3mE3keZ.jpg";
        $p11 = "https://i.imgur.com/tTG6s4W.jpg";
        $p12 = "https://i.imgur.com/dHed7OH.jpg";
        $p13 = "https://i.imgur.com/VrJgIfn.jpg";
        $p14 = "https://i.imgur.com/tReh1OQ.jpg";
        $p15 = "https://i.imgur.com/Fmr4cTi.jpg";
        $p16 = "https://i.imgur.com/1QgL0bC.jpg";
        $p17 = "https://i.imgur.com/JHKVvQw.jpg";
        $p18 = "https://i.imgur.com/1XFFDKH.jpg";
        $p19 = "https://i.imgur.com/C6MvIRt.jpg";
        $p20 = "https://i.imgur.com/XmIRtk9.jpg";
        $arr = array($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20);
        echo "<div class='container'>";
        echo "<h1 class='title'>" . "my memory ♪" . "</h1>";
        echo "<div class='row'>";
        echo "<div class='col-3 p-2'>";
        for($i = 0; $i < 5; $i++){
            echo '<img src="'.($arr[$i]).'" width="100%"/>';
        }
        echo "</div>";
        echo "<div class='col-3 p-2'>";
        for($i = 5; $i < 10; $i++){
            echo '<img src="'.($arr[$i]).'" width="100%"/>';
        }
        echo "</div>";
        echo "<div class='col-3 p-2'>";
        for($i = 10; $i < 15; $i++){
            echo '<img src="'.($arr[$i]).'" width="100%"/>';
        }
        echo "</div>";
        echo "<div class='col-3 p-2'>";
        for($i = 15; $i < 20; $i++){
            echo '<img src="'.($arr[$i]).'" width="100%"/>';
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
    ?>
</body>

</html>