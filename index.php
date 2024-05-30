<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Sharing Platform</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Video Sharing Platform</h1>
            <nav>
                <a href="/">Home</a>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<a href="upload.php" class="button">Upload Video</a>';
                    echo '<a href="logout.php" class="button">Logout</a>';
                } else {
                    echo '<a href="login.php" class="button">Login</a>';
                    echo '<a href="register.html" class="button">Register</a>';
                }
                ?>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2>Latest Videos</h2>
        <div class="videos-list" id="videosList"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
