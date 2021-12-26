<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>lab7/3</title>

</head>

<body class="container">
    <?php
            $warn = "***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***"; 
            $q1 = "หมายเลขบัตรประชาชน";
            $q2 = "ชื่อ";
            $q3 = "นามสกุล";
            $q4 = "ที่อยู่";
            $q5 = "อำเภอ/เขต";
            $q6 = "จังหวัด";
            $q7 = "รหัสไปรษณีย์";
            $q8 = "เบอร์โทร";
            $id = $_POST["numid"];
            $fn = $_POST["fname"];
            $ln = $_POST["lname"];
            $a1 = $_POST["address"];
            $a2 = $_POST["add"];
            $a3 = $_POST["dress"];
            $ps = $_POST["postnum"];
            $te = $_POST["tel"];
            $arr = array($id, $fn, $ln, $a1, $a2, $a3, $ps, $te);
            $arr2 = array($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8);
            echo "<div class='container p-5'>";
            for($i = 0; $i < sizeof($arr); $i++){
            if(strlen($arr[$i]) >= 5){
                echo "<p>".($arr2[$i]).": ".($arr[$i])."</p>";
            }
            else{
                echo "<p>".$arr2[$i].": "."<span style='color: red;'>$warn</span>"."</p>";
            }
        }
            echo "</div>";
        ?>

</body>

</html>