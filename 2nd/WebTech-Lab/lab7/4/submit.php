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
            $arr = array($q1 =>$id,$q2 => $fn, $q3 => $ln, $q4 => $a1, $q5 => $a2, $q6 => $a3, $q7 => $ps, $q8 => $te);
            echo "<div class='container p-5'>";
            echo "<table class='table p-2 table-bordered'>";
            echo "<thead class='thead-light'>";
            echo "<tr class='text-center'><th ></th><th>ข้อมูล</th></tr>";
            echo "</thead>";
            foreach ($arr as $in1 => $in2){
                if(strlen($in2) >= 5){
                    echo "<tr>";
                    echo "<td>";
                    echo $in1;
                    echo "</td>";
                    echo "<td>";
                    echo $in2;
                    echo "</td>";
                    echo "</tr>";
                }
                else {
                    echo "<tr>";
                    echo "<td>";
                    echo $in1;
                    echo "</td>";
                    echo "<td>";
                    echo "<p style='color: red;'>$warn</p>";
                    echo "</td>";
                    echo "</tr>";
                }
            }   
            echo "</table";
            echo "</div>";
        ?>

</body>

</html>