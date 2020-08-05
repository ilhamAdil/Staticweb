<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>

    <form action="/datang">
        <label for="first">First name:</label><br><br>
        <input type="text" id="first" name="first"><br><br>

        <label for="last">Last name:</label><br><br>
        <input type="text" id="last" name="last"><br><br>
      

        <label>Gender:</label><br><br>
        <input type="radio" name="gender">Male<br>
        <input type="radio" name="gender">Female<br>
        <input type="radio" name="gender">Other<br><br>

        <label>Nationality:</label><br><br>
        <select>
            <option>Indonesian</option>
            <option>Singaporean</option>
            <option>Malaysian</option>
            <option>Australian</option>
        </select><br><br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox">Bahasa Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Other<br><br>

        <label for="area">Bio:</label><br><br>
        <textarea cols="30" rows="10" id="area"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>

    </body>
</html>