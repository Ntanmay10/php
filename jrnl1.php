<html>
    <body>
        <form action="#" method="post">
            Name: <input type="text" name="tnm"><br>
            E-mail: <input type="text" name="tml"><br>
            <input type="submit" name="btnsub" value="SUBMIT">
        </form>
    </body>
</html>
<?php
    $nm=$_REQUEST["tnm"];
    $email=$_REQUEST["tml"];
    echo "Welcome $nm <br>";
    echo "Your email is $email";
?>