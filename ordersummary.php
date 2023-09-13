<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

            <h1>Information</h1>
            <p>Customer Name: <?php echo $_POST['cname']; ?> </p><br>
            <p>Gender: <?php echo $_POST['gender']; ?> </p><br>
            <p>Age: <?php echo $_POST['age']; ?> </p><br>
            <p>Address: <?php echo $_POST['address']; ?> </p><br>
            <p>Cinema to watch: <?php echo $_POST['cinema']; ?></p>
            <p>Number of tickets to purchase: <?php echo $_POST['tickets']; ?></p>
            <p>Add ons: <?php echo $_POST['addons']; ?></p>
        

</body>
</html>