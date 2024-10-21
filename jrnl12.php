<form method="post" action ="#" bgcolor="blue">
    <table cellspacing="2">
        <tr>
            <td> EMP ID : <td>
            <input type="text" name="eno">
        </tr>
        <tr>
            <td> EMP Name: <td>
            <input type="text" name="enm">
        </tr>
        <tr colspan=2>
            <td>
             <input type="submit" name="btnsub" value="Insert">
             <input type="submit" name="btnup" value="Update">
             <input type="submit" name="btndel" value="Delete">
             <input type="submit" name="btndis" value="Display">
             <input type="submit" name="btnasc" value="Display Ascending">
             <input type="submit" name="btndesc" value="Display Decending">
        </tr>
    </table>
</form>
<?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"employee");
    
    if(isset($_POST["btnsub"]))
    {
        $eno=$_POST["eno"];
        $ename=$_POST["enm"];
        $q="insert into emp values($eno,'$ename')";
        $t=mysqli_query($con,$q);
        if($t)
        echo "<br> 1 record inserted";
    }

    else if(isset($_POST["btnup"]))
    {
        $eno=$_POST["eno"];
        $ename=$_POST["enm"];
        $q="update emp set empname='$ename' where empid=$eno";
        $t=mysqli_query($con,$q);
        if($t)
        echo "<br> 1 record updated";
    }
    else if(isset($_POST["btndel"]))
    {
        $eno=$_POST["eno"];
        $ename=$_POST["enm"];
        $q="delete from emp where empid=$eno";
        $t=mysqli_query($con,$q);
        if($t)
        echo "<br> 1 record deleted";
    }

    else if(isset($_POST["btndis"]))
    {
        $q="select * from emp";
        $res=mysqli_query($con,$q);
        //for fetching individual record from a result set
            echo "<table border='3'>";
            echo "<tr>";
            echo "<td> Employee ID";
            echo "<td> Employee Name";
            echo "</tr>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>".$row[0];
            echo "<td>".$row[1];
            echo "</tr>";
        }
            echo "</table>";
    }

    else if(isset($_POST["btnasc"]))
    {
        $q="select * from emp order by empname";
        $res=mysqli_query($con,$q);
        //for fetching individual record from a result set
            echo "<table border='3'>";
            echo "<tr>";
            echo "<td> Employee ID";
            echo "<td> Employee Name";
            echo "</tr>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>".$row[0];
            echo "<td>".$row[1];
            echo "</tr>";
        }
            echo "</table>";
    }

    else if(isset($_POST["btndesc"]))
    {
        $q="select * from emp order by empname desc";
        $res=mysqli_query($con,$q);
        //for fetching individual record from a result set
            echo "<table border='3'>";
            echo "<tr>";
            echo "<td> Employee ID";
            echo "<td> Employee Name";
            echo "</tr>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>".$row[0];
            echo "<td>".$row[1];
            echo "</tr>";
        }
            echo "</table>";
    }
?>