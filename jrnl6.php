<html>
    <form method="post" action="#" name="reg">
        Emp name: <input type="text" name="txtnm" tabindex="1" pattern="[A-Za-z]{3,30}"
        title="Minimum 3chars and Max 30 Chars Only" required> <br> <br>
        Emp Age: <input type="number" name="txtage" tabindex="2" min="1" max="100"
        required><br> <br>
        Mobile No: <input type="tel" name="txtmob" tabindex="3" pattern="[0-9]{10}"
        required title="10 Digits Only"><br> <br>
        Email: <input type="email" name="txtemail" tabindex="4" required ><br> <br>
        Birth Date: <input type="date" name="txtbdt" tabindex="5" required><br> <br>
        Password: <input type="password" name="txtpwd" tabindex="6" required
        pattern=".{8,}"
        title="Eight or more characters"><br> <br>
        Password2: <input type="password" name="txtpwd2" tabindex="7" required
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number
        and one uppercase and lowercase letter, and at least 8 or more characters"><br> <br>
        <input type="submit" name="btnsub">
        <input type="reset" name="btnres">
    </form>
</html>