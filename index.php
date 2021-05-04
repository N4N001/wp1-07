<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit.php" method="post">
    <h1>Registration</h1>
        <label for="firstname">Firstname:</label>
        <input type="text" name="firstname" id="firstname" placeholder="Firstname">
        <br>
        <label for="lastname">Lastname:</label>
        <input type="text" name="lastname" id="lastname" placeholder="Lastname">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Login">
        <br>
        What is your gender?
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="unknown" name="gender" value="unknown">
        <label for="unknown">Prefer not to say</label>

    </form>
</body>
</html>