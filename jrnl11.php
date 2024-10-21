<?php
    $con=mysqli_connect("localhost","root","");
    if($con)
        echo "Connection Established<br>";
    else
        echo "Not Connected<br>";

    //to create database
    $q1="create database stud";
    $t=mysqli_query($con,$q1);
    if($t)
        echo "Database is created<br>";
    else
        echo "Database is not created<br>";

    //to select database
    mysqli_select_db($con,"stud");

    //to create table named s
    $q2="create table s(
    rno int auto_increment primary key,
    name varchar(30),
    course varchar(20)
    )";

    if(mysqli_query($con,$q2))
        echo "Table created<br>";
    else
        echo "Not created<br>";

    //insert records into table
    $q3="insert into s values(11,'Tanmay','Ph.D.')";
    if(mysqli_query($con,$q3))
        echo "record inserted<br>";
    else
        echo "record not inserted<br>";

    $q4="insert into s values(12,'mahek','BBA') ";
    if(mysqli_query($con,$q4))
        echo "record inserted<br>";
    else
        echo "record not inserted<br>";

    $q5="insert into s values(13,'Deep','B.com') ";
    if(mysqli_query($con,$q5))
        echo "record inserted<br>";
    else
        echo "record not inserted<br>";

    $q6="insert into s values(14,'Chirag','MCA')";
    if(mysqli_query($con,$q6))
        echo "record inserted<br>";
    else
        echo "record not inserted<br>";

    
    $q7="insert into s values(15,'Yash','MCA')";
    if(mysqli_query($con,$q7))
        echo "record inserted<br><br>";
    else
        echo "record not inserted<br><br>";

    //retrieve records from a table
    $q7="select rno,name from s";
    $res=mysqli_query($con,$q7);
        echo "<br> total records fetched ".mysqli_num_rows($res);
        echo "<br> Total columns ". mysqli_num_fields($res);
        echo "<br> Records of table are<br>";
    while($row=mysqli_fetch_assoc($res))
    {
        //associative array
        echo "<br>Roll no: ".$row['rno'];
        echo "<br>Student name: ".$row['name'];
        //echo "<br>Course Enrolled: ".$row['course'];
    }
    
    //to display records in ascending order namewise
    $q7="select * from s order by name";
    $res=mysqli_query($con,$q7);
    //print_r($res);
    echo "<br><br> Records of table in<b> ASCENDING ORDER </b>are";
    while($row=mysqli_fetch_array($res))
    {
    echo "<br>Roll no: ".$row[0];
    echo "<br>Student name: ".$row[1];
    echo "<br>Course Enrolled: ".$row[2];
    }

    //to display records in descending order namewise
    $q8="select * from s order by name desc";
    $res=mysqli_query($con,$q8);
    //print_r($res);
    echo "<br><br>Records of table in<b> DES ORDER </b>are";

    while($row=mysqli_fetch_array($res))
    {
        echo "<br>Roll no: ".$row[0];
        echo "<br>Student name: ".$row[1];
        echo "<br>Course Enrolled: ".$row[2];
    }

    //updating name to Dhruv for the student whose name is Yash
    $q9= "update s set name='Dhruv' where name='Yash'";
    $tt=mysqli_query($con,$q9);
    if($tt)
        echo "<br> record updated";
    else
        echo "not updated";

    //deleting Record
    $q10= "delete from s where name='Chirag'";
    $tt=mysqli_query($con,$q10);
    if($tt)
        echo "<br> record deleted";
    else
        echo "not deleted";
?>