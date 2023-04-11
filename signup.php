<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel World | Signup</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" sizes="16x16" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>

    <?php include('navbar.html'); ?>
    <div class="body1">
        <form class="form1" action="signup-check.php" method="post">
            <h2 class="h2">SIGN UP</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error1"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success1"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label class="label1">Name</label>
            <?php if (isset($_GET['name'])) { ?>
                <input class="input1" type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
            <?php } else { ?>
                <input class="input1" type="text" name="name" placeholder="Name"><br>
            <?php } ?>

            <label class="label1">Email</label>
            <?php if (isset($_GET['uname'])) { ?>
                <input class="input1" type="email" name="uname" placeholder="Enter email" value="<?php echo $_GET['uname']; ?>"><br>
            <?php } else { ?>
                <input class="input1" type="text" name="uname" placeholder="Enter email"><br>
            <?php } ?>


            <label class="label1">Password</label>
            <input class="input1" type="password" name="password" placeholder="Password"><br>


            <label class="label1">Confirm Password</label>
            <input class="input1" type="password" name="re_password" placeholder="Confirm Password"><br>

            <label class="label1">Mobile</label>
            <?php if (isset($_GET['number'])) { ?>
                <input class="input1" type="number" name="number" placeholder="Mobile number" value="<?php echo $_GET['number']; ?>"><br>
            <?php } else { ?>
                <input class="input1" type="number" name="number" placeholder="Mobile number"><br>
            <?php } ?>

            <button class="button1" type="submit">Sign Up</button>
            <a href="index2.php" class="ca">Already have an account?</a>
        </form>
    </div>
    <script src="javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>