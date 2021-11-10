<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h1>Fill in this form</h1>
    <div id="form">
    <form action="utama.php" name="form" method="POST">
        <label for ="name">Name :</label> <br>
        <input type="text" id="name" name="nama"><br> <br>
        <label for ="name">Email :</label> <br>
        <input type="text" id="name" name="email"><br> <br>
        <label for ="name">Password :</label> <br>
        <input type="password" id="name" name="pass"><br> <br>
        <label for="a">Which one do you prefer :</label> <br> <br>
        <input type="checkbox" id= "a"> Appertizer<br>
        <input type="checkbox" id= "a"> Main Course<br>
        <input type="checkbox" id= "a"> Dessert<br>
        <input type="submit" id="submit">
    </form>
    </div>
</body>
</html>