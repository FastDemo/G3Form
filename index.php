<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G3Form</title>
</head>
<body>
    <?php
        if (isset($_POST['username'])) {
            $file = fopen('data.txt', 'a');
            if ($file) {
                fwrite($$file, $_POST['username']);
            }

            fclose($file);
        }
    ?>



    <h1>My Form</h1>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input id="username" name="username" type="text">
        <input type="button" value="Submit">
    </form>
</body>
</html>