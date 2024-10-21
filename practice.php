<html>
    <body>
        <form action="#" method="post">
            USER ID:<input type="text" name="uid">
            USER NAME:<input type="text" name="unm">
            <input type="submit" value="INSERT" name="btnsub">
            <input type="submit" value="DELETE" name="btndel">
            <input type="submit" value="UPDATE" name="btnupd">
            <input type="submit" value="DISPLAY" name="btnshw">
            <input type="submit" value="ASCENDING" name="btnasc">
            <input type="submit" value="DESCENDING" name="btndesc">
        </form>
    </body>
</html>

<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"user");

/*
CREATING MANUAL TABLE
$qr1="create table usr1(
    rno int primary key,
    snm varchar(30))";
    mysqli_query($con,$qr1);
*/
if (isset($_REQUEST["btnsub"])) {
   $uid=$_REQUEST["uid"];
   $unm=$_REQUEST["unm"];

   //echo "$uid $unm";

   $q1="insert into usr values($uid,'$unm')";
   mysqli_query($con,$q1);
}

if (isset($_REQUEST["btndel"])) {
   $uid=$_REQUEST["uid"];
   $unm=$_REQUEST["unm"];

   //echo "$uid $unm";

   $q2="delete from usr where uid=$uid";
   mysqli_query($con,$q2);
}

if (isset($_REQUEST["btnupd"])) {
   $uid=$_REQUEST["uid"];
   $unm=$_REQUEST["unm"];

   //echo "$uid $unm";

   $q3="update usr set unm='$unm' where uid=$uid";
   mysqli_query($con,$q3);
}

if (isset($_REQUEST["btnshw"])) {
   $q4="select * from usr";
   $res=mysqli_query($con,$q4);

   echo"<table border=2>";
   echo"<th COLSPAN=2>USER RECORDS";
   echo"<tr>";
   echo"<td>USER ID";
   echo"<td>USER NAME";
   echo"</tr>";

   while($row=mysqli_fetch_array($res))
   {
    echo"<tr>";
    echo"<td>".$row[0];
    echo"<td>".$row[1];
    echo"</tr>";
   }
   echo"</table>";
}

if (isset($_REQUEST["btnasc"])) {
   $q5="select * from usr order by unm";
   $res=mysqli_query($con,$q5);

   echo"<table border=2>";
   echo"<th COLSPAN=2>ASC RECORDS";
   echo"<tr>";
   echo"<td>USER ID";
   echo"<td>USER NAME";
   echo"</tr>";

   while($row=mysqli_fetch_array($res))
   {
    echo"<tr>";
    echo"<td>".$row[0];
    echo"<td>".$row[1];
    echo"</tr>";
   }
   echo"</table>";
}

if (isset($_REQUEST["btndesc"])) {
   $q6="select * from usr order by unm desc";
   $res=mysqli_query($con,$q6);

   echo"<table border=2>";
   echo"<th COLSPAN=2>DESC RECORDS";
   echo"<tr>";
   echo"<td>USER ID";
   echo"<td>USER NAME";
   echo"</tr>";

   while($row=mysqli_fetch_array($res))
   {
    echo"<tr>";
    echo"<td>".$row[0];
    echo"<td>".$row[1];
    echo"</tr>";
   }
   echo"</table>";
}
?>