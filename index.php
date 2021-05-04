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
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email">
        <br>
        <label for="password">Password:</label>
        <input typ="password" name="password" id="password" placeholder="Password">
        <br>
        <label for="question">Choose a control question:</label>
        <select id="question" name="question">
        <option value="mothername">What was your mother's maiden name?</option>
        <option value="parentscity">In what city did your parents meet?</option>
        <option value="petname">What was the name of your first pet?</option>
        </select>
        <br>
        <label for="answer">Answer your control question:</label>
        <input type="text" name="answer" id="answer" placeholder="Control answer">
        <br>
        <label for="firstname">Firstname:</label>
        <input type="text" name="firstname" id="firstname" placeholder="Firstname">
        <br>
        <label for="lastname">Lastname:</label>
        <input type="text" name="lastname" id="lastname" placeholder="Lastname">
        <br>
        <label for="gender">What is your gender?</label>
        <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="unknown" name="gender" value="unknown">
        <label for="unknown">Prefer not to say</label>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>