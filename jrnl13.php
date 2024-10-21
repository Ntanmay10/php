<form method="post" action ="#" bgcolor="blue">
    <table cellspacing="2">
        <tr>
            <td> PROD ID : <td>
            <input type="text" name="pno">
        </tr>
        <tr>
            <td> PROD Name: <td>
            <input type="text" name="pnm">
        </tr>
        <tr>
            <td> PROD Qty: <td>
            <input type="text" name="prqt">
        </tr>
        <tr>
            <td> PROD Price: <td>
            <input type="text" name="prdpri">
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
    mysqli_select_db($con,"product");
    
    if(isset($_POST["btnsub"]))
    {
        $pno=$_POST["pno"];
        $pname=$_POST["pnm"];
        $prqt=$_POST["prqt"];
        $prdpri=$_POST["prdpri"];
        $q="insert into prod values($pno,'$pname',$prqt,$prdpri)";
        $t=mysqli_query($con,$q);
        if($t)
        echo "<br> 1 record inserted";
    }

    else if(isset($_POST["btnup"]))
    {
        $pno=$_POST["pno"];
        $pname=$_POST["pnm"];
        $q="update prod set pname='$pname' where pno=$pno";
        $t=mysqli_query($con,$q);
        if($t)
        echo "<br> 1 record updated";
    }
    else if(isset($_POST["btndel"]))
    {
        $pno=$_POST["pno"];
        $pname=$_POST["pnm"];
        $q="delete from prod where pno=$pno";
        $t=mysqli_query($con,$q);
        if($t)
        echo "<br> 1 record deleted";
    }

    else if(isset($_POST["btndis"]))
    {
        $q="select * from prod";
        $res=mysqli_query($con,$q);
        //for fetching individual record from a result set
            echo "<table border='3'>";
            echo "<tr>";
            echo "<td> PROD Id";
            echo "<td> PROD Name";
            echo "<td> PROD Qty";
            echo "<td> PROD Price";
            echo "</tr>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>".$row[0];
            echo "<td>".$row[1];
            echo "<td>".$row[2];
            echo "<td>".$row[3];
            echo "</tr>";
        }
            echo "</table>";
    }

    else if(isset($_POST["btnasc"]))
    {
        $q="select * from prod order by pname";
        $res=mysqli_query($con,$q);
        //for fetching individual record from a result set
            echo "<table border='3'>";
            echo "<tr>";
            echo "<td> PROD Id";
            echo "<td> PROD Name";
            echo "<td> PROD Qty";
            echo "<td> PROD Price";
            echo "</tr>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>".$row[0];
            echo "<td>".$row[1];
            echo "<td>".$row[2];
            echo "<td>".$row[3];
            echo "</tr>";
        }
            echo "</table>";
    }

    else if(isset($_POST["btndesc"]))
    {
        $q="select * from prod order by pname desc";
        $res=mysqli_query($con,$q);
        //for fetching individual record from a result set
            echo "<table border='3'>";
            echo "<tr>";
            echo "<td> PROD Id";
            echo "<td> PROD Name";
            echo "<td> PROD Qty";
            echo "<td> PROD Price";
            echo "</tr>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>".$row[0];
            echo "<td>".$row[1];
            echo "<td>".$row[2];
            echo "<td>".$row[3];
            echo "</tr>";
        }
            echo "</table>";
    }
?>