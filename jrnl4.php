<form name="f" method="post" action="suc.php">
Name: <input type="text" name="u"><br><br>
Password: <input type="password" name="p"><br><br>
Address: <textarea name="ad" cols="25" rows="3"> </textarea><br><br>
Pin Code: <input type="text" name="pcode"><br><br>
E-mail: <input type="text" name="e"><br><br>
Birth date: <input type="text" name="bd"> DD-MM-YYYY<br><br>
Gender:
Male <input type="radio" name="g" value="m">
Female <input type="radio" name="g" value="f"><br><br>
Blood Group: <select name="b">
<option value="defualt"> defualt </option>
<option value="b positive"> b+ve </option>
<option value="b-ve"> b-ve </option>

<option value="o+ve"> o+ve</option>
<option value="o-ve"> o-ve </option>
</select><br><br>

Country: <select name="c[]" multiple="multiple">
<option value="defualt"> defualt </option>
<option value="India"> India </option>
<option value="U.S."> U.S. </option>
<option value="U.K."> U.K.</option>
<option value="Australia"> Australia </option>
</select><br><br>
Hobbies:
Cricket <input type="checkbox" name="h[]" value="cricket"> <br><br>
Volleyball <input type="checkbox" name="h[]" value="volleyball"><br><br>
Football <input type="checkbox" name="h[]" value="football"><br><br>
Reading <input type="checkbox" name="h[]" value="reading"><br><br>
<input type="submit" value="Submit" name="s">
<input type="reset" value="Cancel" name="res"><br>