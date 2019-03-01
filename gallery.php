<?php
    $_SESSION['username'] = "Admin";
    include 'header.php';
?>

    <main>
        <section class="gallery-links">
            <div class="wrapper">
                <h2>Gallery</h2>

                <div class="gallery-container">
                <?php
                include_once 'includes/dbh.inc.php';

                $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL statement failed!";
                } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<a href="#">
                            <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                            <h3>'.$row["titleGallery"].'</h3>
                            <p>'.$row["descGallery"].'</p>
                        </a>';
                    }

                }


                ?>
                </div>
        <?php
        if (isset($_SESSION['username'])) {
            echo  '<div class="gallery-upload">
            <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image Title">
                <input type="text" name="filedesc" placeholder="Image description">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button> 
            </form>  
        </div>';
        }
        
        ?>
        </section>

    </main>

    <?php
    include_once 'footer.php'
?>

