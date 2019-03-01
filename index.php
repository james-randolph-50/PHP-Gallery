<?php
    include_once 'header.php';
?>

        <section class="home-page">
                <div class="wrapper">
                    <?php
                    if (isset($_SESSION['u_id'])) {
                        echo "You are logged in!";
                    }
                    ?>

                    <div class="home-page-container">
                        <h4>Secure Login</h4>
                        <p>Including Error Messages</p>
                    </div>
                    <div class="home-page-container">
                        <h4>Upload Images</h4>
                        <p>Checks for file size & type</p>
                    </div>  
                </div>
            </section>

<?php
    include_once 'footer.php'
?>