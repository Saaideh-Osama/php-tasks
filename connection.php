<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{background-color:orange;}
</style>
</head>
<body>
    <form action='connect.php' method="POST">
        <label for="user" > NAME : </label> <br>
        <input type='text' name='name' id="name"  required/><br><br>
        <label for="email" >E_MAIL : </label> <br>
        <input type='email' name='email' id="email"  required/><br><br>
        <label for="password" > password : </label> <br>
        <input type='password' name='password' id="password"  required/><br><br>
        <label for="phone" > PHONE : </label> <br>
        <input type='text' name='phone' id="phone"  required/><br><br>
<input type="submit" name="submit" id="submit">
</form>

</body>
</html>