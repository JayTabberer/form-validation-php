
<?php
    // sets the form back to blank strings on loading of the page
    if(isset($username)){
        $username = ' ';
    }

    if(isset($password)){
        $password = ' ';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form validation</title>
</head>
<body>
    
    <div class="container">
        <div class="card">
            <div class="imgContainer">

            </div>
            <form action="results.php" method="POST">
                <input placeholder="username" type="text" name="username" value="<?php echo htmlspecialchars($username) ?>"> <br />
                <?php if (isset($usernameError)) { ?>
                    <p><?php echo $usernameError ?></p>
                 <?php } ?>

                <input placeholder="password" type="password" name="password" value="<?php echo htmlspecialchars($password) ?>"> <br />
                <?php if (isset($passwordError)) { ?>
                    <p><?php echo $passwordError ?></p>
                <?php } ?>

                <input type="submit" value="register">
            </form>
        </div>
    </div>

    <?php

    
    ?>

</body>
</html>