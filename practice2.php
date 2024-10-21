<?php
    $con=mysqli_connect("localhost","root","");
    // $q1="create database practice";
    // mysqli_query($con,$q1);
    mysqli_select_db($con,"practice");

    // $q2="create table prac(
    // rno int primary key,
    // name varchar(20),
    // course varchar(20)
    // )";

    // mysqli_query($con,$q2);

    // $q3="insert into prac values(53,'tanmay','bca')";
    // mysqli_query($con,$q3);
    // $q4="insert into prac values(51,'mahek','bca')";
    // mysqli_query($con,$q4);
    // $q5="insert into prac values(01,'deep','bca')";
    // mysqli_query($con,$q5);

    // $q6="delete from prac where rno=51";
    // mysqli_query($con,$q6);

    $q7="update prac set name='chirag' where name='deep'";
    mysqli_query($con,$q7);

    $q8="select * from prac";
    $res=mysqli_query($con,$q8);
    echo "<table border='1'><tr><td colspan='3'>Records are down</tr>";
    while($row=mysqli_fetch_array($res))
    {
        echo"<tr>";
        echo"<td>".$row[0];
        echo"<td>".$row[1];
        echo"<td>".$row[2];
        echo"</tr>";
    }
    echo"</table>";
?>