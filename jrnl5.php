<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <script language="javascript">
        function
        let () {
            var nm = document.reg.txtnm.value;
            var len = nm.length;
            if (len == 0)
                document.getElementById("n0").innerHTML = "compulsory field";
            else {
                var reg = /^[a-zA-Z]+$/;
                if (nm.match(reg)) {
                    document.getElementById("n0").innerHTML = "";

                    return true;
                } else {
                    document.getElementById("n0").innerHTML = "Enter char value only";
                    return false;
                }
            }
        }

        function age() {
            var ag = document.reg.txtage.value;
            var len = ag.length;
            if (len == 0)
                document.getElementById("n1").innerHTML = "Enter age!";
            else {
                var reg = /^[0-9]{1,3}$/;
                if (ag.match(reg)) {
                    document.getElementById("n1").innerHTML = "";
                    return true;
                } else {
                    document.getElementById("n1").innerHTML = "Min. 1 digit Max 3 digit";
                    return false;
                }
            }
        }

        function mob() {
            var mob = document.reg.txtmob.value;
            var len = mob.length;
            if (len == 0)
                document.getElementById("n2").innerHTML = "Enter Mobile No!";
            else {
                var reg = /^[0-9]{10}$/;
                if (mob.match(reg)) {
                    document.getElementById("n2").innerHTML = "";
                    return true;
                } else {

                    document.getElementById("n2").innerHTML = "Mobile no. must be of 10 digits";
                    return false;
                }
            }
        }

        function em() {
            var em = document.reg.txtemail.value;
            var len = em.length;
            if (len == 0)
                document.getElementById("n3").innerHTML = "Enter Email!";
            else {
                var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (em.match(reg)) {
                    document.getElementById("n3").innerHTML = "";
                    return true;
                } else {

                    document.getElementById("n3").innerHTML = "Enter Email in valid format";
                    return false;
                }
            }
        }

        function dt() {
            var dt = document.reg.txtbdt.value;
            var len = dt.length;
            if (len == 0)
                document.getElementById("n4").innerHTML = "Enter Date! Compulsory Field";
            else {
                var reg = /^([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})$/;
                if (dt.match(reg)) {
                    document.getElementById("n4").innerHTML = "";
                    return true;
                } else {

                    document.getElementById("n4").innerHTML = "Enter date in dd-mm-yyyy format";
                    return false;
                }
            }
        }
    </script>
    <?php
    if (isset($_POST["btnsub"])) {
        echo "Submitted data are <br>";
        echo "Name is : " . $_POST["txtnm"] . "<br>";
        echo "Age is : " . $_POST["txtage"] . "<br>";
        echo "Mobile Number is : " . $_POST["txtmob"] . "<br>";
        echo "Email is : " . $_POST["txtemail"] . "<br>";
        echo "BirthDate is : " . $_POST["txtbdt"] . "<br>";
    }
    ?>
</head>
<form method="post" action="#" name="reg">
    Emp name: <input type="text" name="txtnm" onblur="return let()" tabindex="1">
    <span id="n0" class="error"></span> <br> <br>
    Emp Age: <input type="text" name="txtage" onblur="return age()" tabindex="2">
    <span id="n1" class="error"></span> <br> <br>
    Mobile No: <input type="text" name="txtmob" onblur="return mob()" tabindex="3">
    <span id="n2" class="error"></span> <br> <br>
    Email: <input type="text" name="txtemail" tabindex="4" onblur="return em()">
    <span id="n3" class="error"></span> <br> <br>
    Birth Date: <input type="text" name="txtbdt" tabindex="5" onblur="return dt()">
    <span id="n4" class="error"></span> <br> <br>
    <input type="submit" name="btnsub">
    <input type="reset" name="btnres">
</form>

</html>