<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div>
        <form action="#" method="post">
            <table border='1' align='center'>
                <tr align='center'>
                    <td><label for="rno">Roll No</label></td>
                    <td><input type="text" name="rno" id="rno"></td>
                </tr>
                <tr align='center'>
                    <td><label for="unm">Username</label></td>
                    <td><input type="text" name="unm" id="unm"></td>
                </tr>
                <tr align='center'>
                    <td><label for="crs">Course</label></td>
                    <td><input type="text" name="crs" id="crs"></td>
                </tr>
                <tr align='center'>
                    <td colspan="2">
                        <input type="submit" value="insert" name="insert">
                        <input type="submit" value="update" name="update">
                        <input type="submit" value="delete" name="delete">
                        <input type="submit" value="display" name="display">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"stud");

    if (isset($_REQUEST["insert"])){
        $rno=$_REQUEST["rno"];
        $unm=$_REQUEST["unm"];
        $crs=$_REQUEST["crs"];
        $q1="insert into s values($rno,'$unm','$crs')";
        mysqli_query($con,$q1);
    }

    if (isset($_REQUEST["update"])){
        $rno=$_REQUEST["rno"];
        $unm=$_REQUEST["unm"];
        $crs=$_REQUEST["crs"];
        $q1="update s set name='$unm', course='$crs' where rno=$rno";
        mysqli_query($con,$q1);
    }

    if (isset($_REQUEST["delete"])){
        $rno=$_REQUEST["rno"];
        $unm=$_REQUEST["unm"];
        $crs=$_REQUEST["crs"];
        $q1="delete from s where rno=$rno";
        mysqli_query($con,$q1);
    }

    if (isset($_REQUEST["display"])){
        $q1="select * from s";
        $res=mysqli_query($con,$q1);
        echo"<table align='center' class='table'>";
        echo"<tr>";
        echo "<th>Roll No";
        echo "<th>Name";
        echo "<th>Course";
        echo "</tr>";
        while($row=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>".$row[0];
            echo "<td>".$row[1];
            echo "<td>".$row[2];
            echo "</tr>";
        }
        echo "</table>";
    }
?>