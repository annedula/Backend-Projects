<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>PHP User management</title>
</head>
<body>
    
    <form action="./formhandler.inc.php" method="post">
        <h1>Signup</h1>
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="password" placeholder="Password" required>
        <input type="text" name="email" placeholder="Email" required>
        <button class="submit-btn">Submit</button>
    </form>
   
    <form action="./userupdate.inc.php" method="post">
        <h1>Change account</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button class="update-btn">Update</button>
    </form>
    
    <form action="./userdelete.inc.php" method="post">
        <h1>Delete account</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <button class="delete-btn">Delete</button>
    </form>
    
   
</body>
</html>