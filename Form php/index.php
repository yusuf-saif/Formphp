<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="form_processing.php" method="post">
        <label for="name">First Name : </label>
        <input type="text" name="First Name" >
        <label for="name">Last Name : </label>
        <input type="text" name="Last Name" ><br><br>
        <label for="name">Email : </label>
        <input type="email" name="Email">
        <label for="name">Password : </label>
        <input type="password" name="Password"><br><br>
        <input type="submit" name="Submit" value="submit">
    </form>
</body>
</html>