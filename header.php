<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gallery</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>

        <header>
            <nav>
                <div class="main-wrapper">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                        </ul>
                        <div class="nav-login">
                            <?php
                            if (isset($_SESSION['username'])) {
                             echo '<form action="includes/logout.inc.php" method="POST">
                                <button type="submit" name="submit">Logout</button>
                            </form>';
                            } else {
                                echo '<form action="includes/login.inc.php" method="POST">
                                <input type="text" name="uid" placeholder="Username/email">
                                <input type="password" name="pwd" placeholder="Password">
                                <button type="submit" name="submit">Login</button>
                            </form>
                            <a href="signup.php">Sign Up</a>';
                            }

                            ?>


                           

                        </div>
                    </nav>
                </div>
            </nav>
        </header>